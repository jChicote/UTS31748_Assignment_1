
// Retrieves search queries for processing
function display_product(productID) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var messageObj = JSON.parse(xhttp.responseText)
            document.getElementById("product_title").innerHTML = messageObj.name
            document.getElementById("unit_price").innerHTML = "$" + messageObj.price
            document.getElementById("unit_quantity").innerHTML = "Quantity: " + messageObj.quantity
            document.getElementById("product_stock").innerHTML = "In Stock: " + messageObj.stock
            //console.log(messageObj.name)
            //console.log(messageObj.quantity)
        }
    };

    xhttp.open("GET", "php/product_search.php?id= " + productID, true);
    xhttp.send();
}
