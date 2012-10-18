<?php

$contentarray = array('<q>This presentation is about my impress.js fork</q>',
                      '<q>impress.js is now able to load presentations as json file via ajax</q>',
                      '<q>in the next days, the following features will come:</q>',
                      '<q>icomoon integration</q>',
                      '<q>a sync mode</q>',
                      '<q>a compress tool</q>',
                      '<q>more examples</q>',
                      '<q>and last, but not least, an editor</q>',
                      '',
                      '<q>Thank you for watching!</q>');

$json = json_encode(array("language" => "en",
                          "title" => "impress.js | HTML5+CSS3 presentation tool",
                          "description" => "impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com.",
                          "author" => "Simon Waldherr",
                          "css" => array("http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic", "./css/impress-demo.css"),
                          "favicon" => "./favicon.png",
                          "touchicon" => "./apple-touch-icon.png",
                          "slides" => array(array("id" => "fork",     "class" => "step slide", "position" => array("x" => 100, "y" => 0,     "z" => 0),     "rotate" => array("x" => 0,    "y" => 0), "scale" => 2, "content" => $contentarray[0]),
                                            array("id" => "json",     "class" => "step slide", "position" => array("x" => 100, "y" => 1200,  "z" => -500),  "rotate" => array("x" => -45,  "y" => 0), "scale" => 2, "content" => $contentarray[1]),
                                            array("id" => "soon",     "class" => "step slide", "position" => array("x" => 100, "y" => 1700,  "z" => -1700), "rotate" => array("x" => -90,  "y" => 0), "scale" => 2, "content" => $contentarray[2]),
                                            array("id" => "icon",     "class" => "step slide", "position" => array("x" => 100, "y" => 1200,  "z" => -2900), "rotate" => array("x" => -135, "y" => 0), "scale" => 2, "content" => $contentarray[3]),
                                            array("id" => "sync",     "class" => "step slide", "position" => array("x" => 100, "y" => 0,     "z" => -3400), "rotate" => array("x" => -180, "y" => 0), "scale" => 2, "content" => $contentarray[4]),
                                            array("id" => "compress", "class" => "step slide", "position" => array("x" => 100, "y" => -1200, "z" => -2900), "rotate" => array("x" => -225, "y" => 0), "scale" => 2, "content" => $contentarray[5]),
                                            array("id" => "examples", "class" => "step slide", "position" => array("x" => 100, "y" => -1700, "z" => -1700), "rotate" => array("x" => -270, "y" => 0), "scale" => 2, "content" => $contentarray[6]),
                                            array("id" => "editor",   "class" => "step slide", "position" => array("x" => 100, "y" => -1200, "z" => -500),  "rotate" => array("x" => -315, "y" => 0), "scale" => 2, "content" => $contentarray[7]),

                                            array("id" => "fly",      "class" => "step",       "position" => array("x" => -1500, "y" => 500, "z" => -1700), "rotate" => array("x" => -360, "y" => 90), "scale" => 5, "content" => $contentarray[8]),
                                            array("id" => "thanks",   "class" => "step slide", "position" => array("x" => -2500, "y" => 0,   "z" => -1700), "rotate" => array("x" => -360, "y" => 90), "scale" => 1, "content" => $contentarray[9])
                                            )));

if(substr($_SERVER["REQUEST_URI"], -17) == 'original.json.php')
  {
    echo $json;
  }

?>