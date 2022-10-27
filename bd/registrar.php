<?php

include 'cn.php';

//almacenar valores
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$intereses = $_POST['intereses'];
if (is_array($intereses)) {
    $intereses = implode("-", $intereses);
}else{
    $intereses = "";
}
$descripcion = $_POST['descripcion'];
$correo = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512', $password);
$confirm_password = $_POST['confirm_password'];

//Consulta para insertar un nuevo usuario a la BD
$insertar = "INSERT INTO Usuarios(Nombre, Edad, Intereses, Descripcion, Correo, Contrasenia) VALUES('$nombre', '$edad', '$intereses', '$descripcion', '$correo', '$password')";

//Ejecutar consulta
$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Ocurrio un error en el registro!");
}else{
    echo "Se registro el nuevo usuario exitosamente <br>";
    echo "<a href=./../index.php type=button class=btn>Volver al Inicio</a> <br>";
    echo "<a href=sesion.php type=button class=btn>Iniciar Sesión</a>";

}


?>