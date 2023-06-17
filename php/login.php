<?php
include_once('connection.php');
session_start();

 if(isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password  = mysqli_real_escape_string($conn, $_POST['password']);



  $select = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {
    echo "sulav";
    $row = mysqli_fetch_array($result);
    if ($row['UserRole'] == "Admin") {
      $_SESSION['username'] = $row['Username'];
 
      header('Location: admindb.html');
      exit();
    } else if($row['UserRole'] == "user") {
      $_SESSION['username'] = $row['Username'];
 
      header('Location:userdb.php');
      exit();
      
     
    }
  } else {
    echo "Invalid email or password";
  }
}

?>
