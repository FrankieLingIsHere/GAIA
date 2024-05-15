<?php
include 'create_table_user.php';

session_start();

$name = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['Username'] = $name;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

// Basic validation
if (empty($name) || empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($password) && strlen($password)<8 && strlen($password)>12) {
    header("Location: error.php", true, 301);
    exit();
}

$sql = "INSERT INTO user(Username, Email_address, Pass_word) VALUES ('$name','$email','$password')";
$result = mysqli_query($connect, $sql);

if ($result) {
    header("Location: index.php", true, 301);
}

// echo "<form id='confirm'>";
// echo "<p>Dear esteemed user, thanks for your valuable feedback. Your submission details are as following:</p>";
// echo "<fieldset>";
// echo "<legend>Personal Detail</legend>";
// echo "<p>First name:",$fname,"</p>";
// echo "<p>Last name:",$lname,"</p>";
// echo "<p>Email address:",$email,"</p>";
// echo "<p>Phone number:",$phone,"</p>";
// echo "</fieldset>";
// echo "<fieldset>";
// echo "<legend>Address</legend>";
// echo "<p>Street Address:",$streetaddress,"</p>";
// echo "<p>City/Town:",$city,"</p>";
// echo "<p>State:",$state,"</p>";
// echo "<p>Postal Code:",$postcode,"</p>";
// echo "</fieldset>";
// echo "<fieldset>";
// echo "<legend>Comment</legend>";
// echo "<p>Plant commented:",$plant,"</p>";
// echo "<p>Comment:",$comment,"</p>";
// echo "</fieldset>";
// echo "</form>";

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