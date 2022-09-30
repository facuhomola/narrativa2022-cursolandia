<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Facundo Homola">
	  <meta name="description" content="Narrativa Programacion III">
	  <meta name="generator" content="Sitio web de Cursolandia">
	  <meta name="keywords" content="Sitio web Cursolandia - Página principal">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/style.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <title>Cursolandia - Leslie Gomez</title>
</head>
<body>
    
    <!--Cabecera-->
    <header>
        <?php
            require('C:\xampp\htdocs\progIII-main\narrativa2022-cursolandia\header.php');
        ?>
    </header>
    <!--Fin cabecera-->

    <!--Perfil-->
    <div class="container-lg">
        <div class="row min-vh-95 mt-2 mb-2 align-items-center align-content-center">
          <div class="col-md-3">
            <div class="text-center">
              <img src="./imagenes/perfil.jpg" class="rounded-circule mw-50" alt="imagen perfil" style="border-radius: 50%;" height="240px">
            </div>
          </div>
          <div class="col-md-9 mt-md-0">
            <div class="home-text">
              <h4 class="text-uppercase fs-4 fw-bold">Programadora</h4>
              <h2 class="fs-4">Leslie Gomez</h2>
              <p class="mt-4 text-muted">Hola, un cordial saludo mi nombre es Leslie Gomez (27 años - Programadora).
                - Soy creadora del canal de youtube Programación ATS que cuenta actualmente con más de 150 mil suscriptores.
                - En la plataforma de Udemy tengo publicado 6 cursos con más de 30 mil estudiantes y más de 5 mil reseñas positivas.
           </div>          
          </div>
        </div>
        <div class="container">
                <h3 class="fs-3 font-weight-bold">Mis Cursos</h3>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                  <img class="imagenes-card card-img-top" src="./imagenes/cursoUser1.jpg" alt="Card image cap" style="max-height: 190px; max-width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Programación en Python</h5>
                        <a href="" class="btn btn-primary">Ir al curso</a>
                    </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                  <img class="imagenes-card card-img-top" src="./imagenes/curso2.jpg" alt="Card image cap" style="max-height: 190px; max-width: 100%;">
                  <div class="card-body">
                      <h5 class="card-title">Programación en Java</h5>
                      <a href="" class="btn btn-primary">Ir al curso</a>
                  </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="./imagenes/curso3.png" alt="Card image cap" style="max-height: 190px; max-width: 100%;">
                  <div class="card-body">
                      <h5 class="card-title">Programación en C#</h5>
                      <a href="" class="btn btn-primary">Ir al curso</a>
                  </div>
            </div>
          </div>
        </div>
    </div>
    <!--Fin perfil-->

    <!--Footer-->
     <footer>
        <?php
            require('C:\xampp\htdocs\progIII-main\narrativa2022-cursolandia\footer.php');
        ?>
    </footer>
    <!--Fin Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>