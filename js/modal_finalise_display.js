
function displayFinalCheckoutList() {
    var checkoutList = document.getElementById("checkout-list");
    var totalLabel = document.getElementById("checkout-total");

    var listElement;
    for (i = 0; i < cartArray.length; i++) {
        listElement = createHTMLCartCell(cartArray[i]);
        checkoutList.appendChild(listElement);
    }

    totalLabel.innerHTML = "$" + cartTotal;
}

function finalisePurchase() {
    displayForm();
}

function displayForm() {
    hideCheckoutList();
    var modalWindow = document.getElementById("modal-window");
    modalWindow.style.background = "beige";
    modalWindow.style.width = "40%";
    modalWindow.style.height = "63%";
    modalWindow.style.transition = "1s";

    var formContent = document.getElementById("checkoutForm");
    formContent.style.display = "block";
}

function hideCheckoutList() {
    var checkoutList = document.getElementById("checkoutContent");
    checkoutList.style.display = "none";
}
