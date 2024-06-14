<?php
session_start(); // Start the session

include("../config.php"); // Include database connection

// Check if login form is submitted
if (isset($_POST["login_customer"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check username and password in customer table
    $sql = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $sql);

    // Check if query returns any rows
    if (mysqli_num_rows($result) > 0) {
        // Login successful
        $customer = mysqli_fetch_assoc($result);

        // Set session variables
        $_SESSION["id_customer"] = $customer["id_customer"];
        $_SESSION["nama"] = $customer["nama"];

        // Initialize an empty cart array (if needed)
        $_SESSION["cart"] = array();

        // Redirect to homepage or any other authorized page
        header("location: ../index.php");
        exit(); // Ensure that script stops here
    } else {
        // Login failed
        echo "<script>alert('Username atau password salah'); window.location.href='login_customer.php';</script>";
        exit(); // Ensure that script stops here
    }
}

// Check if logout request is received
if (isset($_GET["logout"])) {
    // Destroy all session data
    session_destroy();

    // Redirect to login page after logout
    header("location: login_customer.php");
    exit(); // Ensure that script stops here
}
?>
