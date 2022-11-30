import Alpine from 'alpinejs';

require('./Alpine/MainHeader');
require('./Alpine/Atendimento');

window.Alpine = Alpine;
Alpine.start();

window.MicroModal = require('micromodal').default;

window.VMasker = require('vanilla-masker');

window.axios = require('axios').default;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Splide from '@splidejs/splide';
window.Splide = Splide;

// import Swup from 'swup';
// const swup = new Swup(); // only this line when included with script tag

function init(){
    if (typeof (gtag) == 'function') {
        gtag('config', 'G-39LM525ZWPPPPPPPPPP', {
            'page_title': event.target.title,
            'page_path': event.data.url.replace(window.location.protocol + "//" + window.location.hostname, "")
        });
    }

    MicroModal.init({
        onClose: (modal) => {
            // code
        },
        // awaitCloseAnimation: true,
    });


    /**
     * Splide
     */
    if (document.querySelector('#clientes-slide')) {
        console.log('Encontrou os slides');

        window.meuSlide = new Splide('#meu-slide', {
            type: 'loop',
            speed: 800,
            perPage: 6,
            perMove: 1,
            focus: 'center',
            autoWidth: true,
            autoplay: true,
            interval: 3000,
            //gap: '1rem',
            '640': {
                perPage: 3,
            },
            '480': {
                perPage: 2,
            },
        }).mount();
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
//document.addEventListener('turbolinks:load', (event) => {
    init()
});

// swup.on('contentReplaced', init);


// InstantPage
import "instant.page";

// SmoothCcroll
import 'smoothscroll-for-websites';

require('./cookie-consent-banner');
