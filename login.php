<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registrar</title>
</head>
<body>
        <?php             
                $email = $_POST["correo"];
                $pass = $_POST["password"];
                
                $val_email = false;
                $val_pass = false;
                
                if(preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/",$email)) $val_email=true;
                if(preg_match("/^[a-zA-Z\ñ\Ñ0-9\_\-\.\*\+]{6,30}$/",$pass)) $val_pass=true;

                echo 'email '.$val_email.'  '.$email;
                echo 'contraseña '.$val_pass.'  '.$pass;
                
                if ($val_email && $val_pass) {
                
                    include "conexion.php";
                    if ($con) {

                        $sql= "select * from clientes where email ='".$email."' and pass= sha2('".$pass."',256)";            
                        if($resultado=$connection->query($sql)){
                            if ($row=$resultado->fetch_assoc()) {
                                echo "<p>Inicio de Secion Exitoso</p>";
                                echo "<a href='index.php'>Volver</a>";
                            }
                            else{
                                echo "<p>El usuario y contraseña no coinciden</p>";
                                echo "<a href='login.php'>Volver</a>";
                            }
                        }
                        else{
                            echo "error de comunicacion";
                        }
                        $connection->close();  
                    }
                }
                else{
                    echo "<p>Error en ingreso de datos</p>";
                    echo "<a href='Registro_cliente.html'>Volver</a>";
                }
        ?>
    </div>
</body>
</html>