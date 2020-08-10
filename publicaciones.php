<?php
include_once('inc/header.php')
?>

    <main>
       <section> 
          

          <div class="container-fluid">
      <div class="row">
        <div class="col-2">      
<!-- SECCION Filtro -->

  <?php require_once('categoriasYMarcas.php'); ?>
  
<div class="col-1"></div>
<!-- SECCION PRODUCTOS NOVEDADES -->       
<div class="col-8">
<div class="container-fluid publicaciones ">
          <h1 class="centro margen">Publicaciones</h1>
              <?php
              if(isset($_GET['variable'])){
                require_once('buscarProductos.php');
                }
              elseif(isset($_GET['palabra'])){
                require_once('buscarGeneral.php');
              }
              elseif(isset($_GET['variable1']) || isset($_GET['variable2'])){
                require_once('filtro.php');
              }
              else{
                require_once('mostrarProductos.php');
              }
             ?>
         </div>
         </div>
    </div>
</div>  
    </section>
</main>
    
<div class="container-fluid">
    <div class="col fotterpadding">
</div> 
</div>       
<?php
include_once('inc/footer.php')
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
