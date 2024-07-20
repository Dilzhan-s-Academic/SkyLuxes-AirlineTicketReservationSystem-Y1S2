/*IT23365346
BJS PERERA*/


// Selecting necessary elements from the DOM
const vas = document.querySelector(".vas");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".vservice").offsetWidth; // Width of the first card in the carousel
const arrowBtns = document.querySelectorAll(".vas i");
const carouselChildrens = [...carousel.children]; // Convert carousel children into an array

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth); 

//cardPerView = 4

// Insert copies of the last few cards to the beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML); //Just inside the element, before its first child.
});

// Insert copies of the first few cards to the end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML); //Just inside the element, after its last child.
});
// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

// Function for infinite scrolling
const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    // Retrieves the current horizontal scroll position of the element.(scrollleft)
    //scrollWidth = whole carasoul , offsetwidth = what the eye can see

    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) { 
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if the mouse is not hovering over the carousel
    clearTimeout(timeoutId);
    if(!vas.matches(":hover")) {
      autoPlay()
    };
}

// Function to autoplay the carousel
const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2000 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2000);
}

autoPlay();
carousel.addEventListener("scroll", infiniteScroll);
vas.addEventListener("mouseenter", () => clearTimeout(timeoutId));
vas.addEventListener("mouseleave", autoPlay);


//go to top----------------------------------------------------------------------
// Get the button
let mybutton = document.getElementById("toTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
