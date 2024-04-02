<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Separate the form data
$customerInfo = array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'mobile_number' => $_POST['mobile_number']
);


// Insert into personal_info table
$sql_customer = "INSERT INTO customers (Name, E_mail, Phone_number)
        VALUES ('" . $customerInfo['name'] . "', '" . $customerInfo['email'] . "', '" . $customerInfo['mobile_number'] . "')";

if ($conn->query($sql_customer) === TRUE) {
    echo "Thank You for Registering !";
} else {
    echo "Error: " . $sql_customer . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

