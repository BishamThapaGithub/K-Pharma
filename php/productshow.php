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
     <link rel="stylesheet" href="productshow.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100&family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
  <header>
    <a href="#" class="logo"><img src="../image/logo.jpg" alt=""></a>
    
<ul class="navbar">
    <li><a href="../homepage.html">Home</a></li>
    <li><a href="#">catagories</a></li>
    <li><a href="../prescription.html">Prescription</a></li>
    <li><a href="./productshow.php" class="underline">Product</a></li>

</ul>
<div class="navicon">

    <a href="#"><i class='bx bx-search'></i></a>
    <a href="#"><i class='bx bx-user' ></i></a>
    <a href="#" id="carticon"><i class='bx bx-cart'  ><span id="cart-icon" >0</span></i></a>
    
    <a href="#"><i class='bx bx-log-in'></i></a>

<div class="cart" id="carts">
  <h2 class="cart-title">Your cart</h2>
  <!-- container -->
  <div class="cart-content">
  <img src="logo.jpg" alt="" class="cart-img">
<div class="detail-box">
  <div class="cart-product-title">logo</div>
  <div class="cart-price">$43</div>
  <input type="number" value="1" class="cart-quantity">
</div>
<i class='bx bxs-trash-alt cart-remove'></i>
; 
  
  </div>

  

<div class="total">
  <div class="total-title">Total:</div>
  <div class="total-price">$0</div>
</div>
<button type="button" class="btn-buy">Buy now</button>
<i class='bx bx-x' id="close-cart"> </i>
</div>




</div>
</header>

  
  <main>
    
    <?php 
    while($row = mysqli_fetch_assoc($all_product)){
      ?> 
    
    <div class="card">
     <div class="image">
      <img  class="product-img" src="./upload_image/<?php echo $row['product_img']; ?>" alt="">
     </div> 
     <div class="caption">
      <h1 class="product_title"><?php echo $row['product_name']?></h1>
      <!-- <p class="product_description"><?php echo $row['product_description'];?></p> -->

      <h3 class="price"><b><?php echo"RS " .$row['product_price'] ?></b></h3>
     </div>
     <div class="des">
     <button class="add-cart">ADD TO CART</button>
     </div>
    </div>
    <?php
    }
    ?>
   </main>

  

  </body>
  
  </html>
  <script>
    let cart = document.getElementsByClassName("cart")[0] 
        let cartItem = 0
        const addToCart = () =>{
            cartItem +=1
            cart.innerHTML = cartItem}
  </script>
<script>
  var closecart = document.getElementById("close-cart");
closecart.addEventListener('click',function(){
  var cart = document.getElementById("carts");

  cart.style.display='none';

  //  alert(1);
})


var opencart = document.getElementById("carticon");
opencart.addEventListener('click',function(){
  var cart = document.getElementById("carts");

  cart.style.display='block';

  //  alert(1);
})




</script>
<script src="../javascript/showproduct.js"></script>