<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="author" content="Facundo Homola">
	<meta name="description" content="Narrativa Programacion III">
	<meta name="generator" content="Sitio web de Cursolandia">
	<meta name="keywords" content="Sitio web Cursolandia - Página principal">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link href="./../../css/bootstrap.min.css" rel="stylesheet">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"-->
    <link rel="stylesheet" href="./../../css/style.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <title>Cursolandia - Usuario 1</title>
</head>
<body>
    <!--Cabecera-->
    <header>
        <?php
            require('./../../header.php');
        ?>
    </header>
    <!--Fin cabecera-->
        
    <div class="container-lg pb-4 pt-4">
        <div class="row">
            <div class="col-12 col-md-9 col-lg-9 col-sm-12 mt-2 mb-2">
                <div class="container p-3 border border-primary">
                    <h2>Curso de Programación en Python</h2>
                    <p>En este curso aprenderás desde las bases de Python hacia temas más avanzados del lenguaje</p>
                    <p class="text-muted">Duración: 6 meses</p>
                    <a href="perfil.php">Creado por Leslie Gomez</a>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-12 mt-2 mb-2">
                <div class="container p-3 border border-primary">
                    <h4>Este curso incluye</h4>
                    <ul>
                        <li>Videos tutoriales</li>
                        <li>Acceso permanente</li>
                        <li>Acceso en dispositivos moviles</li>
                        <li>Certificado de finalización</li>
                    </ul>
                    <button type="button" class="btn btn-secondary">Registrarse al curso</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-9 col-sm-12 col-lg-9 p-1">
                <h4 class="m-2 p-1">Lo que aprenderas</h4>
                <ul class="list-group">
                    <li class="list-group-item">Aprenderás sobre las estructuras de control en Python (condicionale, bucles)</li>
                    <li class="list-group-item">Uso de colecciones en Python</li>
                    <li class="list-group-item">Programación Orientada a Objetos</li>
                    <li class="list-group-item">Interfaz Gráfica</li>
                    <li class="list-group-item">Aplicaciones</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-9 col-sm-12 col-lg-9 p-1">
                <h4 class="m-2 p-1">Contenido del curso</h4>
                <p class="font-weight-light">7 secciones • 74 clases • 9 h 17 m de duración total</p>
                <ul class="list-group">
                    <li class="list-group-item">Variables</li>
                    <li class="list-group-item">Condicionales</li>
                    <li class="list-group-item">Funciones</li>
                    <li class="list-group-item">Objetos</li>
                    <li class="list-group-item">Excepciones</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-9 col-sm-12 col-lg-9 p-1">
                <h4 class="m-2 p-1">Requisitos</h4>
                <ul>
                    <li>Para comenzar con este curso solo hace falta las ganas de aprender algo nuevo</li>
                </ul>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer>
        <?php
            require('./../../footer.php');
        ?>
    </footer>
    <!--Fin Footer-->

    <script src="./../../js/bootstrap.bundle.min.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script-->
</body>
</html>