<?php
require_once('inc/header.php')
?>
<?php
require_once('arraysproductos.php');
?>

  <!-- EMPIEZA EL CARROUSEL -->
  <main class="">
    <div id="carrusel" class="carousel slide" data-ride="carousel">
       
      <!-- ORDEN DE IMAGENES -->
      <ul class="carousel-indicators">
        <li data-target="#carrusel" data-slide-to="0" class="active"></li>
        <li data-target="#carrusel" data-slide-to="1"></li>
        <li data-target="#carrusel" data-slide-to="2"></li>
      </ul>

      <!-- IMAGENES -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner1.jpg"  width= "2000" height="520" alt="propaganda" class="d-none d-sm-none d-md-block" >
          <img src="img/banne1mobile.jpg"  width= "527" height="461" alt="propaganda" class="w-100 d-block d-sm-block d-md-none" >
        </div>
        <div class="carousel-item">
          <img src="img/banner2.png"  width= "2000" height="520" alt="segunda propaganda" class="d-none d-sm-none d-md-block" >
          <img src="img/banne2mobile.jpg"  width= "527" height="461" alt="propaganda" class="w-100 d-block d-sm-block d-md-none" >
        </div>
        <div class="carousel-item">
          <img src="img/banner3.jpg" width= "1930" height="520" alt="tercer propaganda" class="d-none d-sm-none d-md-block">
          <img src="img/banne3mobile.jpg"  width= "527" height="461" alt="propaganda" class="w-100 d-block d-sm-block d-md-none" >
        </div>
      </div>

      <!-- COMANDOS DE CONTROL -->
      <a class="carousel-control-prev" href="#carrusel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#carrusel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>


    </div>
    <!-- TERMINA EL CARROUSEL -->


<?php
require_once('inc/body.php')
?>

</main>


<?php
require_once ('inc/footer.php')
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>