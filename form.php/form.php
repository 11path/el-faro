<?php
class Cliente {
    public function registrarCliente($nombre, $email, $plan) {
        
        return true; 
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $plan = $_POST['plan'];

    
    $cliente = new Cliente();
    $registro_exitoso = $cliente->registrarCliente($nombre, $email, $plan);

    if ($registro_exitoso) {
        // Redireccionar a la página de agradecimiento después de 2 segundos
        /*entre las comillas despues de url=va la direccion de la pagina de agradecimiento*/
        header("refresh:2;url=");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    
</head>
<body>
    
    <form action="" method="post">
        <h2>Suscripción al diario online</h2>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="plan">Plan de suscripción:</label><br>
        <select id="plan" name="plan" required>
            <option value="FREE">FREE</option>
            <option value="BASICO">BÁSICO</option>
            <option value="PREMIUM">PREMIUM</option>
        </select><br><br>
        <input type="submit" value="Registrarse">
    </form>

    <!-- Mensaje de agradecimiento -->
    <div id="agradecimiento" style="display: none;">
        <h2>¡Gracias por registrarte!</h2>
        <p>Redirigiendo de vuelta...</p>
    </div>

    <script>
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
    </script>
</body>
</html>
