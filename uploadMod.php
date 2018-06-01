<?php
	//Check if the file is well uploaded
	if($_FILES['filemod']['error'] > 0) { echo 'Error during uploading, try again'; }

	//We won't use $_FILES['file']['type'] to check the file extension for security purpose

	//Set up valid image extensions
	$extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' );

	//Extract extention from uploaded file
		//substr return ".jpg"
		//Strrchr return "jpg"

	$extUpload = strtolower( substr( strrchr($_FILES['filemod']['name'], '.') ,1) ) ;
	//Check if the uploaded file extension is allowed

	if (in_array($extUpload, $extsAllowed) ) {

	//Upload the file on the server

	$name = "img/{$_FILES['filemod']['name']}";
	$result = move_uploaded_file($_FILES['filemod']['tmp_name'], $name);


	if($result){
         chmod($name,0755);}

	} else { echo 'File is not valid. Please try again'; }

?>
