
// Cart Item object
var cartItem = {name: "No Name", product_id: 0000, quantity: 0};
var cartArray = [];
var cartCount = 0;
var cartTotal = 0;

// Fields
var isCheckedOut = false;

function addToCart() {
    //Adds in existing items
    if (checkIfInCart(productObj.id)) {
        addToExistingItem(productObj.id, itemQuantity, quantity_total);
        updateCartTotal();
        return;
    }

    var list = document.getElementById("cart-list");
    var newItem = createCartItem();

    var listChild = createHTMLCartCell(newItem);
    list.appendChild(listChild);
    cartArray.push(newItem);
    updateCartTotal();
    cartCount++;
}

// Adds the quantity to the existing cart item
// if it exists within the array.
function addToExistingItem(id, quantity, cost) {
    var HTMLcell = document.getElementById(id);

    for (i = 0; i < cartArray.length; i++) {
        if (cartArray[i].id === id) {
            cartArray[i].quantity = parseInt(cartArray[i].quantity) + parseInt(itemQuantity);
            cartArray[i].cost = parseInt(cartArray[i].cost) + parseInt(quantity_total);

            HTMLcell.childNodes[2].innerHTML = cartArray[i].quantity;
            HTMLcell.childNodes[3].innerHTML = "$" + cartArray[i].cost;
        }
    }
}

function checkIfInCart(id) {
    for (i = 0; i < cartArray.length; i++) {
        if (cartArray[i].id === id) return true;
    }

    return false;
}

function clearCart() {
    var list = document.getElementById("cart-list");
    list.innerHTML = "";
    cartArray = [];
}

function checkoutCart() {
    if (cartArray.length == 0) {
        alert("There is no products in cart.");
        return;
    }

    isCheckedOut = true;

}

function calculateCartTotal() {
    var total = 0;
    for (i = 0; i < cartArray.length; i++) {
        total += parseInt(cartArray[i].cost);
    }

    return total;
}

function createCartItem() {
    // Item data derives from global variables from the product display.
    // Additionally inputs and data must be santized to represent their types
    //
    // name: string
    // id: integer
    // quantity: interger
    // cost: double / float
    return {name: productObj.name, id: productObj.id, quantity: itemQuantity, cost: quantity_total}
}

function updateCartTotal() {
    cartTotal = calculateCartTotal();
    document.getElementById("order-total").innerHTML = "$" + cartTotal;
}

function revealModalDisplay() {

}


function createHTMLCartCell(cartItem) {
    var listChild = document.createElement("LI");
    var nameLabel = document.createElement("P");
    var unitLabel = document.createElement("P");
    var quantityLabel = document.createElement("P");
    var costLabel = document.createElement("P");
    listChild.classList.add("cart-list-item");
    listChild.setAttribute('id', cartItem.id);
    nameLabel.setAttribute('id', "name");
    unitLabel.setAttribute('id', "unit");
    quantityLabel.setAttribute('id', "quantity");
    costLabel.setAttribute('id', "cost");

    nameLabel.innerHTML = cartItem.name;
    unitLabel.innerHTML = "(" + productObj.quantity + ")"
    quantityLabel.innerHTML = cartItem.quantity;
    costLabel.innerHTML = "$" + cartItem.cost;

    listChild.appendChild(nameLabel);
    listChild.appendChild(unitLabel);
    listChild.appendChild(quantityLabel);
    listChild.appendChild(costLabel);
    return listChild;
}


// ACTIONS BELOW ARE FOR COMPLETION TASKS AFTER Checkout
//
// Note: Can only run when products are present in list

function is_cart_valid() {

}

function display_fail_message() {

}
