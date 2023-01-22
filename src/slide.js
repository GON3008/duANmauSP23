const slide = {
    main : null,
    elementImg : null,
    imgSelected : 0,
    nextSlide: function (){
        if (this.imgSelected != null)
        {
            if (this.imgSelected < (this.elementImg.length - 1))
            {
                this.imgSelected++;
                this.normalizeSlide();
            }
        }
    },
    prevSlide: function (){
        if (this.imgSelected != null)
        {
            if (this.imgSelected > 0)
            {
                this.imgSelected--;
                this.normalizeSlide();
            }
        }
    },
    normalizeSlide: function (){

        for (num = 0; num < this.elementImg.length; num++)
        {
            this.elementImg[num].classList.remove("hideLeft","prevLeftSecond","prev","selected","next","nextRightSecond","hideRight");
        }

        this.elementImg[this.imgSelected].classList.add("selected");

        if (this.imgSelected > 2)
        {
            this.elementImg[this.imgSelected-2].classList.add("hideLeft");
            this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
            this.elementImg[this.imgSelected-1].classList.add("prev");
        }
        else if (this.imgSelected > 1)
        {
            this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
            this.elementImg[this.imgSelected-1].classList.add("prev");
        }
        else if (this.imgSelected > 0)
        {
            this.elementImg[this.imgSelected-1].classList.add("prev");
        }

        if ((this.imgSelected + 3) < this.elementImg.length)
        {
            this.elementImg[this.imgSelected+3].classList.add("hideRight");
            this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
            this.elementImg[this.imgSelected+1].classList.add("next");
        }
        else if ((this.imgSelected + 2) < this.elementImg.length)
        {
            this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
            this.elementImg[this.imgSelected+1].classList.add("next");
        }
        else if((this.imgSelected + 1) < this.elementImg.length)
        {
            this.elementImg[this.imgSelected+1].classList.add("next");
        }
    }
}

window.onload = () => {

    slide.main = document.getElementById("carousel");
    slide.elementImg = slide.main.getElementsByClassName("slideImg");

    for (num = 0; num < slide.elementImg.length; num++)
    {
        slide.elementImg[num].setAttribute("img-number", num);
        
        slide.elementImg[num].addEventListener("click", (event) => {
            slide.imgSelected = parseInt(event.target.parentElement.getAttribute("img-number"));
            slide.normalizeSlide();
        });

        if (slide.elementImg[num].classList.contains("selected"))
        {
            slide.imgSelected = num;
        }
    }

    document.getElementById("prev").addEventListener("click", () => {slide.prevSlide()});
    document.getElementById("next").addEventListener("click", () => {slide.nextSlide()});

}