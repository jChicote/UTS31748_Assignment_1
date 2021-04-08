

function onMouseOver(rowcell) {
    rowcell.style.background = "red"

    hideSubItems(rowcell.parentNode.id);
    revealSubItems(rowcell.dataset.value);
}

function onMouseOut(rowcell) {
    rowcell.style.background = "white"
}

function hideSubItems(ignore) {
    var i, x;
    x = document.getElementsByClassName("sub-display-items");
    for (i = 0; i < x.length; i++) {
        if (x[i].id != ignore) {
            x[i].style.display = "none"
        }
    }
}

function revealSubItems(valueID) {
    let subItems = document.getElementById(valueID);
    if (subItems == null) return;
    subItems.style.display = "grid"
}
