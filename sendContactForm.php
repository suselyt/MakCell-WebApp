<?php

    include("conexion.php"); //ligar la conexion de la dabat de la hoja conexion

    if(isset($_POST['send'])) { //validacion que todos los campos esten llenos
        if(
            //el post saca los campos con el nombre = ""
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 && //en este si no pones el @ y correo no guarda pq es tipo mail aguas
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['subject']) >= 1 &&
            strlen($_POST['message']) >= 1
        ){
            $name = trim($_POST['name']); //asigna cada dato a la variable
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $subject = trim($_POST['subject']);
            $message = trim($_POST['message']);
            $consulta = "INSERT INTO contacto(nombre, email, telefono, asunto , mensaje)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
            $resultado = mysqli_query($conex, $consulta);      
            
            if ($resultado) {
            // En lugar de un alert, redirigimos con un mensaje en la URL
            header('Location: contact.php?status=success');
            exit();
        } else {
            header('Location: contact.php?status=error');
            exit();
        }
    } else {
        header('Location: contact.php?status=incomplete');
        exit();
        }

    }

?>