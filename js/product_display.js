
// Fields
var purchaseItem = { purchaseQuantity: 1, totalSelectionCost : 0 };

// Configures event listener
var inputField = document.getElementById("input-quantity-field")
inputField.addEventListener("keydown", function(event) {
    if (event.code === 'Enter') {
        set_input_field();
    }
});

function update_display_total() {
    purchaseItem.totalSelectionCost = selectedProduct.calculateSpecifiedQuantity(purchaseItem.purchaseQuantity);
    document.getElementById("total-price").innerHTML = "$" + purchaseItem.totalSelectionCost;
}

function update_input_field() {
    inputField.value = purchaseItem.purchaseQuantity;
}

function set_input_field() {
    if(inputField.value === undefined) return;
    if(!validate_input(inputField.value)) return;

    purchaseItem.purchaseQuantity = inputField.value;
    update_input_field()
    update_display_total()
}

// Validates whether the input has reached the maximum available stock
function validate_input(inputAmount) {
    let numVal = parseInt(inputAmount);

    if (numVal < 1) {
        reset_quantity_action()
        inputField.value = 1;
        return false;
    }

    if (numVal > selectedProduct.stock) {
        inputField.style.background = "red";
        return false;
    }

    inputField.style.background = "white"
    return true;
}

function add_quantity() {
    if(!validate_input(inputField.value)) return;

    purchaseItem.purchaseQuantity++
    update_input_field()
    update_display_total()
}

function minus_quantity() {
    if (purchaseItem.purchaseQuantity == 1) return;
    if(!validate_input(inputField.value)) return;

    purchaseItem.purchaseQuantity--
    update_input_field()
    update_display_total()
}

function reset_quantity_action() {
    purchaseItem.purchaseQuantity = 1;
    update_display_total()
    update_input_field()
}

function add_to_cart() {
    addToCart();
}
