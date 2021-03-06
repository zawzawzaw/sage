<?php
  global $is_debug;
?>

<!-- 
         _   ___     ___    ____   ____ ____  ___ ____ _____ 
        | | / \ \   / / \  / ___| / ___|  _ \|_ _|  _ \_   _|
     _  | |/ _ \ \ / / _ \ \___ \| |   | |_) || || |_) || |  
    | |_| / ___ \ V / ___ \ ___) | |___|  _ < | ||  __/ | |  
     \___/_/   \_\_/_/   \_\____/ \____|_| \_\___|_|    |_|  
                                                             
-->


<?php if($is_debug): ?>
  <!-- Development Version -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Page Library -->
  <script type="text/javascript" src="../source/js/all.js"></script>
  <script type="text/javascript" src="../source/library/jquery/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="../source/library/jquery/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="../source/library/_js/mobile-detect.js"></script>
  <script type="text/javascript" src="../source/library/_js/preloadjs-0.4.0.min.js"></script>
  <script type="text/javascript" src="../source/library/gsap/TweenMax.min.js"></script>
  <script type="text/javascript" src="../source/library/gsap/jquery.gsap.min.js"></script>
  <script type="text/javascript" src="../source/library/gsap/easing/EasePack.min.js"></script>
  <script type="text/javascript" src="../source/library/gsap/plugins/ScrollToPlugin.min.js"></script>
  <script type="text/javascript" src="../source/library/scrollmagic/ScrollMagic.js"></script>
  <script type="text/javascript" src="../source/library/scrollmagic/plugins/animation.gsap.js"></script>
  <script type="text/javascript" src="../source/library/scrollmagic/plugins/debug.addIndicators.js"></script>
  <script type="text/javascript" src="../source/library/scrollmagic/lib/iscroll-probe.js"></script>
  <script type="text/javascript" src="../source/library/slick/slick.min.js"></script>
  <script type="text/javascript" src="../source/library/instafeed/instafeed.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2SOmCXdM5TEYYk81BFxiFwJZ_Z56moYo&v=3.exp"></script>

  <!-- Google Closure -->
  <script src="../source/library/closure-library/closure/goog/base.js"></script>
  <script src="../source/js/goog-custom-dependencies.js"></script>
  <script type="text/javascript">
    goog.require('sagewest.page.Home');
  </script>
  <script type="text/javascript">
    page = new sagewest.page.Home({});
    $('body').addClass('preload-start');
  </script>

<?php else: ?>

  <!-- Optimized Version -->
  <script type="text/javascript">
    var PAGE_LIBRARY        = "js/sagewest-page-libraries.min.js";
    var PAGE_JS             = "js/sagewest-page-home.min.js";
  </script>
  <script type="text/javascript" src="js/home.min.js"></script>

<?php endif; ?>