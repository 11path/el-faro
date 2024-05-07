<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-COmpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class= "form-container">  
            <h2>Registrate</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        <form method="post" autocomplete="off">
            <div class="form-group">
                <div class="form-content">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Nombre">
                </div>
                <div class="form-content">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Correo">
                </div>
            
            </div>

            <div class="form-group">
                <div class="form-content">
                    <label for="direction">Direccion</label>
                    <input type="text" id="direction" name="direction" placeholder="Direccion">
                </div>
                <div class="form-content">
                    <label for="phone">Telefono</label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefono">
                </div>
            
            </div>

            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Indica el plan a contratar"></textarea>

            <input class="btn" type="submit" name="contact" value="Enviar Mensaje">
            
        </form>
    </div>

    <?php
        include("contacto.php")
    ?>
    
</body>
</html>