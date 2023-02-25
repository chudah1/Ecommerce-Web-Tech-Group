
let cart_btns = document.getElementsByClassName("cart")
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
                location.reload()
            }else{
                alert("Could not add to cart")
            }
        }).catch(err=>alert("Request was unsuccessful"))
    })
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
          removeItem()

        deleteCartItem()

  });


const updateCartIcon= (quantity)=>{
    const cartIcon = document.getElementById('cart-icon');
    cartIcon.textContent = quantity;
  }
  

  const removeItem = ()=>{
    let remove_icons = document.getElementsByClassName("remove-item")
    for(let icon of remove_icons){
        icon.addEventListener("click", ()=>{
            let product_id = icon.dataset.product_id
            let action = icon.dataset.action
            fetch('add_to_cart.php?product_id=' + encodeURIComponent(product_id)  + '&action=' + encodeURIComponent(action),
            {
                method:"GET"
            })
            .then(res=>res.json())
            .then(data=>{
                console.log(data)
                
                if(data.success){
                    updateCartIcon(data.quantity)
                    alert(data.message)
                    location.reload()
                }else{
                    alert("Could not delete from cart")
                }
            }).catch(err=>console.error(err))
        })
    }
  }


// const deleteCartItem = ()=>{
// var table = document.getElementById("myTable");

// // Loop through each row of the table
// for (var i = 0; i < table.rows.length; i++) {
//   var row = table.rows[i];
//   var input = row.querySelector('input[type="text"]'); // Assumes the input field is a text input

//   // Check if the input value is zero
//   if (input && input.value === "0") {
//     // If the value is zero, remove the row from the table
//     table.remove(row);
//   }
// }

// }
