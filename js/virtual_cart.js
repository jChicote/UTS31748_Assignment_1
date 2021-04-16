
// Cart Item object
var cartItem = {name: "No Name", product_id: 0000, quantity: 0};
var cartArray = [];
var cartCount = 0;

function addToCart() {
    var newItem = createCartItem();
    var list = document.getElementById("cart-list");
    var listchild = document.createElement("LI");
    var nameLabel = document.createElement("P");
    var quantityLabel = document.createElement("P");
    var costLabel = document.createElement("P");
    listchild.classList.add("cart-list-item");

    nameLabel.innerHTML = newItem.name;
    quantityLabel.innerHTML = newItem.quantity;
    costLabel.innerHTML = newItem.cost;

    listchild.appendChild(nameLabel);
    listchild.appendChild(quantityLabel);
    listchild.appendChild(costLabel);

    list.appendChild(listchild);
    cartArray.push(newItem);
    cartCount++;
}

function clearCart() {
    cartArray = [];
}

function checkoutCart() {

}

function calculateCartTotal() {

}

function createCartItem() {
    return {name: productObj.name, product_id: productObj.id, quantity: itemQuantity, cost: quantity_total}
}


// ACTIONS BELOW ARE FOR COMPLETION TASKS AFTER Checkout
//
// Note: Can only run when products are present in list

function is_cart_valid() {

}

function display_fail_message() {

}
