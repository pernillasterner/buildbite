const IMAGE_SLIDER = (function () {

   const scrollAmount = -600;
   const containers   = document.querySelectorAll('#text_image_container');
   const image_container = document.querySelector('#image-container');
   const bg_images = document.querySelectorAll('#background-img');
   const subheadings = document.querySelectorAll('#text_image_subheading');
  

   window.addEventListener('scroll', () => {
  
      const { top } = image_container.getBoundingClientRect();
      const windowTop = top - window.innerHeight;

      for (let i = 0; i < containers.length; i++) {
         
         if( windowTop > scrollAmount ) {
         
            if( i === 0 ) {
               bg_images[i].classList.add('is-active');
               subheadings[i].classList.add('is-active');
               containers[i].classList.add('is-active');
            } else {
               bg_images[i].classList.remove('is-active');
               subheadings[i].classList.remove('is-active');
               containers[i].classList.remove('is-active');
            }

         } else if (windowTop < scrollAmount && windowTop > scrollAmount - 100) {

            if( i === 1 ) {
               bg_images[i].classList.add('is-active');
               subheadings[i].classList.add('is-active');
               containers[i].classList.add('is-active');
            } else {
               bg_images[i].classList.remove('is-active');
               subheadings[i].classList.remove('is-active');
               containers[i].classList.remove('is-active');
            }

         } else if(windowTop < scrollAmount - 100) { 

            if( i === 2 ) {
               bg_images[i].classList.add('is-active');
               subheadings[i].classList.add('is-active');
               containers[i].classList.add('is-active');
            } else {
               bg_images[i].classList.remove('is-active');
               subheadings[i].classList.remove('is-active');
               containers[i].classList.remove('is-active');
            }
         }
      }
   })
})();

export { IMAGE_SLIDER }