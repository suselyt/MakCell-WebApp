    <?php
            require 'conexion.php';
            require 'vendor/phpmailer/src/Exception.php';
            require 'vendor/phpmailer/src/PHPMailer.php';
            require 'vendor/phpmailer/src/SMTP.php';


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];

                // Verificar si el correo existe
                $consultaId = "SELECT id_user FROM users WHERE email = ?";
                $queryId = $conex->prepare($consultaId);
                $queryId->bind_param('s', $email);
                $queryId->execute();
                $queryId->bind_result($user); 
                $queryId->fetch();
                $queryId->free_result();

               // $query = $conex->prepare("SELECT id_user FROM users WHERE email = ?");
                //$query->execute([$email]);
                //$query->bind_result($user); 

               // $user = $query->fetch();

                if (isset($user)) {
                    // Generar token único
                    $token = bin2hex(random_bytes(50));
                    $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

                    // Guardar el token y expiración
                    $insertQuery = $conex->prepare("INSERT INTO password_resets (user_id, token, expires_at) VALUES (?, ?, ?)");
                    $insertQuery->execute([$user, $token, $expiry]);

                    // Enviar el correo con el enlace
                        //$resetLink = "http://localhost:8080/MakCell/PasswordReset.php";
                        //mail($email, "Restablecer contraseña", "Haz clic aquí para restablecer tu contraseña: $resetLink");

                    //Correo con phpmailer
                    $mail = new PHPMailer\PHPMailer\PHPMailer();
                    $mail->isSMTP();  // Habilitar el envío SMTP
                    $mail->Host = 'smtp.gmail.com';  // Usar Gmail como servidor SMTP (cambia esto según tu servidor de correo)
                    $mail->SMTPAuth = true;
                    $mail->Username = 'suselytv1@gmail.com';  // Tu correo
                    $mail->Password = 'fdqs ffsf atou uilb';  // Tu contraseña o app password
                    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;  

                    $mail->setFrom('suselytv1@gmail.com', 'MakCell'); // Asegúrate de que sea el mismo correo de `Username`
                    $mail->addAddress($email);
                    $mail->isHTML(true);
                    //Contenido de correo
                    $mail->Subject = 'Restablecer contraseña';
                    $mail->Body    = "Haz clic aquí para restablecer tu contraseña: <a href='http://localhost:8080/MakCell/PasswordReset.php?token=$token'>Restablecer contraseña</a>";
                    $mail->send();
                }
                
                echo "Si el correo existe en nuestro sistema, recibirás un enlace para restablecer tu contraseña.";
            } 
            /*
            if (!$mail->send()) {
                echo "Error al enviar el correo: " . $mail->ErrorInfo;
            } else {
                echo "Correo enviado correctamente";
            }
            */

        $queryId->close(); 
    ?>