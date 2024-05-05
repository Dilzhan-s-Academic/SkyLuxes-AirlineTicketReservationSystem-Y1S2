

function openPopup(elementID,ID) {
    var popUpWindow = document.getElementById(elementID);
    popUpWindow.style.visibility = "visible";
    document.getElementById(InqId-pop).value = ID;
    console.log(ID);
}
function closePopup(elementID) {
    var popUpWindow = document.getElementById(elementID);
    popUpWindow.style.visibility = "hidden";
}