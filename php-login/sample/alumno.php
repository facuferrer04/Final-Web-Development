<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">



  <title>Title page</title>  

<link href="./main.82cfd66e.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.html" class="navbar-brand">Mashup Template</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
          <img class="img-responsive site-logo" alt="" src="./assets/images/mashup-logo.svg">
            La cocina donde cabemos todos.
          </a>
        <p> Un mundo de sabores a un clic de distancia. Calidad y amor en cada cucharada.</p>
        
      </div>
      <ul class="nav">
      <li><a href="./index.html" title="">Nuestras recetas</a></li>
        <li><a href="./services.html" title="">Novedades</a></li>
        <li><a href="alumno.php">Sugerencias de los usuarios</a></li>
        <li></li><a href="logout.php">Logout</a><li>
      </ul>

      <nav class="nav-footer">
        <p class="nav-footer-social-buttons">
          <a class="fa-icon" href="https://www.instagram.com/" title="">
            <i class="fa fa-instagram"></i>
          </a>
          <a class="fa-icon" href="https://dribbble.com/" title="">
            <i class="fa fa-dribbble"></i>
          </a>
          <a class="fa-icon" href="https://twitter.com/" title="">
            <i class="fa fa-twitter"></i>
          </a>
          <p>© Final | Web Development 
          2022 </a>
      </nav>  
    </div> 
  </nav>
</header>
<main class="" id="main-collapse">


<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                <div class="form-group">
                  
                                    <input id="cod_usuario" class="form-control mb-3" name="cod_usuario" placeholder="mail" title="Es obligatorio que ingreses tu mail" required>
                                    </div>
                                    <div class="form-group">
                                    <input id="nombre" class="form-control mb-3" name="nombre" placeholder="nombre de la receta" title="Es obligatorio que ingreses el nombre de la receta" required>
                                    </div>
                                    <div class="form-group">
                                    <input id="ingredientes" class="form-control mb-3" name="ingredientes" placeholder="ingredientes" title="Es obligatorio que ingreses los ingredientes" required>
                                    </div>
                                    <div class="form-group">
                                    <input id="instrucciones" class="form-control mb-3" name="instrucciones" placeholder="instrucciones" title="Es obligatorio que ingreses las instrucciones" required>
                                    </div>
              <button type="submit" class="btn btn-primary btn-lg">Send</button>
              
            </div>

            <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>mail</th>
                                        <th>nombre</th>
                                        <th>ingredientes</th>
                                        <th>instrucciones</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_usuario']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['ingredientes']?></th>
                                                <th><?php  echo $row['instrucciones']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_usuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="procesar_eliminar.php?id=<?php echo $row['cod_usuario'];?> "class="table__item__link">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <script src="confirmacion.js"></script>
    </body>
</html>

