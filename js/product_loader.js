
// Fields
var product_price = 0
var quantity_total = 0
var available_stock = 0

// Retrieves search queries for processing
function display_product(productID) {
    var xhttp = new XMLHttpRequest()

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var messageObj = JSON.parse(xhttp.responseText)
            document.getElementById("product_title").innerHTML = messageObj.name
            document.getElementById("unit_price").innerHTML = "$" + messageObj.price
            document.getElementById("unit_quantity").innerHTML = "Quantity: " + messageObj.quantity
            document.getElementById("product_stock").innerHTML = "In Stock: " + messageObj.stock

            set_display_data(messageObj)
        }
    };

    xhttp.open("GET", "php/product_search.php?id= " + productID, true);
    xhttp.send();
}

// Sets the data to global variabels for usage on top-right hand frame
function set_display_data(messageObj) {
    product_price = messageObj.price
    quantity_total = messageObj.price
    available_stock = messageObj.stock
    update_display_total()
    reset_quantity_action()
}
