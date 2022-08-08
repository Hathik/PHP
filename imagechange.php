<html>
<head>
<title>Random Shape Game</title>
</head>

<body>
<center>
<h2> Random Shape Game</h2>
<div style="height:350px">
<?php
$shapes = array("square.jpg","circle.jpg","heart.jpg","star.jpg");  //shorturl.at/BTUXZ
if(isset($_GET["shape"])){
	echo "<img src =".$_GET['shape'].">";
}
?></div>
<p>
<h1><a href="imagechange.php?shape=<?php echo $shapes[array_rand($shapes,1)];?>">
<?php if(isset($_GET["shape"])) {echo "change shape";}
else {echo "Create shape";}?>
</a></h1>
</p></center>
</body>
</html>