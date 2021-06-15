<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Firefly Syndicate, LLC</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
        <script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]-->
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/prototype.lite.js"></script>
<script type="text/javascript" src="js/moo.fx.js"></script>
<script type="text/javascript" src="js/moo.fx.pack.js"></script>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
     jQuery.noConflict();
     // Use jQuery via jQuery(...)
     jQuery(document).ready(function(){
       jQuery("stretch").hide();
     });   
   </script>
   <script type="text/javascript">
// Initialize the effects
var stretch;
window.onload = function() {
stretch = new fx.Combo('stretch', { height: true, opacity: false, duration: 150});
// Hide them to begin with
stretch.hide();
}
</script>
<script type="text/javascript">
  $(document).ready(function() { // ... a dash of jQuery.
    var v = document.createElement("video"); // Are we dealing with a browser that supports <video>? 
    if ( !v.play ) { // If no, use Flash.
      var params = {
        allowfullscreen: "true",
        allowscriptaccess: "always"
      };
      var flashvars = {
        file: "video/sunfuel.flv",
        image: "img/sunfuel-poster.jpg"
      };
      swfobject.embedSWF("swf/sunfuel.swf", "video-frame", "640", "360", "9.0.0", "expressInstall.swf", flashvars, params);
    }
  });
</script>
</head>