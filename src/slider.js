let slideIndex= 1;
showSlider(slideIndex);

// change slide with the prev/next button
function moveSlider(moveSLIDE) {
    showSlider(slideIndex += moveSLIDE);
    
}

// change slide with the dots
function currentSlider(n) {
    showSlider(slideIndex = n);
}

function showSlider(n) {
    let i;
    const slides = document.getElementsByClassName("slider");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    // hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
    }


    // show the active slide
    slides[slideIndex - 1].classList.remove('hidden');
    console.log(slideMove)

}