<?php 

//NOTE : This file is for user interfaces only, you can add more css or javascript here :)

// ------------------------------------------IMAGE SECTION---------------------------------------------\\
function image($img, $size)
{
	echo '<img src="//localhost/rute-master/application/public/img/'.$img.'" width="'.$size.'">';
}
// ------------------------------------------END IMAGE SECTION---------------------------------------------\\

// ---------------------------------------------DESIGN SECTION----------------------------------------------\\
function design()
{
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
	echo '<meta name="description" content="">';
	echo '<meta name="author" content="">';
	echo '<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">';
	echo '<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">';
}

// ---------------------------------------------END DESIGN SECTION----------------------------------------------\\

// -------------------------------------------------JS SECTION-------------------------------------------------------\\
function javascript()
{
	echo '<script src="public/js/bootstrap.min.js"></script>';
}
// -------------------------------------------------JS SECTION-------------------------------------------------------\\
 ?>