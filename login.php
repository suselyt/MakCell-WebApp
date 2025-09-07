<?php
    session_start(); //se hace eso para que el usuario quede loggeado al cambiar de pagina en el dashboard
    include("conexion.php"); //ligar la conexion de la badat de la hoja conexion


        $user = trim($_POST['user']); //método trim elimina los espacios antes o después por si el usuario los dejó
        $password = trim($_POST['password']); //variables obtenidas con m'etodo post de iniciosesion.php

        $queryContra = $conex->prepare("CALL GetPassword(?, @password)"); //prepara la consulta, ? es el usuario que recibirá
        $queryContra->bind_param("s", $user); //s de string y el parametro de entrada

        if($queryContra->execute()){ //si $stmt se ejecuto
            $select = $conex->query("SELECT @password AS password"); //hace una consulta para guardar los datos
            $result = $select->fetch_assoc(); //ahora la contrseña se guarda en $result['password'] y asi con los demas

            if ($result) { //si la variable result tiene algo entonces...
                $hash_password = $result['password']; //almacena la contra de mysql

                if (password_verify($password, $hash_password)) { //compara ambas contras
                    $stmtId = $conex->prepare("CALL GetUserId(?, @id_user)");
                    $stmtId->bind_param("s", $user);
                   
                    if ($stmtId->execute()) {
                        $selectId = $conex->query("SELECT @id_user AS id_user");
                        $resultId = $selectId->fetch_assoc();
                        
                        if ($resultId['id_user'] == 3) {
                            $_SESSION['user_id'] = $resultId['id_user']; // guardar el ID en la sesión
                            header("Location: dash-index.php"); // redirigir al dashboard
                            exit();
                        }
                        else if($resultId['id_user'] == 4)
                            $_SESSION['user_id'] = $resultId['id_user']; // guardar el ID en la sesión
                            header("Location: Mensajes.php"); // redirigir a los mensajes
                            exit();
                    }
                }
                else{
                    echo "<script>
                    window.alert('Contraseña incorrecta');
                    window.location.href = 'iniciosesion.php'; 
                    </script>";
                    }
                }
        }
        else{
            echo "usuario no encontrado";
        }

        $queryContra->close(); // cierra el statement
 


$conex->close(); // cierra la conexión
?>