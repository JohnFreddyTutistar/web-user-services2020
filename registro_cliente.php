<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registrar</title>
</head>
<body>
        <?php             
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $direccion = $_POST["direccion"];
                $telefono = $_POST["telefono"];
                $email = $_POST["correo"];
                $pass = $_POST["password"];
                
                
            
                $val_nombre = false;
                $val_apellido = false;
                $val_direccion = false;
                $val_telefono =false;
                $val_email = false;
                $val_pass = false;
                
                if(preg_match("/^[a-zA-Z\ñ\Ñ]{3,30}$/",$nombre)) $val_nombre=true;
                if(preg_match("/^[a-zA-Z\ñ\Ñ]{3,30}$/",$apellido)) $val_apellido=true;
                if(preg_match("/^[a-zA-Z\ñ\Ñ0-9\_\-\.\*\+]{6,30}$/",$direccion)) $val_direccion=true;
                if(preg_match("/^[0-9]{7,10}$/",$telefono)) $val_telefono=true;
                if(preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/",$email)) $val_email=true;
                if(preg_match("/^[a-zA-Z\ñ\Ñ0-9\_\-\.\*\+]{6,30}$/",$pass)) $val_pass=true;

                echo 'nombre '.$val_nombre;
                echo 'apellido'. $val_apellido;
                echo 'direccion '.$val_direccion;
                echo 'telefono '.$val_telefono;
                echo 'email '.$val_email.'  '.$email;
                echo 'contraseña '.$val_pass.'  '.$pass;
                
                if ($val_nombre && $val_apellido && $val_direccion && $val_telefono && $val_email && $val_pass) {
                
                    include "conexion.php";
                    if ($con) {

                        $sql="insert into clientes VALUES ('".$nombre."','".$apellido."','".$direccion."','".$telefono."','".$email."',sha2('".$pass."',256))";
                                    
                        if ($connection->query($sql)) {
                            echo "<p>Usuario Creado</p>";
                            echo "<a href='index.php'>Volver</a>";
                        }else{
                            echo "<p>Error en consulta</p>";
                            echo "<a href='Registro_cliente.html'>Volverinterno</a>";
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