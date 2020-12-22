let time = 3000,
    currentImageIndex = 0,
    images = document.querySelectorAll('[data-js="carousel_item"]')
    max = images.length;

function nextImage(){
    if(currentImageIndex === images.length - 1){
        currentImageIndex = 0
    }else{
        currentImageIndex++
    }

    images.forEach(slide => {
        slide.classList.remove('carousel_item--visible')
    })

    images[currentImageIndex].classList.add("carousel_item--visible")
}

function start(){
    setInterval(() => {
        nextImage()
    }, time);
}

window.addEventListener("load", start)