
    (function(){
        // Script para ocultar el formulario y mostrar el mensaje de agradecimiento después de enviar el formulario
        const formulario = document.querySelector('form');
        const mensajeAgradecimiento = document.getElementById('agradecimiento');

        formulario.addEventListener('submit', function(event) {
            event.preventDefault();
            formulario.style.display = 'none';
            mensajeAgradecimiento.style.display = 'block';
            setTimeout(function() {
                window.location.href = 'https://11path.github.io/el-faro/'; 
            }, 2000); 
        });

    })();
 
