

/*Menu productos */
document.addEventListener('DOMContentLoaded', function() {
    const submenuLinks = document.querySelectorAll('.has-submenu');

    submenuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Cerrar cualquier submenú abierto
            submenuLinks.forEach(otherLink => {
                if (otherLink !== link) {
                    otherLink.parentElement.classList.remove('active');
                }
            });

            // Abrir el submenú del elemento clicado
            const parentLi = this.parentElement;
            parentLi.classList.toggle('active');
        });
    });

    // Cerrar submenús al hacer clic fuera de ellos
    document.addEventListener('click', function(event) {
        const isClickInside = event.target.closest('.categories');
        if (!isClickInside) {
            submenuLinks.forEach(link => {
                const parentLi = link.parentElement;
                parentLi.classList.remove('active');
            });
        }
    });
});

/*Secciones*/
function showSection(sectionId) {
    var sections = document.getElementsByClassName("section");
    for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove("active");
        sections[i].style.display = "none";  // Mantener el estilo "display" para ocultar secciones
    }
    
    var sectionToShow = document.getElementById(sectionId);
    if (sectionToShow) {
        sectionToShow.style.display = "block";  // Mostrar la sección antes de aplicar la clase
        setTimeout(function() {
            sectionToShow.classList.add("active");
        }, 10);  // Retraso pequeño para permitir que la transición ocurra
    }
}

function checkHash() {
    var hash = window.location.hash;
    if (hash) {
        showSection(hash.substring(1));
    } else {
        showSection("section1");
    }
}

window.onhashchange = function () {
    checkHash();
};

document.addEventListener('DOMContentLoaded', function () {
    checkHash();
});


/*Codsigo muestra de productos detalles */
document.querySelectorAll('.categories a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href').substring(1); // ID de la sección
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            const headerHeight = document.querySelector('header')?.offsetHeight || 0; // Altura del header
            const elementPosition = targetElement.offsetTop; // Posición de la sección
            
            window.scrollTo({
                top: elementPosition - headerHeight, // Ajustar posición
                behavior: 'smooth'
            });
        }
    });
});
