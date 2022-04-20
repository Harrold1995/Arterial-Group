<?php
if (strpos(url(), "arterial.arterialdigital.com.au")) {
    /**
     * CSS
     */
   $minCSS = new MatthiasMullie\Minify\CSS();




   $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/css/bootstrap.css");
   $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/css/style.css");
   $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/css/gallery.css");
   $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/css/lightbox.min.css");


   //Minify CSS
   $minCSS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/dist/css/style.css");


   /**
    * JS
    */
   $minJS = new MatthiasMullie\Minify\JS();

   $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js/jquery-3.5.1.min.js");
   $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js/lightbox.min.js");
   $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js/bootstrap.bundle.min.js");
   $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js/backToTop.js");
   $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js/loader.js");



   //Minify JS
   $minJS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/dist/js/script.js");
}