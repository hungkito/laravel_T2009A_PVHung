if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeItem = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeItem.length; i++) {
        var button = removeItem[i]
        button.addEventListener('click', function (event) {
            var buttonClicked = event.target
            buttonClicked.parentElement.parentElement.remove()
            updateCartTotal()
        })
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
}


function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1
    }
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}
function Cart(){
    var CartItem =document.getElementById('cart');

    CartItem.innerHTML+=``
}

//add to cart
(function(){
    var cartBtn = document.querySelectorAll('.store-item-icon')
    cartBtn.forEach(function (btn) {
        btn.addEventListener("click", function (event) {
            // console.log(event.target)
          if (event.target.parentElement.classList.contains("store-item-icon")){
              var fullPath = event.target.parentElement.previousElementSibling;
              // let pos = fullPath.indexOf(img) + 3;
              // let partPath = fullPath.slice(pos)
              console.log(fullPath)
          }
        })
    })
})()
