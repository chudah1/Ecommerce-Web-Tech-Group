
let cart_btns = document.getElementsByClassName("cart")
let cart_no = document.getElementById("cart-no")
for(let cart_btn of cart_btns){
    cart_btn.addEventListener("click", ()=>{
        let product_id = cart_btn.dataset.product_id
        let quantity = 1
        console.log(product_id)

        fetch('add_to_cart.php?product_id=' + encodeURIComponent(product_id)  + '&quantity=' + encodeURIComponent(quantity),
        {
            method:"GET"
        })
        .then(res=>res.json())
        .then(data=>{
            if(data.success){
                updateCartIcon(data.quantity)
                alert(data.message)
            }else{
                alert("Could not add to cart")
            }
        }).catch(err=>alert("Request was unsuccessful"))
    })
}
    



const updateCartIcon= (quantity)=>{
    const cartIcon = document.getElementById('cart-icon');
    cartIcon.textContent = quantity;
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    // Get the quantity from the json object returned
    fetch('cart-api.php',
        {
            method:"GET"
        })
        .then(res=>res.json())
        .then(data=>{
            if(data.success){
                updateCartIcon(data.quantity)
            }
        }).catch(err=>console.error(err))
  });
  
