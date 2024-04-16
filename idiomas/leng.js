


   // Objeto con los textos en diferentes idiomas
 const languages = {
  es: {
    inicio:"INICIO",
   
  },
  en: {
   
  }
  // Agrega más idiomas y sus textos correspondientes si es necesario
};

// Función para cambiar el idioma
function changeLanguage(lang) {
  // Obtener los elementos del DOM
  const inicioElement = document.getElementById("inicio");
  
  // Verificar si el idioma está disponible
  if (languages.hasOwnProperty(lang)) {
    // Cambiar el contenido de los elementos con el idioma seleccionado
    inicioElement.textContent = languages[lang].inicio;
    

    // Cambiar el atributo lang de la etiqueta html para el idioma seleccionado
    document.documentElement.lang = lang;

    // Guardar el idioma seleccionado en el almacenamiento local del navegador
    localStorage.setItem("selectedLanguage", lang);
  }
}

// Cargar contenido en el idioma almacenado (si existe) o en el idioma predeterminado (español en este caso)
document.addEventListener("DOMContentLoaded", () => {
  const selectedLanguage = localStorage.getItem("selectedLanguage");
  if (selectedLanguage && languages.hasOwnProperty(selectedLanguage)) {
    changeLanguage(selectedLanguage);
    // Establecer el valor del selector de idioma con el idioma seleccionado previamente
    document.getElementById("language").value = selectedLanguage;
  } else {
    // Si no se encontró un idioma seleccionado previamente, cargar el idioma predeterminado (español en este caso)
    changeLanguage("en");
  }
});