let SlideIndex=1;
showSlide(SlideIndex);

// change slide with the prev/next button
function moveSliders(moveStep) {
    showSlide(SlideIndex += moveStep);
}

// change slide with the dots
function currentSlide(n) {
    showSlide(SlideIndex = n);
}

function showSlide(n) {
    let i;
    const sliders = document.getElementsByClassName("slideShow");

    if (n > sliders.length) {
        SlideIndex = 1
    }
    if (n < 1) {
        SlideIndex = sliders.length
    }

    // hide all slides
    for (i = 0; i < sliders.length; i++) {
        sliders[i].classList.add('hidden');
    }


    // show the active slide
    sliders[SlideIndex - 1].classList.remove('hidden');
    console.log(Sliders)

}