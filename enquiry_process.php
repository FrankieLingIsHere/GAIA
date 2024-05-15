<?php
include 'create_table.php';

// $fname= isset($_POST['fname']);
// $lname=$_POST['lname'];
// $email=$_POST['email'];
// $phone=$_POST['phnum'];
// $streetaddress=$_POST['streetadd'];
// $city=$_POST['c/t'];
// $state=$_POST['state'];
// $postcode=$_POST['pcode'];
// $plant=$_POST['plant'];
// $comment=$_POST['comment'];

$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phnum']) ? $_POST['phnum'] : '';
$streetaddress = isset($_POST['streetadd']) ? $_POST['streetadd'] : '';
$city = isset($_POST['c/t']) ? $_POST['c/t'] : '';
$state = isset($_POST['state']) ? $_POST['state'] : '';
$postcode = isset($_POST['pcode']) ? $_POST['pcode'] : '';
$plant = isset($_POST['plant']) ? $_POST['plant'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';

// Basic validation
if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($streetaddress) || empty($city) || empty($state) || empty($postcode) || empty($plant) || empty($comment)) {
    header("Location: error.php", true, 301);
    exit();
}

$sql = "INSERT INTO enquiry(First_name,Last_name,Email_address,Phone_number,Street_address,City,States,Postal_code,Choose_a_plant,Comment) VALUES ('$fname','$lname','$email','$phone','$streetaddress','$city','$state','$postcode','$plant','$comment')";
$result = mysqli_query($connect, $sql);

echo "<form id='confirm'>";
echo "<p>Dear esteemed user, thanks for your valuable feedback. Your submission details are as following:</p>";
echo "<fieldset>";
echo "<legend>Personal Detail</legend>";
echo "<p>First name:",$fname,"</p>";
echo "<p>Last name:",$lname,"</p>";
echo "<p>Email address:",$email,"</p>";
echo "<p>Phone number:",$phone,"</p>";
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>Address</legend>";
echo "<p>Street Address:",$streetaddress,"</p>";
echo "<p>City/Town:",$city,"</p>";
echo "<p>State:",$state,"</p>";
echo "<p>Postal Code:",$postcode,"</p>";
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>Comment</legend>";
echo "<p>Plant commented:",$plant,"</p>";
echo "<p>Comment:",$comment,"</p>";
echo "</fieldset>";
echo "</form>";

// if($result == true)
// 	echo "New record is added into database successfully";
// else
// 	echo "Submission of new record failed";
// mysqli_close($connect);

// if (!empty($fname)) {
// 	$firstname = $_POST['fname'];
// } else {
// 	header("Location: error.php", true, 301);
// }

// if (isset($lname) && !empty($lname)) {
// 	$lastname = $_POST['lname'];
// } else {
// 	header("Location: error.php", true, 301);
// }
?>