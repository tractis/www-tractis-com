jQuery(document).ready(function () {
	lang = readCookie('lang');
	if (lang === "es") {
		message = 'Utilizamos cookies propias y de terceros para gestionar sesiones de usuario, analizar hábitos de navegación, mostrar contenido personalizado<br /> y mejorar tu experiencia de usuario. Al continuar navegando este sitio web, estás aceptando nuestro uso de cookies.<br />';
		acceptText = 'Aceptar';
		policyText = 'Más información';
	} else if (lang === "ca") {
		message = 'Utilitzem cookies pròpies i de tercers per gestionar sessions d\'usuari, analitzar hàbits de navegació, mostrar contingut personalitzat<br /> i millorar la teva experiència d\'usuari. En continuar navegant aquest lloc web, estàs acceptant el nostre ús de cookies.<br />';
		acceptText = 'Acceptar';
		policyText = 'Més informació';
	} else {
		message = 'We use own and third party cookies to manage user sessions, analyze browsing habits, show personalized content<br /> and improve your user experience. By continuing to use this website you are agreeing to our use of cookies.<br>';
		acceptText = 'Accept';
		policyText = 'More information';
	}
	jQuery('head').append('<link rel="stylesheet" href="/tractis_cookies/jquery.cookiebar.css" type="text/css" />');
	jQuery('head').append('<script type="text/javascript" src="/tractis_cookies/jquery.cookiebar.js"></script>');
	jQuery.cookieBar({
		message: message,
		acceptText: acceptText,
		policyButton: true,
		policyText: policyText,
		policyURL: 'https://www.tractis.com/privacy_policy',
		fixed: true,
		append: true,
		domain: '.tractis.com',
		autoEnable: true,
		acceptOnContinue: true
	});
});

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
