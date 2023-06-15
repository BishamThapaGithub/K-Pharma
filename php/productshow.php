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
  </head>
  <body>
    
  


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