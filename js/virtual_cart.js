
// Fields
var isCheckedOut = false;
var virtualCart = {
    cartArray: [],
    purchaseTotal: 0.0
}

function addToCart() {
    if (checkIsEmpty()) return;

    //Adds in existing items
    if (checkIfInCart(selectedProduct.id)) {
        addToExistingItem(
            selectedProduct.id,
            purchaseItem.purchaseQuantity,
            purchaseItem.totalSelectionCost );
        updateCartTotal();
        return;
    }

    displayInCart();
}

function checkIsEmpty() {
    if (selectedProduct == "" || selectedProduct == undefined) {
        alert("Product has not been selected");
        return true;
    }

    return false;
}

function displayInCart() {
    var list = document.getElementById("cart-list");
    var newItem = createCartItem();

    var listChild = createHTMLCartCell(newItem);
    list.appendChild(listChild);
    virtualCart.cartArray.push(newItem);
    updateCartTotal();
}

// Adds the quantity to the existing cart item
// if it exists within the array.
function addToExistingItem(id, quantity, cost) {
    var HTMLcell = document.getElementById(id);

    for (i = 0; i < virtualCart.cartArray.length; i++) {
        if (virtualCart.cartArray[i].id === id) {
            virtualCart.cartArray[i].quantity = parseInt(virtualCart.cartArray[i].quantity) + parseInt(quantity);
            virtualCart.cartArray[i].cost += parseFloat(cost);

            HTMLcell.childNodes[2].innerHTML = virtualCart.cartArray[i].quantity;
            HTMLcell.childNodes[3].innerHTML = "$" + virtualCart.cartArray[i].cost.toFixed(2);
        }
    }
}

function checkIfInCart(id) {
    for (i = 0; i < virtualCart.cartArray.length; i++) {
        if (virtualCart.cartArray[i].id === id) return true;
    }

    return false;
}

function clearCart() {
    var list = document.getElementById("cart-list");
    list.innerHTML = "";
    virtualCart.cartArray = [];
    virtualCart.purchaseTotal = 0;
}

function checkoutCart() {
    if (virtualCart.cartArray.length == 0) {
        alert("There is no products in cart.");
        return;
    }

    isCheckedOut = true;
    revealModalDisplay();
    displayFinalCheckoutList();
}

function calculateCartTotal() {
    var total = 0.0;
    for (i = 0; i < virtualCart.cartArray.length; i++) {
        total += virtualCart.cartArray[i].cost;
    }
    return total;
}

function createCartItem() {
    // Item data derives from global variables from the product display.
    // Additionally inputs and data must be santized to represent their types
    //
    return {
        name: selectedProduct.name,
        id: selectedProduct.id,
        quantity: purchaseItem.purchaseQuantity,
        cost: parseFloat(purchaseItem.totalSelectionCost)
    };
}

function updateCartTotal() {
    virtualCart.purchaseTotal = calculateCartTotal();
    document.getElementById("order-total").innerHTML = "$" + parseFloat(virtualCart.purchaseTotal).toFixed(2);
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
    unitLabel.innerHTML = "(" + selectedProduct.quantity + ")"
    quantityLabel.innerHTML = cartItem.quantity;
    costLabel.innerHTML = "$" + cartItem.cost.toFixed(2);

    listChild.appendChild(nameLabel);
    listChild.appendChild(unitLabel);
    listChild.appendChild(quantityLabel);
    listChild.appendChild(costLabel);
    return listChild;
}
