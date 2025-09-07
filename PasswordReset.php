<?php


    require 'conexion.php';

    // Manejar el proceso de restablecimiento
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset_password'])) {
        // Recuperar el token y la nueva contraseña del formulario
        $token = $_POST['token'];
        $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Validar el token
        $consultaId = "SELECT user_id FROM password_resets WHERE token = ? AND expires_at > NOW()";
        $queryId = $conex->prepare($consultaId);
        $queryId->bind_param('s', $token);
        $queryId->execute();
        $queryId->bind_result($user); 
        $queryId->fetch();
        $queryId->close();

        //hacer las consultas como password process
       // $query = $conex->prepare("SELECT user_id FROM password_resets WHERE token = ? AND expires_at > NOW()");
        //$query->execute([$token]);
        //$result = $query->fetch();

        if (isset($user)) {

            // Actualizar la contraseña en la base de datos
            $consultaUpdate = "UPDATE users SET password = ? WHERE id_user = ?";
            $queryUpdate = $conex->prepare($consultaUpdate);
            $queryUpdate->bind_param('si', $newPassword, $user);
            $queryUpdate->execute();
            $queryUpdate->close();
            //$queryUpdate->free_result(); por si es necesario

                //forma anterior de hacerlo que no funcionaba
            //$updateQuery = $conex->prepare("UPDATE users SET password = ? WHERE id_user = ?");
            //$updateQuery->execute([$newPassword, $result['user_id']]);

            // Eliminar el token para que no pueda reutilizarse
            $consultaDeleteToken = "DELETE FROM password_resets WHERE token = ?";
            $queryDeleteToken = $conex->prepare($consultaDeleteToken);
            $queryDeleteToken->bind_param('s', $token);

            //$deleteQuery = $conex->prepare("DELETE FROM password_resets WHERE token = ?");
            //$deleteQuery->execute([$token]);

            echo "Tu contraseña ha sido restablecida correctamente. Ahora puedes iniciar sesión.";
        } else {
            echo "El enlace es inválido o ha expirado.";
        }

        exit; // Detener más procesamiento
    }

    // Manejar la visualización del formulario de restablecimiento
    if (isset($_GET['token'])) {
        $token = $_GET['token'];

        // Validar el token antes de mostrar el formulario  
        $consultaUserId = "SELECT user_id FROM password_resets WHERE token = ? AND expires_at > NOW()";
        $query = $conex->prepare($consultaUserId);
        $query->bind_param('s', $token); // Asegúrate de vincular correctamente los parámetros
        $query->execute();
        $query->bind_result($result); 
        $query->fetch();
        $query->close();

        if ($result):
            ?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Restablecer contraseña</title>
            </head>
            <body>
                <h2>Restablecer contraseña</h2>
                <form action="PasswordReset.php" method="POST">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                    <label for="password">Nueva contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" name="reset_password">Restablecer contraseña</button>
                </form>
            </body>
            </html>
            <?php
        else:
            echo "El enlace es inválido o ha expirado.";
        endif;
    } else {
        echo "Acción no válida.";
    }
?>
