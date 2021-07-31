<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video</title>

<style type="text/css">
body, html { border: 0px; margin: 0px; padding: 0px; line-height: 1; }
iframe { margin: 50px 0px 0px 50px; }
</style>
</head>

<body>

<?php 
$video = $_GET['v'];
?>

<iframe type="text/html" width="640" height="385" src="http://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" ></iframe>

</body>
</html>