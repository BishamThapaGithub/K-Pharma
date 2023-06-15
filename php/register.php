<?php
// Check if the form is submitted
include_once('connection.php');
if (isset($_POST['submit'])) {
    // Collect information from the registration form
    $fullname = mysqli_real_escape_string($conn, $_POST['Username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['Re-Enterpassword']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $user_role = 'user';

    // Validate that all fields are filled
    if (empty($fullname) || empty($email) || empty($password) || empty($cpassword) || empty($age)) {
        echo "Please fill in all fields";
    } else {
        // Check if the passwords match
        if ($password !== $cpassword) {
            echo "Passwords do not match";
        } else {
            // Insert data into the database
            $sql = "INSERT INTO users (Username, Email, Password, Age, UserRole) VALUES ('$fullname', '$email', '$password', '$age', '$user_role')";
            $query = $conn->query($sql);

            if (!$query) {
                echo "Data insertion failed: " . mysqli_error($conn);
            } else {
                echo "<script> alert('Registration added  sucessfull '); </script>";
                // Redirect to the login page
               header('Location:../signin.html');
               exit();
            }
        }
    }
}
?>