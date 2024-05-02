<?php
class Cliente {
    public function registrarCliente($nombre, $email, $plan) {
        
        return true; 
    }
}

$mensaje='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $plan = $_POST['plan'];

    
    $cliente = new Cliente();
    $registro_exitoso = $cliente->registrarCliente($nombre, $email, $plan);

    if ($registro_exitoso) {
        $mensaje = gracias por registrarte! Nos pondremos en contacto contigo 
    }
}
?>

