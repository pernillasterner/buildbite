
import {  CAROUSEL } from './modules/carousel.js';
import {  IMAGE_SLIDER } from './modules/image_slider.js';
import {  MENU } from './modules/menu.js';


const APP = (function () {
    document.addEventListener('DOMContentLoaded', () => {

        MENU.addListeners();
        
        // console.log(window.location);

        // Language switcher
        let pathName = window.location.pathname;
        // console.log(pathName);
        let lang = '';
        if(pathName == '/buildbite/sv/') {
            // console.log('sverige');
            document.getElementById("dropdown").selectedIndex = '1';
            // lang = 'sv';
        } else if(pathName == '/buildbite/fi/') {
            // console.log('finland');
            document.getElementById("dropdown").selectedIndex = '2';
            // lang = 'fi';
        } else {
            // console.log('england');
            document.getElementById("dropdown").selectedIndex = '0';
        }
     


        let selection = document.querySelector('select');
        selection.addEventListener('change', () => {

        let selectedIndex = selection.selectedIndex;
        handleSelected(selectedIndex, lang);
      
            function handleSelected(selectedIndex, lang) {
                
                // console.log(window.location.origin);
                window.location.href = window.location.origin + '/buildbite'
                // veta vart i pathname lang är lika med 

                switch(selectedIndex) {

                    case 0:
                        window.location.href = 'https://techlove.nu/buildbite/';
                        break;
                    case 1:
                        window.location.href = 'https://techlove.nu/buildbite/sv/';
                        break;
                    case 2:
                        window.location.href = 'https://techlove.nu/buildbite/fi/';
                        break;
                    default:
                }
            }
        })
    })
})();