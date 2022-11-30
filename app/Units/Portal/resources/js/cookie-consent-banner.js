
window.cookieConsentVar = 'cookie_consent_accepted';

window.setCookie = (cname, cvalue, exdays=999) => {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

window.getCookie = (cname) => {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }

    return "";
}

document.addEventListener('turbolinks:load', (event) => {
    let cookieInfoElem = document.getElementById('cookie-consent-banner');

    if(getCookie(cookieConsentVar) === 'accepted'){
        //console.log('Tem Cookie');
        cookieInfoElem.classList.add('hidden');
    } else {
        //console.log('Não tTem o Cookie');
        cookieInfoElem.classList.remove('hidden');
    }

    document.getElementById('cookie-consent-banner-btn').addEventListener('click', function () {
        //console.log('Me clicou');
        cookieInfoElem.classList.add('hidden');
        setCookie(cookieConsentVar, 'accepted', 90);
    });
});