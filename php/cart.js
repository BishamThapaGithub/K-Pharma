// Get all elements with class "cart"
const addToCartButtons = document.getElementsByClassName('cart');

// Add event listeners to the "add to cart" buttons
for (let i = 0; i < addToCartButtons.length; i++) {
  addToCartButtons[i].addEventListener('click', addToCart);
}

// Add to cart function
function addToCart(event) {
  const button = event.target; // Get the clicked button
  const product = button.parentElement; // Get the parent element (product container)
  const productName = product.querySelector('h3').textContent; // Get the product name

  // Create a new cart item element
  const cartItem = document.createElement('div');
  cartItem.textContent = productName;

  // Append the cart item to the cart items container
  document.getElementById('cart-items').appendChild(cartItem);
}

// Event delegation for delete functionality
document.addEventListener('click', function(event) {
  if (event.target.classList.contains('delete')) {
    const cartItem = event.target.parentElement; // Get the parent element (cart item)
    cartItem.remove(); // Remove the cart item from the DOM
  }
});
