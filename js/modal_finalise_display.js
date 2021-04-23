
function revealModalDisplay() {
    var darkOverlay = document.getElementById("dark-background-overlay");
    darkOverlay.style.display = "block";
    var modalWindow = document.getElementById("modal-window");
    modalWindow.style.display = "block";
}

function displayFinalCheckoutList(cart) {
    var checkoutList = document.getElementById("checkout-list");
    var totalLabel = document.getElementById("checkout-total");

    var listElement;
    for (i = 0; i < virtualCart.cartArray.length; i++) {
        listElement = createHTMLCartCell(virtualCart.cartArray[i]);
        checkoutList.appendChild(listElement);
    }

    totalLabel.innerHTML = "$" + virtualCart.purchaseTotal;
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
