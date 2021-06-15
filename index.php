<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Firefly Syndicate, LLC</title>
<link href="css/home-styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() { // ... a dash of jQuery.
    var v = document.createElement("video"); // Are we dealing with a browser that supports <video>? 
    if ( !v.play ) { // If no, use Flash.
      var params = {
        allowfullscreen: "true",
        allowscriptaccess: "always"
      };
      swfobject.embedSWF("swf/firefly-intro.swf", "video-frame", "970", "300", "9.0.0", "swf/expressInstall.swf", flashvars, params);
    }
  });
</script>
<meta http-equiv="refresh" content="10;url=about.php">
</head>
<body id="home">
<div id="wrapper">
  <div id="video-frame">
    <video
      width="970"
      height="300"
      autoplay="autoplay"
      id="autostart">
      <source src="video/firefly-intro.mp4" type="video/mp4" />
      <source src="video/firefly-intro.theora.ogg" type="video/ogg" />
    </video>
  </div>
</div>
</body>
</html>