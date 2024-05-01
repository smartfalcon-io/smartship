<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Extract username and password from the form submission
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate the username and password (example: check against hardcoded values)
        $valid_username = "shipper123";
        $valid_password = "dcsa@123";

        if ($username === $valid_username && $password === $valid_password) {
            // Successful login
            // You can redirect the user to a dashboard page or perform any other action here
            echo "Login successful. Redirecting...";
            // Example: Redirect to a dashboard page
             header("Location: shipper_home.html");
            exit();
        } else {
            // Invalid username or password
            echo "Invalid username or password.";
        }
    } else {
        // Username or password is missing
        echo "Please provide both username and password.";
    }
} else {
    // Redirect to the login page if the form is not submitted
    header("Location: shipper_login.html");
    exit();
}
?>