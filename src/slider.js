
let slideMove=1;
showSlide(slideMove);

// change slide with the prev/next button
function moveSlider(moveStep) {
    showSlide(slideMove += moveStep);
}

// change slide with the dots
function currentSlide(n) {
    showSlide(slideMove = n);
}

function showSlide(n) {
    let i;
    const slides = document.getElementsByClassName("slider");

    if (n > slides.length) {
        slideMove = 1
    }
    if (n < 1) {
        slideMove = slides.length
    }

    // hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
    }


    // show the active slide
    slides[slideMove - 1].classList.remove('hidden');
    console.log(slideMove)

}