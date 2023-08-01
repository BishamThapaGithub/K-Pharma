

    /* let cartIcon = document.querySelector("#cart-icon");   
    let cart = document.querySelector(".cart");     
    let closeCart = document.querySelector("#close-cart");  
    
    cartIcon.onclick = () => {
       cart.classList.add("active");
    };
    
    closeCart.onclick = () => {
        cart.classList.remove("active");
     };  */

     //cart working js 
     if(document.readytate == 'loading'){
        document.addEventListener('DOMContentLoaded', ready);

     }else{
        ready();
     }

//making funtion
function ready(){
var removecartBUtton = document.getElementsByClassName('cart-remove')
console.log(removecartBUtton);
for(var i=0; i < removecartBUtton.length; i++){
    var button =removecartBUtton[i];
    button.addEventListener("click", removeCartItem);
}
}
//quantity changes 
var quantityInputs = document.getElementsByClassName('cart-quantity');
for(var i=0; i<quantityInputs.length;i++){
var input= quantityInputs[i];
input.addEventListener("click", quantitychange);

}
// add to cart
var addcart=document.getElementsByClassName('add-cart')
for(var i=0; i<addcart.length;i++){
    var button = addcart[i];
    button.addEventListener("click", addcartClicked);
}
//quantity function
function quantitychange(event){
    var input =event.target;
    if(isNaN(input.value)|| input.value <= 0){
        input.value = 1;
    }
    updatetotal();

}
//remove function
function removeCartItem(event){

    var buttonClicked= event.target;
    buttonClicked.parentElement.remove();
}
//add to cart
function addcartClicked(event){
    var button =event.target;
    var shopProducts = button.parentElement;
    var title =shopProducts.getElementsByClassName("product_title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
console.log(title,price,productImg);
    updatetotal();
}
function addProductToCart(title,price,productImg){
    var cartshopBox = document.createElement("div");
   cartshopBox.classlist.add("cart-box");
    var cartItems= document.getElementsByClassName('cart-container')[0];
    var cartItemNames = cartItems.getElementsByClassName('cart-product-title');
    for(var i=0; i<cartItemNames.length; i++){
        if(cartItemNames[i].innerHTML == title){
        alert("you have already add this item to cart");
        return;
         }
}
var cartBoxContent=`
<img src="logo.jpg " alt="" class="cart-img">
<div class="detail-box">
  <div class="cart-product-title">logo</div>
  <div class="cart-price">$43</div>
  <input type="number" value="1" class="cart-quantity">
</div>
<i class='bx bxs-trash-alt cart-remove'></i>
`; 

cartshopBox.innerHTML = cartBoxContent;
cartItems.append(cartshopBox);
cartshopBox.getElementsByClassName('cart-remove')[0].addEventListener("click", removeCartItem);
cartshopBox.getElementsByClassName('cart-quantity')[0].addEventListener("change", quantitychange);
}

//total function
function updatetotal(){
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total =0;
     for (var i =0; i< cartBoxes.length; i++){
        var cartBox=cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price =parseFloat(priceElement.innerText.replace("$",""));
        var quantity = quantityElement.value;
        total = total + price * quantity;
        //if price contain some decimals
        total= math.round(total *100) /100;

    document.getElementsByClassName('total-price')[0].innerText ='$' + total;
    }
}
