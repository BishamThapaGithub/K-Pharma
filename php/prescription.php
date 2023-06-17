<?php
include_once('connection.php');
if (isset($_POST['submit'])) {

    $prescription_name = $_POST['pname'];
  $prescription_date=$_POST['p-date'];
  $prescription_description=$_POST['Description'];
   $prescription_image = $_FILES['uploadedimg']['name'];
   $prescription_image_tmp_name = $_FILES['uploadedimg']['tmp_name'];
   $product_image_folder = 'prescription_img/' .$prescription_image;
  
   if (empty($prescription_name) || empty($prescription_date) || empty($prescription_description)|| empty($prescription_image)) {
      $message[] = 'please fill out all';
   } else {
     $insert = "INSERT INTO precription(Username, p_date, description, p_img) VALUES('$prescription_name', ' $prescription_date', '$prescription_description', '$prescription_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file( $prescription_image_tmp_name, $product_image_folder);     
             $message[] = 'new product added successfully';     
                 header('location:prescription.php');   
                   } else {
         $message[] = 'could not add the product';
     }
   }

}
;
?>