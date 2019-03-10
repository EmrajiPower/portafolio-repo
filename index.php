<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Manu</title>
  </head>
  <body>
    <!-- encabezado -->
    <header class="info-container">
      <img src="" alt="" width="60" height="60">
      <div class="lista-container">
        <ol>
          <li>
            <a href="#">Proyectos</a>
          </li>
          <li>
            <a href="#">Soporte</a>
          </li>
          <li>
            <a href="#">Preguntas<br>Frecuentes</a>
          </li>
        </ol>
      </div>
    </header>
    <!-- promotores -->
    <section class="info-container">

    </section>
    <!-- contenido1 -->
    <section class="info-container">

    </section>
    <!-- contenido2 -->
    <section class="info-container">

    </section>
    <!-- recomendaciones1 -->
    <!-- banner de trabajo -->
    <!-- recomendaciones2 -->
    <!-- soporte -->
    <section class="formulario-container">
      <form class="formulario-soporte" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <div class="columna-1">
        <label for="nombre-persona">Nombre</label>
        <input type="text" name="nombre-persona" required placeholder="Tu nombre">
        <br>
        <label for="nombre-empresa">Nombre de tu empresa</label>
        <input type="text" name="nombre-empresa" required placeholder="Tu empresa">
        <br>
        <label for="nombre-queja">Tipo de queja</label>
        <select name="nombre-queja">
          <option value="" selected disabled hidden>Seleccione una</option>
          <option value="reclamo">Reclamos</option>
          <option value="fallo">Fallos</option>
          <option value="mantenimiento">Mantenimiento</option>
        </select>
      </div>
      <div class="columna-2">
        <label for="comentarios">Comentarios</label>
        <br>
        <textarea name="comentarios" rows="10" cols="80"></textarea>
        <input type="submit" name="btn-soporte" value="Enviar">
      </div>
        <?php
          if (isset($_POST['btn-soporte'])) {
            include("informacion.php");
            $np = $_POST['nombre-persona'];
            $ne = $_POST['nombre-empresa'];
            $tq = $_POST['nombre-queja'];
            $com = $_POST['comentarios'];

            $sql = "INSERT INTO soporte (nombre_persona,nombre_empresa,tipo_queja,comentario)
            VALUES ('$np','$ne','$tq','$com')";

            $conexion->query($sql);
            echo "<p>Se guardó la Información 🌟</p>";
            // Cerrar Conexión
            // mysql_close($conexion);
          }
         ?>
      </form>
    </section>
    <!-- link de invitacion -->
    <!-- precios -->
    <!-- preguntas frecuentes -->
    <!-- formulario de subscripción -->
    <!-- pie de pagina -->
  </body>
</html>
