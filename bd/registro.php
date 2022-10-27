<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="author" content="Facundo Homola">
	<meta name="description" content="Narrativa Programacion III">
	<meta name="generator" content="Sitio web de Cursolandia">
	<meta name="keywords" content="Sitio web Cursolandia - Página principal">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"-->
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/registro.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>    
    <title>Cursolandia - Registro</title>
</head>
<body>

    <header>
        <a class="text-decoration-none" href="./../index.php"><h2 class="m-4 text-center p-2">Cursolandia</h2></a> 
    </header>
    
    <h4>Registrarse</h4>
    <span class="m-2">o <a href="sesion.php">Inicia Sesión</a></span>
    
    <p>Complete los campos solicitados</p>
    <form id="formulario" action="registrar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre y Apellido">
        <input type="number" name="edad" id="edad" placeholder="Edad">
        <p>Intereses</p>
        <input type="checkbox" name="intereses[]" value="Deportes"> Deportes 
        <input type="checkbox" name="intereses[]" value="Cine"> Cine
        <input type="checkbox" name="intereses[]" value="Lectura"> Lectura
        <input type="checkbox" name="intereses[]" value="Videojuegos"> Videojuegos <br>
        <input type="checkbox" name="intereses[]" value="Arte"> Arte
        <input type="checkbox" name="intereses[]" value="Música"> Música
        <input type="checkbox" name="intereses[]" value="Otros"> Otros
        <textarea name="descripcion" id="descripcion" cols="22" rows="10" placeholder="Cuenta algo sobre ti..."></textarea>
        <input type="text" name="email" placeholder="Correo">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="password" name="confirm_password" placeholder="Confirme su contraseña">
        <input type="submit" name="submit" id="submit" value="Registrarme">
    </form>
    
    <script src="./../js/bootstrap.bundle.min.js"></script>
</body>
</html>