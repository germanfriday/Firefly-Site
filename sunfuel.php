<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Firefly Syndicate, LLC</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script>
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
<body id="video">
      <!--<video src="http://medias.jilion.com/sublimevideo/dartmoor.mov" autoplay="autoplay" controls="controls">-->
      <div id="video-frame"
      <video
      width="640"
      height="360"
      autoplay="autoplay"
      controls="controls"
      poster="img/sunfuel-poster.jpg">
      <source src="video/sunfuel.m4v" type="video/mp4" />
	  <source src="video/sunfuel.ogv" type="video/ogg" />
      </video>
      </div>
</body>
</html>
