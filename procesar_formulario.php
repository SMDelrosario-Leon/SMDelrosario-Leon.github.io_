<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $producto = $_POST["producto"];
    $nombre = $_POST["nombre"];
    $años = $_POST["años"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $descripcion = $_POST["descripcion"];
    $prioridad = $_POST["prioridad"];
    $fecha = $_POST["fecha"];
    


    // Agrega aquí más campos según tu formulario

    // Dirección de correo a la que se enviará el formulario
    $to = "sdelrosarioleon@hotmail.com";

    // Asunto del correo
    $subject = "Solicitud de demostración";

    // Mensaje que se enviará por correo
    $message = "Producto: $producto\n";
    $message .= "Nombre: $nombre\n";
    $message .= "Años: $años\n";
    $message .= "Email: $email\n";
    $message .= "Telefono: $telefono\n";
    $message .= "Direccion: $direccion\n";
    $message .= "Descripcion: $descripcion\n";
    $message .= "Prioridad: $prioridad\n";
    $message .= "Fecha: $fecha\n";
   
    // Agrega aquí más campos según tu formulario

    // Envía el correo
    mail($to, $subject, $message);

    // Redirecciona al usuario a una página de agradecimiento u otra página de tu elección
    header("Location: gracias.html");
    exit;
}
?>
