// Función para continuar navegando si el usuario es mayor de edad
function continueToSite() {
    // Oculta la tarjeta de verificación de edad
    document.getElementById('ageVerification').style.display = 'none';
    // Habilita el scroll de la página
    document.body.classList.remove('modal-open');
    // Guarda la selección del usuario en una cookie con una expiración de 30 días
    document.cookie = "ageVerified=true; expires=" + new Date(Date.now() + 30 * 24 * 60 * 60 * 1000).toUTCString() + "; path=/";
}

// Función para redirigir al usuario a Google.com si no es mayor de edad
function leaveSite() {
    // Redirige al usuario a Google.com
    window.location.href = 'https://www.google.com';
}

// Verifica si la cookie de verificación de edad existe
window.onload = function() {
    var ageVerified = getCookie("ageVerified");
    if (ageVerified !== "true") {
        // Si la cookie no existe o es false, muestra la tarjeta de verificación de edad
        document.getElementById('ageVerification').style.display = 'block';
        // Deshabilita el scroll de la página
        document.body.classList.add('modal-open');
    }
};

// Función para obtener el valor de una cookie
function getCookie(name) {
    var cookieValue = "";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        if (cookie.substring(0, name.length + 1) === (name + '=')) {
            cookieValue = cookie.substring(name.length + 1);
            break;
        }
    }
    return cookieValue;
}