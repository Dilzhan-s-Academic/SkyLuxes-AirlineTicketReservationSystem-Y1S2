function openPopup(ID) {
            
    document.getElementById('SolId-in').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('msg').value = '';

    document.getElementById('popUpForm').action = '../Process/replyInquary.php';
    var popUpWindow = document.getElementById('replyInquary');
    popUpWindow.style.visibility = "visible";
    document.getElementById('SolId-in').type = 'hidden';
    document.getElementById('SolId-label').innerHTML = '';
    


    document.getElementById('InqId-pop').value = ID;
    console.log(ID);
}
function openPopupEditor(ID,InquaryID,Subject,Message){

    document.getElementById('popUpForm').action = '../Process/updateSolution.php';
    var popUpWindow = document.getElementById('replyInquary');
    popUpWindow.style.visibility = "visible";
    document.getElementById('SolId-in').type = 'text';
    document.getElementById('SolId-label').innerHTML = 'Solution ID:';

    document.getElementById('InqId-pop').value = InquaryID;
    document.getElementById('SolId-in').value = ID;
    document.getElementById('subject').value = Subject;
    document.getElementById('msg').value = Message;
    document.getElementById('submit').value = 'Update';


}
function closePopup() {
    var popUpWindow = document.getElementById('replyInquary');
    popUpWindow.style.visibility = "hidden";
}