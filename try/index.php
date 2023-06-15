<?php
include_once('../php/connection.php');
$sql = "SELECT *FROM products";
  $all_product = $conn->query($sql);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="">
<?php 
    while($row = mysqli_fetch_assoc($all_product)){
      ?> 
    
    <div class="container">
        <header>
            <h1>Your Shopping Cart</h1>
            <div class="shopping">
            <img src="../php/upload_image/<?php echo $row['product_img']; ?>" alt="">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    <?php
    }
    
      ?> 

    <script src="app1.js"></script>
</body>
</html>