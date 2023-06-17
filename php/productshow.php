<?php 

include_once('connection.php');

  $sql = "SELECT *FROM products";
  $all_product = $conn->query($sql);
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./productshow.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100&family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
  <header>
    <a href="#" class="logo"><img src="./image/logo.jpg" alt=""></a>
    
<ul class="navbar">
    <li><a href="../homepage.html">Home</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="../prescription.html">Prescription</a></li>
    <li><a href="./productshow.php">Product</a></li>

</ul>
<div class="navicon">
    <a href="#"><i class='bx bx-search'></i></a>
    <a href="#"><i class='bx bx-user' ></i></a>
    <a href="#"><i class='bx bx-cart' ></i></a>
    <a href="#"><i class='bx bx-log-in'></i></a>
</div>
</header>
    
  


  <main>
    
    <?php 
    while($row = mysqli_fetch_assoc($all_product)){
      ?> 
    
    <div class="card">
     <div class="image">
      <img src="./upload_image/<?php echo $row['product_img']; ?>" alt="">
     </div> 
     <div class="caption">
      <p class="product_name"><?php echo $row['product_name']?></p>
      <p class="price"><b><?php echo"RS " .$row['product_price'] ?></b></p>
     </div>
     <button class="add">ADD TO CART</button>

    </div>
    <?php
    }
    ?>
   </main>

  

  </body>
  </html>