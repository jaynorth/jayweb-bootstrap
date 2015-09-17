<!doctype html>
<html>
<head>
	<title>Pets</title>
</head>
<body>
<?php #script 5.2 - square.php
//This page use the square class and is derived from Rectangle

require('rectangle.php');

class Square extends Rectangle{

	function __construct($side=0){
		$this->width=$side;
		$this->height=$side;
	}

}//end of square class

$width = 190;
$height = 55;

echo "<h2>With a width of $width and a height of $height..</h2>";

//create new object:

$r = new Rectangle($width, $height);

 

//Print the Area:
echo '<p>The area of the rectangle is ' . $r->getArea() . '<p>';

//Print the perimeter 

echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '<p>';

//square

$side = 60;

echo "<h2>With each side being $side...</h2>";

$s = new Square($side);

echo '<p>The area of the square is ' . $s->getArea() . '</p>';

echo '<p>The perimeter of the square is ' . $s->getPerimeter() . '</p>';

unset ($r, $s);

 
?>
</body>
</html>