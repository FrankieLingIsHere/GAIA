<?php
include 'create_table_contributor.php';

$plant=$_POST['plant'];
$comment=$_POST['comment'];

$sql = "INSERT INTO Comment(Plant, Comment) VALUES ('$plant','$comment')";
$result = mysqli_query($connect, $sql);

if($result == true)
	echo "New record is added into database successfully";
else
	echo "Submission of new record failed";
mysqli_close($connect);
?>