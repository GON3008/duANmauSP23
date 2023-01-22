
let SlideMove=1;
showSlide(SlideMove);

// change slide with the prev/next button
function moveSlides(moveStep) {
    showSlide(SlideMove += moveStep);
}

// change slide with the dots
function currentSlide(n) {
    showSlide(SlideMove = n);
}

function showSlide(n) {
    let i;
    const slides = document.getElementsByClassName("slideShow");

    if (n > slides.length) {
        SlideMove = 1
    }
    if (n < 1) {
        SlideMove = slides.length
    }

    // hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
    }


    // show the active slide
    slides[SlideMove - 1].classList.remove('hidden');
    console.log(SlideMove)

}