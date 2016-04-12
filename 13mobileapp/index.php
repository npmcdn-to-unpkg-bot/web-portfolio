<?php 
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 header("Location: m/index.html");
}
 
// Any tablet device.
if( $detect->isTablet() ){
 header("Location: m/index.html");
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alex Powelson Mobile jQuery</title>
</head>
<body>
<h1>This is the desktop site; <a href="m/index.html">go to mobile!</a></h1>
</body>
</html>