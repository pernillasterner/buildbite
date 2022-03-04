

const CAROUSEL = (function () {

    // slider for product info
    const track = document.querySelector('.carousel__track');

    if(track) {
        
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.carousel__button--right');
        const prevButton = document.querySelector('.carousel__button--left');
        const dotsNav = document.querySelector('.carousel__nav');
        const dots = Array.from(dotsNav.children);
        const setCurrentSlide = slides[0].classList.add('current-slide');
        const setCurrentDot = dotsNav.firstChild.nextElementSibling.classList.add('current-slide');
        const slideWidth = slides[0].getBoundingClientRect().width;
        const slideWidthSpace = slideWidth + 25;
    
    
        const setSlidePosition = (slide, i) => {
            slide.style.left = slideWidthSpace * i + 'px';
        }
        slides.forEach( setSlidePosition);
    
    
        const moveToSLide = (track, currentSlide, targetSlide) => {
            track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
            currentSlide.classList.remove('current-slide');
            targetSlide.classList.add('current-slide');
        }
    
    
        const updateDots = (currentDot, targetDot) => {
            currentDot.classList.remove('current-slide');
            targetDot.classList.add('current-slide');
        };
    
    
        const hideShowArrows = (slides, prevButton, nextButton, targetIndex) => {
            if(targetIndex === 0) {
                prevButton.classList.add('is-hidden');
                nextButton.classList.remove('is-hidden');
            } else if (targetIndex === slides.length - 1) {
                prevButton.classList.remove('is-hidden');
                nextButton.classList.add('is-hidden');
            } else {
                prevButton.classList.remove('is-hidden');
                nextButton.classList.remove('is-hidden');
            }
        }
    
        // when I click left, move the slides to the left
        prevButton.addEventListener('click', e => {
            const currentSlide = track.querySelector('.current-slide');
            const prevSlide = currentSlide.previousElementSibling;
            const amountToMove = prevSlide.style.right;
            const currentDot = dotsNav.querySelector('.current-slide');
            const prevDot = currentDot.previousElementSibling;
            const prevIndex = slides.findIndex(slide => slide === prevSlide);
    
    
            moveToSLide(track, currentSlide, prevSlide);
            updateDots(currentDot, prevDot);
            hideShowArrows(slides, prevButton, nextButton, prevIndex);
    
        });
    
    
        // when I click right, move the slides to the right
        nextButton.addEventListener('click', e => {
            // get the current slide
            const currentSlide = track.querySelector('.current-slide');
            // get the next slide
            const nextSlide = currentSlide.nextElementSibling;
            const amountToMove = nextSlide.style.left;
            const currentDot = dotsNav.querySelector('.current-slide');
            const nextDot = currentDot.nextElementSibling;
            const nextIndex = slides.findIndex(slide => slide === nextSlide);
    
            
            // move the next slide
            
            track.style.transform = 'translateX(-' + amountToMove + ')';
            currentSlide.classList.remove('current-slide');
            nextSlide.classList.add('current-slide');
            
    
            // move the slide
            moveToSLide(track, currentSlide, nextSlide);
            updateDots(currentDot, nextDot);
            hideShowArrows(slides, prevButton, nextButton, nextIndex);
    
        });
    
    
        // when I click the nav indicators, move that slide
        dotsNav.addEventListener('click', e => {
            
            // what indicator was clicked on
            const targetDot = e.target.closest('li');
    
            // exist if the clicked object is not a button
            if(!targetDot) return; 
            
            // current slide 
            const currentSlide = track.querySelector('.current-slide');
            const currentDot = dotsNav.querySelector('.current-slide');
            // for each dot inside the dots I want to do a function. 
            // I want to return the first dot that is equal to targetDot
            // It´s return the index number of that dot
            const targetIndex = dots.findIndex(dot => dot === targetDot);
            const targetSlide = slides[targetIndex]
    
            moveToSLide(track, currentSlide, targetSlide);
            updateDots(currentDot, targetDot);
            hideShowArrows(slides, prevButton, nextButton, targetIndex);
    
        });
    
    }
    

})();


export { CAROUSEL }