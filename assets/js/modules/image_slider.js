const IMAGE_SLIDER = (function () {

    const container1   = document.querySelector('.text_image_container-0');
    const container2   = document.querySelector('.text_image_container-1');
    const container3   = document.querySelector('.text_image_container-2');
    const subheading1 = document.querySelector('.text_image_subheading-0');
    const subheading2 = document.querySelector('.text_image_subheading-1');
    const subheading3 = document.querySelector('.text_image_subheading-2');
    console.log(subheading1);

    // subheading1.classList.add('is-active');
    // subheading2.classList.remove('is-active');
    // subheading3.classList.remove('is-active');

    // container1.classList.add('is-active');
    // container2.classList.remove('is-active');
    // container3.classList.remove('is-active');

    if(58 < -790) {
        console.log('true');
    }



   const scrollAmount = -600;
   const image = document.querySelector('#image-container');
   const image1 = document.querySelector('#background-img-0');
   const image2 = document.querySelector('#background-img-1');
   const image3 = document.querySelector('#background-img-2');


   window.addEventListener('scroll', (event) => {
       // vart har man scrollat
       const { top }= image.getBoundingClientRect();
    //    console.log(top);
       console.log(top - window.innerHeight);
       if(top - window.innerHeight > scrollAmount) {
           image1.style.opacity = 1;
           image2.style.opacity = 0;
           image3.style.opacity = 0;

        //    console.log(subheading1);
           subheading1.classList.add('is-active');
        //    console.log(subheading1);
           subheading2.classList.remove('is-active');
           subheading3.classList.remove('is-active');

        container1.classList.add('is-active');
        container2.classList.remove('is-active');
        container3.classList.remove('is-active');

       } else if (top - window.innerHeight < scrollAmount && top - window.innerHeight > -700) {
           image1.style.opacity = 0;
           image2.style.opacity = 1;
           image3.style.opacity = 0;

           subheading1.classList.remove('is-active');
           subheading2.classList.add('is-active');
           subheading3.classList.remove('is-active');

        container1.classList.remove('is-active');
        container2.classList.add('is-active');
        container3.classList.remove('is-active');

       } else if(top - window.innerHeight < -700) {
           image1.style.opacity = 0;
           image2.style.opacity = 0;
           image3.style.opacity = 1;

           subheading1.classList.remove('is-active');
           subheading2.classList.remove('is-active');
           subheading3.classList.add('is-active');

        container1.classList.remove('is-active');
        container2.classList.remove('is-active');
        container3.classList.add('is-active');
       }

       // const backgroundInView = top - window.innerHeight < -690;

       //     image1.style.opacity = backgroundInView ? 0 : 1;
       //     image2.style.opacity = backgroundInView ? 0 : 1;
       //     image3.style.opacity = backgroundInView ? 1 : 0;


   })


  

  
 
   // const setArrow = (subheading, i) => {
   //     subheading.addEventListener('scroll', (event) => {
   //         console.log('test');
   //         console.log(event);
   //     });
       
   // }
   // subheadings.forEach( setArrow);

   // const setContainers = (container, i) => {
     
   //     container.addEventListener('scroll', (event) => {
   //         console.log('test');
   //         console.log(event);
   //     });
   // }
   // containers.forEach( setContainers);


})();


export { IMAGE_SLIDER }