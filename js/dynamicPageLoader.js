// Dilshan Yapa S Y C T 

function loadContent(page) {
    var path = ""
    var contentContainer = document.getElementById('content');
    switch(page){
        case 'myinfo':
            path = 'Dashboard/userProfileInfo.php';
            break;
        case 'loyalty':
            path = 'Dashboard/loyaltyCust.php';
            break;
        case 'inquary':
            path = 'Dashboard/inquary.php';
            break;
    }
    fetch(path) //-> stream
        .then(response => response.text()) //response as a para
        .then(data => {
            contentContainer.innerHTML= data; //stream -> text
        })
        .catch(error => console.error('Error fetching content:', error));
}
loadContent('myinfo');
