let form_cart = document.getElementById("cart_form")
form_cart.addEventListener("submit", (e) => {
    e.preventDefault()
    let product_id = document.getElementById("product_id").value
    let quantity = document.getElementById("product-quanity").value
    fetch('add_to_cart.php?product_id=' + encodeURIComponent(product_id) + '&quantity=' + encodeURIComponent(quantity), {
            method: "GET"
        })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data.success) {
                updateCart(data.quantity)
                alert(data.message)
                location.reload()
            } else {
                alert("Could not add to cart")
            }
        }).catch(err => alert("Request was unsuccessful"))
})
document.addEventListener('DOMContentLoaded', () => {
    // Get the quantity from the json object returned
    fetch('cart-api.php', {
            method: "GET"
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                updateCart(data.quantity)
            }
        }).catch(err => console.error(err))

})
const updateCart = (quantity) => {
    const cartIcon = document.getElementById('cart-icon');
    cartIcon.textContent = quantity;
}