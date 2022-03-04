
const MENU = (function () {
    // properties
    const menu_btn = document.querySelector('.navbar_close');
    const menu_nav = document.querySelector('.main_navigation');
    const site_header = document.querySelector('.site_header');
    const sectionOne = document.querySelector('.component_hero');
    const main_navbar = document.querySelector('.main_logo');
    const scrolled_navbar = document.querySelector('.scrolled_logo');

   
    const addHandler = () => {
        menu_btn.classList.toggle('is-active')
        menu_nav.classList.toggle('is-active')
    }

    const addListeners = () => {
        menu_btn.addEventListener('click', addHandler)
    }


    
    const sectionOneOptions = {
        rootMargin: "-500px 0px 0px 0px"
    };
    const sectionOneObserver = new IntersectionObserver(function(
        entries, 
        sectionOneOptions
    ) {

        entries.forEach(entry => {

            main_navbar.style.display = 'block';
            scrolled_navbar.style.display = 'none';
           
            if(!entry.isIntersecting) {
                site_header.classList.add('bgcolor-scrolled');
                main_navbar.style.display = 'none';
                scrolled_navbar.style.display = 'block';
            } else {
                site_header.classList.remove('bgcolor-scrolled');
            }
        })

    }, 
    sectionOneOptions);

    if(sectionOne) {
        sectionOneObserver.observe(sectionOne);
    }
    

   return { addListeners }
})();


export { MENU }



