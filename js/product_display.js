
// Fields
var itemQuantity = 1;

// Configures event listener
var inputField = document.getElementById("input-quantity-field")
inputField.addEventListener("keydown", function(event) {
    if (event.code === 'Enter') {
        set_input_field();
    }
});

function update_display_total() {
    quantity_total = product_price * itemQuantity
    quantity_total = quantity_total.toFixed(2)
    document.getElementById("total-price").innerHTML = "$" + quantity_total
}

function update_input_field() {
    inputField.value = itemQuantity
}

function set_input_field() {
    if(inputField.value === undefined) return;
    if(!validate_input(inputField.value)) return;

    itemQuantity = inputField.value;
    update_input_field()
    update_display_total()
}

// Validates whether the input has reached the maximum available stock
function validate_input(value) {
    let numVal = parseInt(value);

    if (numVal < 1) {
        //console.log("value is too low");
        reset_quantity_action()
        inputField.value = 1;
        return false;
    }

    if (numVal > parseInt(available_stock)) {
        //console.log("it is too high");
        inputField.style.background = "red";
        return false;
    }

    inputField.style.background = "white"
    return true;
}

function add_quantity() {
    if(!validate_input(inputField.value)) return;

    itemQuantity++
    update_input_field()
    update_display_total()
}

function minus_quantity() {
    if (itemQuantity == 1) return;
    if(!validate_input(inputField.value)) return;

    itemQuantity--
    update_input_field()
    update_display_total()
}

function reset_quantity_action() {
    itemQuantity = 1;
    update_display_total()
    update_input_field()
}

function add_to_cart() {
    addToCart();
}
