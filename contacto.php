<?php

include("conexion.php");

if (isset($_POST['contact'])){

   if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1 
         

      ){
            $name=trim($_POST['name']);
            $email=trim($_POST['email']);
            $direction=trim($_POST['direction']);
            $phone=trim($_POST['phone']);
            $message=trim($_POST['message']);

            $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, mensaje)
            VALUES ('$name','$email','$direction','$phone','$message')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <h3 class="success">Tu registro se a completado</h3>
                <?php
            }else {
                ?>
                    <h3 class="error">ocurrio un error</h3>
                <?php
            }
    }else {?> <h3 class="error">Llena todos los campos</h3> <?php }
}

?>