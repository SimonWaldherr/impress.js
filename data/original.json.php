<?php

$contentarray = array('<q>Aren&apos;t you just <b>bored</b> with all those slides-based presentations?</q>',
                      '<q>Don&apos;t you think that presentations given <strong>in modern browsers</strong> shouldn&apos;t <strong>copy thelimits</strong> of &apos;classic&apos; slide decks?</q>',
                      '<q>Would you like to <strong>impress your audience</strong> with <strong>stunning visualization</strong> ofyour talk?</q>',
                      '<span class="try">then you should try</span><h1>impress.js<sup>*</sup></h1><span class="footnote"><sup>*</sup> no rhyme intended</span>',
                      '<p>It&apos;s a <strong>presentation tool</strong> <br/>inspired by the idea behind <a href="http://prezi.com">prezi.com</a> <br/>and based on the <strong>power of CSS3 transforms and transitions</strong> in modern browsers.</p>',
                      '<p>visualize your <b>big</b> <span class="thoughts">thoughts</span></p>',
                      '<p>and <b>tiny</b> ideas</p>',
                      '<p>by <b class="positioning">positioning</b>, <b class="rotating">rotating</b> and <b class="scaling">scaling</b> them on an infinite canvas</p>',
                      '<p>the only <b>limit</b> is your <b class="imagination">imagination</b></p>',
                      '<p>want to know more?</p><q><a href="http://github.com/bartaz/impress.js">use the source</a>, Luke!</q>',
                      '<p>one more thing...</p>',
                      '<p><span class="have">have</span> <span class="you">you</span> <span class="noticed">noticed</span> <span class="its">it&apos;s</span> <span class="in">in</span> <b>3D<sup>*</sup></b>?</p><span class="footnote">* beat that, prezi ;)</span>',
                      '<p>and now, you can load the presentation as json-data</p>',
                      '');

echo json_encode(array("language" => "en",
                       "title" => "impress.js | presentation tool based on the power of CSS3 transforms and transitions in modern browsers | by Bartek Szopka @bartaz",
                       "description" => "impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com.",
                       "author" => "Bartek Szopka",
                       "css" => array("http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic", "http://bartaz.github.com/impress.js/css/impress-demo.css"),
                       "favicon" => "http://bartaz.github.com/impress.js/favicon.png",
                       "touchicon" => "http://bartaz.github.com/impress.js/apple-touch-icon.png",
                       "slides" => array(array("id" => "bored",          "class" => "step slide",    "position" => array("x" => -1000, "y" => -1500),                                                                        "content" => $contentarray[0]),
                                         array("id" => "",               "class" => "step slide",    "position" => array("x" => 0,     "y" => -1500),                                                                        "content" => $contentarray[1]),
                                         array("id" => "",               "class" => "step slide",    "position" => array("x" => 1000,  "y" => -1500),                                                                        "content" => $contentarray[2]),
                                         array("id" => "title",          "class" => "step",          "position" => array("x" => 0,     "y" => 0),                  "scale" => 4,                                             "content" => $contentarray[3]),
                                         array("id" => "its",            "class" => "step",          "position" => array("x" => 850,   "y" => 3000),               "scale" => 5,  "rotate" => array(90),                     "content" => $contentarray[4]),
                                         array("id" => "big",            "class" => "step",          "position" => array("x" => 3500,  "y" => 2100),               "scale" => 6,  "rotate" => array(180),                    "content" => $contentarray[5]),
                                         array("id" => "tiny",           "class" => "step",          "position" => array("x" => 2825,  "y" => 2325, "z" => -3000), "scale" => 1,  "rotate" => array(300),                    "content" => $contentarray[6]),
                                         array("id" => "ing",            "class" => "step",          "position" => array("x" => 3500,  "y" => -850),               "scale" => 6,  "rotate" => array(270),                    "content" => $contentarray[7]),
                                         array("id" => "imagination",    "class" => "step",          "position" => array("x" => 6700,  "y" => -300),               "scale" => 6,                                             "content" => $contentarray[8]),
                                         array("id" => "source",         "class" => "step",          "position" => array("x" => 6300,  "y" => 2000),               "scale" => 4,  "rotate" => array(20),                     "content" => $contentarray[9]),
                                         array("id" => "one-more-thing", "class" => "step",          "position" => array("x" => 6000,  "y" => 4000),               "scale" => 2,                                             "content" => $contentarray[10]),
                                         array("id" => "its-in-3d",      "class" => "step",          "position" => array("x" => 6200,  "y" => 4300, "z" => -100),  "scale" => 2,  "rotate" => array("x" => -40, "y" => 10),  "content" => $contentarray[11]),
                                         array("id" => "json",           "class" => "step",          "position" => array("x" => 4000,  "y" => 4300, "z" => -120),  "scale" => 2,  "rotate" => array("x" => -140, "y" => 10), "content" => $contentarray[12]),
                                         array("id" => "overview",       "class" => "step",          "position" => array("x" => 3000,  "y" => 1500),               "scale" => 10,                                            "content" => $contentarray[13])
                                         )));

?>