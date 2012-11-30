<?php
   include('library.php');
   $browser = visitor::browser();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <meta charset="UTF-8">
   <title>Whats your viewport?</title>

   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
   <meta name="robots" content="noindex,nofollow">
   <meta name="author" content="Simon Fraser <http://simonf.co.uk>">
   <meta name="description" content="Something to help you find out some vital information about your viewport.">

   <!-- The SCSS File / Uses Compass -->
   <!-- <link rel="stylesheet" type="text/scss" href="scss/screen.scss"> -->
   <link rel="stylesheet" type="text/css" href="css/screen.css">

   <!-- HTML5 shim -->
   <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->

   <script src="javascript/jquery-1.8.3.min.js"></script>
</head>
<body>

   <div class="output">
      <h2>Your Viewport</h2>
      <div class="hero"></div>
      <div class="info">
         <h3><?= str::titlecase($browser['name']); ?> <?= ($browser['majorver']!='')? "V" . $browser['majorver'] : '' ; ?> On <?= visitor::os(); ?></h3>
      </div>
   </div>

   <!-- The CoffeeScript File -->
   <!-- <script src="javascript/viewport.runtime.coffee"></script> -->
   <script src="javascript/viewport.runtime.js"></script>

   <!-- Tracking Code -->
   <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', 'UA-xxxxxxx-xx']);
     _gaq.push(['_trackPageview']);
     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
   </script>

</body>
</html>