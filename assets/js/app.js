
import {  CAROUSEL } from './modules/carousel.js';
import {  IMAGE_SLIDER } from './modules/image_slider.js';
import {  MENU } from './modules/menu.js';


const APP = (function () {
    document.addEventListener('DOMContentLoaded', () => {

        MENU.addListeners();

        const open = document.querySelectorAll('.open');
        const close = document.querySelectorAll('.modul_close');
        const modul_get_started = document.getElementById('modul_get-started');

        open.forEach(el => el.addEventListener('click', () => {
            modul_get_started.classList.add('modul_show')
        }));

        close.forEach(el => el.addEventListener('click', (e) => {
            modul_get_started.classList.remove('module_show')
        }));

        const openFeatures = document.querySelectorAll('.open-features');
        const modul_features = document.getElementById('modul_features');
        
        openFeatures.forEach(el => el.addEventListener('click', () => {
            modul_features.classList.add('modul_show')
        }));
    
    })
})();