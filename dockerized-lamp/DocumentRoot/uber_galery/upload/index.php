<?php
	session_start();
	$target_dir = "/var/www/html/uber_galery/gallery-images/";
	$uploadOk = 1;
	if(isset($_POST["submit"])) {
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	    if (file_exists($target_file)) {
	    	echo "Sorry, file already exists.";
	    	$uploadOk = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
	    	echo "Sorry, your file is too large.";
	    	$uploadOk = 0;
		} 
		$allowed_ext = array( "jpg", "jpeg", "gif", "png", "bmp");
		if(!in_array($imageFileType, $allowed_ext, TRUE)) {
		    echo "File is not an image.";
		    $uploadOk = 0;
		}
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Uber Gallery</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>