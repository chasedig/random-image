<?php


function chooseImage() {

$imageArray = scandir('images',0);

//var_dump($imageArray); // debug

$randomPosition = mt_rand(1,count($imageArray)-1);

if ($imageArray[$randomPosition] !== ".") {
	if ($imageArray[$randomPosition] !== "..") {
		if ($imageArray[$randomPosition] !== "index.php") {

		global $randomImage;

		$randomImage = $imageArray[$randomPosition];

				} else {
				chooseImage();
			} 
		} else {
		chooseImage();
	}
		}  else {
	chooseImage();
	}
}



chooseImage();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Feelin' Lucky</title>
</head>
<body>
<center><p style="font-size: 30px;">Random image chosen:</p></center>
<center><image style="height: 700px;" src="<?php echo('images/'.$randomImage);?>"></image></center>

</body>
</html>

