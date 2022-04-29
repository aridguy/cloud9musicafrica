<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
include ('../connect.php');
//if button with the name uploadfilesub has been clicked
if(isset($_POST['uploadfilesub'])) {
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$artist = mysqli_real_escape_string($conn, $_REQUEST['artisted']);
$facebook = mysqli_real_escape_string($conn, $_REQUEST['fbk']);
$twitter = mysqli_real_escape_string($conn, $_REQUEST['tw']);
$Instagram = mysqli_real_escape_string($conn, $_REQUEST['ig']);
$Youtube = mysqli_real_escape_string($conn, $_REQUEST['yt']);
$Linkedin = mysqli_real_escape_string($conn, $_REQUEST['ld']);
$sql = "INSERT INTO `uploadedimage` (`imagename`, `artistname`, `fb`) VALUES ('$filename', '$artist', '$facebook')";

$qry = mysqli_query($conn, $sql);
if( $qry) {
echo "</br>image uploaded";
}
}
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	/*#good {
		display: none;
	}*/
</style>
<body>
<!-- <! — Make sure to put "enctype="multipart/form-data" inside form tag when uploading files → -->
<form action="" method="post" enctype="multipart/form-data" >
<!-- <! — input tag for file types should have a "type" attribute with value "file" → -->
<input type="file" name="uploadfile" required="" />
<input type="text" name="artisted" required="" placeholder="Artist Name">
<input type="text" name="fbk" placeholder="facebook">
<input type="text" name="twt" placeholder="Twitter">
<input type="text" name="insta" placeholder="Instagram">
<input type="text" name="yout" placeholder="Youtube">
<input type="submit" name="uploadfilesub" value="upload" required="" />
</form>
<br><br>
<!-- <img alt="Image Section here" id="good" src="<?php echo($folder.$filename)?>">; -->

<img alt="Image Section" src="<?php echo($folder.$filename)?>">;
</body>
</html>