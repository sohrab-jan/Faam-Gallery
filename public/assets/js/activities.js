
let slideIndex = 1;
displaySlide(slideIndex);

function moveSlides(n) {
    slideIndex += n
    displaySlide(slideIndex);
}

function activeSlide(n) {
    slideIndex = n
    displaySlide(slideIndex);
}

/* Main function */
function displaySlide(n) {

    const totalslidesImage =
        document.getElementsByClassName("image-slider-amin");
    const totalslidesText =
        document.getElementsByClassName("text-slider-amin");
    // const totalslides =
    //     document.getElementsByClassName("slide");

    const totaldots =
        document.getElementsByClassName("footerdot");

    if (n > totalslidesImage.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = totalslidesImage.length;
    }

    for (let i = 0; i < totalslidesImage.length; i++) {
        totalslidesImage[i].style.display = "none";
        totalslidesText[i].style.display = "none";
    }
    for (let i = 0; i < totaldots.length; i++) {
        totaldots[i].className =
            totaldots[i].className.replace(" active", "");
    }
    // debugger;

    if (totalslidesImage[slideIndex - 1]?.style?.display)
        totalslidesImage[slideIndex - 1].style.display = "block";
    if (totalslidesText[slideIndex - 1]?.style?.display)
        totalslidesText[slideIndex - 1].style.display = "block";
    if (totaldots[slideIndex - 1]?.className)
        totaldots[slideIndex - 1].className += " active";
}
