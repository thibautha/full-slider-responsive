<?php

    //Load language

    if(isset($_GET['lang']) ){

        if ($_GET['lang']=='fr') {
            include('lang/fr-lang.php');

        }else if ($_GET['lang']=='en') {
            include('lang/en-lang.php');
        }

    }else {
        include('lang/en-lang.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo TXT_TITLE; ?></title>
      <meta name="description" content="<?php echo 'META_TITLE'; ?>"><!--TODO  META_TXT_TITLE-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:title" content="<?php echo META_TITLE; ?>" />
      <meta property="og:site_name" content="<?php echo META_NAME; ?>"/>
      <meta property="og:url" content="<?php echo META_URL; ?>" />
      <meta property="og:description" content="<?php echo META_DESCRIPTION; ?>" />
      <meta property="og:image" content="<?php echo META_IMG; ?>" />
      <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css" />
      <link rel="stylesheet" href="sass/main.css" />
      <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
  </head>
  <body>
      <!--Logo-->
      <h1 id="logo" class="hidden" data-url="<?php echo IMG_SLIDE_FIRST; ?>" style="display:none;"><?php echo TXT_TITLE; ?></h1>

      <!--Navigation-->
      <ul class="navigation" style="display:none;"></ul>

      <!--Desktop Slider-->
      <div class="main-desktop" style="display:none;">
          <div class="content-left">
              <ul class="slider hidden">
                  <li class="slide selected" data-src="<?php echo IMG_SLIDE_FIRST; ?>" data-img="<?php echo IMG_LOAD_FIRST; ?>"><img alt="FIRST"/></li>
                  <li class="slide hidden" data-src="<?php echo IMG_SLIDE_SECOND; ?>" data-img="<?php echo IMG_LOAD_SECOND; ?>"><img alt="SECOND"/></li>
                  <li class="slide hidden" data-src="<?php echo IMG_SLIDE_THIRD; ?>" data-img="<?php echo IMG_LOAD_THIRD; ?>"><img alt="THIRD"/></li>
                  <li class="slide hidden" data-src="<?php echo IMG_SLIDE_FOURTH; ?>" data-img="<?php echo IMG_LOAD_FOURTH; ?>"><img alt="FOURTH"/></li>
                  <li class="slide hidden">
                      <div class="slide__content slide__content-half">
                          <h2><?php echo TXT_SLIDE_NEWYEAR; ?></h2>
                      </div>
                  </li>
              </ul>
          </div>

          <div class="content-right">
              <ul class="slider hidden">
                  <li class="slide selected">
                      <div class="slide__content">
                          <h2><?php echo TXT_SLIDE_TOP; ?> n°1</h2>
                          <p><?php echo TXT_SLIDE_FIRST; ?></p>
                      </div>
                  </li>
                  <li class="slide hidden">
                      <div class="slide__content">
                          <h2><?php echo TXT_SLIDE_TOP; ?> n°2</h2>
                          <p><?php echo TXT_SLIDE_SECOND; ?></p>
                      </div>
                  </li>
                  <li class="slide hidden">
                      <div class="slide__content">
                          <h2><?php echo TXT_SLIDE_TOP; ?> n°3</h2>
                          <p><?php echo TXT_SLIDE_THIRD; ?></p>
                      </div>
                  </li>
                  <li class="slide hidden">
                      <div class="slide__content">
                          <h2><?php echo TXT_SLIDE_TOP; ?> n°4</h2>
                          <p><?php echo TXT_SLIDE_FOURTH; ?></p>
                      </div>
                  </li>
                  <li class="slide hidden">
                      <div class="slide__content slide__content-half">
                          <h2><?php echo TXT_SLIDE_NEWYEAR; ?></h2>
                      </div>
                  </li>
              </ul>
          </div>
      </div>

      <!--Mobile Slider-->
      <div class="main-mobile" style="display:none;">
          <div class="content-center">
              <ul>
                  <li class="slide slide2 collapsed show" data-type="complex">
                      <div class="image image1 <?php echo IMG_SLIDE_FIRST; ?>"></div>
                      <div class="text">
                          <h2><?php echo TXT_SLIDE_TOP; ?>  n°1</h2>
                          <p><?php echo TXT_SLIDE_FIRST; ?></p>
                      </div>
                  </li>
                  <li class="slide slide3 collapsed" data-type="complex">
                      <div class="image image2 <?php echo IMG_SLIDE_SECOND; ?>"></div>
                      <div class="text">
                          <h2><?php echo TXT_SLIDE_TOP; ?>  n°2</h2>
                          <p><?php echo TXT_SLIDE_SECOND; ?></p>
                      </div>
                  </li>
                  <li class="slide slide2 collapsed" data-type="complex">
                      <div class="image image3 <?php echo IMG_SLIDE_THIRD; ?>"></div>
                      <div class="text">
                          <h2><?php echo TXT_SLIDE_TOP; ?>  n°3</h2>
                          <p><?php echo TXT_SLIDE_THIRD; ?></p>
                      </div>
                  </li>
                  <li class="slide slide3 collapsed" data-type="complex">
                      <div class="image image4 <?php echo IMG_SLIDE_FOURTH; ?>"></div>
                      <div class="text">
                          <h2><?php echo TXT_SLIDE_TOP; ?>  n°4</h2>
                          <p><?php echo TXT_SLIDE_FOURTH; ?></p>
                      </div>
                  </li>
                  <li class="slide slide-title" data-type="simple">
                      <h2><?php echo M_TXT_SLIDE_NEWYEAR; ?></h2>
                      <a id="legalM" href="#"><?php echo TXT_LEGAL; ?></a>
                  </li>
              </ul>
          </div>
      </div>

      <!--Link Legal Notice-->
      <a id="legal" class="hidden" href="#" style="display:none;"><?php echo TXT_LEGAL; ?></a>

      <!--Modal-->
      <div class="background">
          <div class="modal">
              <h3><?php echo TXT_LEGAL; ?></h3>
              <a class="close" href="#"><?php echo TXT_CLOSE; ?></a>
              <p><?php echo TXT_MODAL_LEGAL; ?></p>
          </div>
      </div>

      <!--Loader-->
      <div id="cover-load" style="display: none;">
          <div class="cover-mask">
              <img src="./img/loader.jpg" alt="" />
          </div>
      </div>


    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->


    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/modernizr.js"></script>
    <script src="../node_modules/gsap/src/minified/TweenMax.min.js"></script>
    <script src="scripts/jquery.mousewheel.js"></script>
    <script src="scripts/ScrollManager.js"></script>
    <script src="scripts/main.js"></script>

    <!--Old Browser-->
    <script>
    (function(m, d) {
        if( !m.csstransforms ) { // !m.csstransforms
            d.body.className += ' error--browser';
            d.write('<div id="error_browser_wrapper"><div id="error_browser"><img class="logo_home" src="<?php echo IMG_BROWSER_FAIL; ?>" alt="<?php echo TXT_TITLE; ?>"/><div class="link_navigateur"><?php
            ?><h3>Ce site web n\'est pas optimisé pour votre navigateur.<br /><br /> Vous pouvez le mettre à jour ou choisir l\'un des navigateur suivant&nbsp;:</h3><ul><?php
            ?><li><a target="_blank" href="http://www.google.com/intl/fr_fr/chrome/browser/"><img src="<?php echo PATH_URL; ?>img/navigateur/chrome.png" alt="Chrome"><br/>Chrome</a></li><?php
            ?><li><a target="_blank" href="http://support.apple.com/kb/DL1531?viewlocale=fr_FR"><img src="<?php echo PATH_URL; ?>img/navigateur/safari.png" alt="Safari"><br/>Safari</a></li><?php
            ?><li><a target="_blank" href="https://www.mozilla.org/fr/firefox/new/"><img src="<?php echo PATH_URL; ?>img/navigateur/firefox.png" alt="Firefox"><br/>Firefox</a></li><?php
            ?><li><a target="_blank" href="http://windows.microsoft.com/fr-fr/internet-explorer/ie-11-worldwide-languages"><img src="<?php echo PATH_URL; ?>img/navigateur/ie.png" alt="IE"><br/>Internet<br/>Explorer</a></li><?php
        ?></ul></div></div></div>');}
    })(Modernizr, document);

    </script>
  </body>
</html>
