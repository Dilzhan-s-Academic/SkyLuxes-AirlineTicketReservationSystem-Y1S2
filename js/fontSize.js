var text = document.querySelector('.content');
var increase = document.querySelector('.increase');
var decrease = document.querySelector('.decrease');
var textSize = 20;
var clicks=0;
console.log(123);
// for increase

increase.addEventListener('click', () => {
    textSize = textSize + 1;
    var texts = document.querySelectorAll('.content');
    texts.forEach(text => {
        text.style.fontSize = textSize + 'px';
    });
});


// for decrease
decrease.addEventListener('click', () => {
    textSize = textSize - 1;
    var texts = document.querySelectorAll('.content');
    texts.forEach(text => {
        text.style.fontSize = textSize + 'px';
    });
});
