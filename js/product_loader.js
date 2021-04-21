
// Fields
var selectedProduct;

// Retrieves search queries for processing
function display_product(productID) {
    if (isCheckedOut) return;
    var xhttp = new XMLHttpRequest()

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var productJSON = JSON.parse(xhttp.responseText)

            setProductLiteral(productJSON);
            setProductPanelDetails();
            update_display_total()
            reset_quantity_action()
        }
    };

    xhttp.open("GET", "php/product_search.php?id=" + productID, true);
    xhttp.send();
}

function setProductLiteral(jsonObj) {
    selectedProduct = {
        id: parseInt(jsonObj.id),
        name: jsonObj.name,
        quantity: jsonObj.quantity,
        price: parseFloat(jsonObj.price),
        stock: parseInt(jsonObj.stock),

        calculateSpecifiedQuantity: function (amount) {
            let total = parseFloat(amount * this.price);
            return total.toFixed(2);
        }
    };
}

function setProductPanelDetails() {
    document.getElementById("product_title").innerHTML = selectedProduct.name
    document.getElementById("unit_price").innerHTML = "$" + selectedProduct.price
    document.getElementById("unit_quantity").innerHTML = "Quantity: " + selectedProduct.quantity
    document.getElementById("product_stock").innerHTML = "In Stock: " + selectedProduct.stock
}
