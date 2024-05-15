<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Enquiry</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="icon" type="image/x-icon" href="images/Logo_favicon.png">
</head>

<body>
    <h1>VIEW ENQUIRY PAGE</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "gaia_database";

        $conn = mysqli_connect($servername, $username, $password, $db);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM enquiry";
        $result = mysqli_query($conn, $sql);

        echo "<table class='view_enquiry_table'>\n";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Street Address</th><th>City</th><th>State</th><th>Postcode</th><th>Plant</th><th>Comment</th></tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row["enquiry_id"]}</td>";
            echo "<td>{$row["First_name"]}</td>";
            echo "<td>{$row["Last_name"]}</td>";
            echo "<td>{$row["Email_address"]}</td>";
            echo "<td>{$row["Phone_number"]}</td>";
            echo "<td>{$row["Street_address"]}</td>";
            echo "<td>{$row["City"]}</td>";
            echo "<td>{$row["States"]}</td>";
            echo "<td>{$row["Postal_code"]}</td>";
            echo "<td>{$row["Choose_a_Plant"]}</td>";
            echo "<td>{$row["Comment"]}</td></tr>";
        }
        echo "</table>";

        mysqli_close($conn);
    ?>

    <footer>

    </footer>
</body>

</html>
