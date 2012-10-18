<?php
//$ImpressJSON  = file_get_contents('./data/original.json.php');
include ("./data/original.json.php");

$ImpressJSON  = $json;
$ImpressArray = json_decode($ImpressJSON, 1);

?><!doctype html>
<html lang="<?php echo $ImpressArray['language']; ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title><?php echo $ImpressArray['title']; ?></title>
    <meta name="description" content="<?php echo $ImpressArray['description']; ?>" />
    <meta name="author" content="<?php echo $ImpressArray['author']; ?>" />
    <?php 
      foreach($ImpressArray['css'] as $css)
        {
          echo '<link href="'.$css.'" rel="stylesheet" />';
        }
     ?>
    <link rel="shortcut icon" href="<?php echo $ImpressArray['favicon']; ?>" />
    <link rel="apple-touch-icon" href="<?php echo $ImpressArray['touchicon']; ?>" />
</head>
<body class="impress-not-supported">
<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>
<div id="impress">

<?php 
 foreach($ImpressArray['slides'] as $slide)
   {
     echo '<div';
     if(isset($slide['id'])){echo ' id="'.$slide['id'].'"';}
     if(isset($slide['class'])){echo ' class="'.$slide['class'].'"';}
     if(isset($slide['position']['x'])){echo ' data-x="'.$slide['position']['x'].'"';}
     if(isset($slide['position']['y'])){echo ' data-y="'.$slide['position']['y'].'"';}
     if(isset($slide['position']['z'])){echo ' data-z="'.$slide['position']['z'].'"';}
     if(isset($slide['scale'])){echo ' data-scale="'.$slide['scale'].'"';}
     if(isset($slide['rotate'][0])){echo ' data-rotate="'.$slide['rotate'][0].'"';}
     if(isset($slide['rotate']['x'])){echo ' data-rotate-x="'.$slide['rotate']['x'].'"';}
     if(isset($slide['rotate']['y'])){echo ' data-rotate-y="'.$slide['rotate']['y'].'"';}
     echo '>'.$slide['content'].'</div>'."\n";
   }
?>

</div>

<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>
<script src="http://bartaz.github.com/impress.js/js/impress.js"></script>
<script>impress().init();</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12565471-1']);
  _gaq.push(['_setDomainName', 'waldherr.eu']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
