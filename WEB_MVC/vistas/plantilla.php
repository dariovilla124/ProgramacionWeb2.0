<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC_PROJ_INICIO</title>
    <link rel = "stylesheet" href="vistas/paginas/style.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e632f1f723.js" crosssrigin="anonymous"> </script>
</head>

<body>

<div class="container">
<div class="row">
<div class="col align-self-start">
<div class="jumbotron text-center" style="margin-bottom:0">
        <h1>MVC PROYECTO</h1>
</div>

<!-- BOTONES-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="menu" id="collapsibleNavbar">
        <ul class="navbar-nav">

        <?php if(isset($_GET["pagina"])): ?>

            <?php if ($_GET["pagina"] == "registro"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=registro">Registro</a>
            </li>
            <?php endif ?>

            <?php if ($_GET["pagina"] == "ingreso"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
            </li>
            <?php endif ?>

            <?php if ($_GET["pagina"] == "inicio"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>
            <?php endif ?>

            <?php if ($_GET["pagina"] == "salir"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
            <?php endif ?>
        
        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=salir">Salir</a>
            </li>  


        <?php endif ?>

        </ul>
    </div>  
</nav>
</div>
</div>
<div class="row">
<div class="col align-self-start bg-light">
<div class="container">
            <div class="container2">
                <?php 
                if(isset($_GET["pagina"])){

                    if($_GET["pagina"]== "registro"
                    || $_GET["pagina"]== "ingreso" 
                    || $_GET["pagina"]== "inicio"
                    || $_GET["pagina"]== "editar" 
                    || $_GET["pagina"]== "salir"){

                        include "paginas/".$_GET["pagina"].".php";
                    }else{
                        include "paginas/error404.php";
                    }

                }else{
                    include "paginas/registro.php";
                }
                ?>
            </div>
        </div>


</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
<div class="row">
<div class="col align-self-start text-center">

    <p>
        <br>Herramientas usadas: HTML, CSS, JS y PHP. <br>
        Docente: Jathinson Meneses <br>
</div>
<div class="col align-self-center text-center">

    <p>
        Estudiantes:
        <br> Jefersson Alejandro Galeano Hernandez 
        <br> Dario Villamizar<br>
        Grupo: J1 2021-2 <br></p>
</div>
<div class="col align-self-end text-center">

    <p>
        <p class="parrafo uis">UNIVERSIDAD INDUSTRIAL DE SANTANDER </p>
</div>
</div>
</div>
</div>

</body>

</html>

