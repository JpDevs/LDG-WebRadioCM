const nextButton = document.querySelector('[data-js="carousel_button--next"]');
const backButton = document.querySelector('[data-js="carousel_button--back"]');
const slides = document.querySelectorAll('[data-js="carousel_item"]');

let currentSlideIndex = 0;

nextButton.addEventListener('click', () => {
    if(currentSlideIndex === slides.length - 1){
        currentSlideIndex = 0
    }else{
        currentSlideIndex++
    }

    slides.forEach(slide => {
        slide.classList.remove('carousel_item--visible')
    })

    slides[currentSlideIndex].classList.add('carousel_item--visible')
})

backButton.addEventListener('click', () => {
    if(currentSlideIndex === 0){
        currentSlideIndex = slides.length -1
    }else{
        currentSlideIndex--
    }

    slides.forEach(slide => {
        slide.classList.remove('carousel_item--visible')
    })
    
    slides[currentSlideIndex].classList.add('carousel_item--visible')
})