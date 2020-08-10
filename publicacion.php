<?php
include_once('inc/header.php')
?>
<?php
require_once('arraysproductos.php');
$id=$_GET['id'];
?>
<?php
  if (isset($_POST['comentar'])){
      $data=$_POST; 
      unset($data['comentar']);
      $data['fecha']=date('d/m/Y H:i:s');
      $indexComentario = date('YmdHis');
      $data['productos_id']=$id;
      
      if(file_exists('json/comentariosArray.json')){
        $comentarioJson=file_get_contents('json/comentariosArray.json');
        $comentarioArray=json_decode($comentarioJson,true);
      }
      else{
        $comentarioArray=array();
      }
      $comentarioArray[$indexComentario]=$data;
      $fp=fopen('json/comentariosArray.json','w');
      fwrite($fp,json_encode($comentarioArray));
      fclose($fp);
      
    }
?>
<?php
 $fileProductos= fopen('json/productosArray.json','r');
              
 $contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));
 
 fclose($fileProductos);

 $productosArray = json_decode($contenidoProductos,true);
foreach($productosArray as $indice=> $value){
  if($value['id_producto']==$id){
?>

  
  <main>
   <section> 
    <div class="container margencontainer ">
    <div class="row">
      <div class="col-md-5 col-sm-12 border border-dark rounded shadow p-3 mb-5 bg-white rounded">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <?php echo'<img class="d-block " src="img/'.$value['foto'].'.jpg" width="450" height="450" alt="'.$value['nombre'].'">'?>
            </div>
            <div class="carousel-item">
            <?php echo'<img class="d-block " src="img/'.$value['foto1'].'.jpg" width="450" height="450" alt="'.$value['nombre'].'">'?>
            </div>
            <div class="carousel-item">
            <?php echo'<img class="d-block " src="img/'.$value['foto2'].'.jpg" width="450" height="450" alt="'.$value['nombre'].'">'?>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    
        <div class="col-md col-sm-4">
        <h1><?php echo $value['nombre'] ?></h1>
        <br>
        <p>
         <?php echo $value['descripcion'] ?>
        </p>
        
       <div class="col-md-3 col-sm-4">
       
        <form action="miformulario.php" method="post" class="form-inline comprarcant">
        
        <!-- <div class="control-group">
            <select class= "span11" name= "rankeo">
              <option value="1"> * </option>   
              <option value="2"> ** </option>
              <option value="3"> *** </option>
              <option value="4"> **** </option>
              <option value="5"> ***** </option>
        -->
       
        </form>
        <br>
        
        <h2 class="comprar" id="precio"><?php echo $value['precio'] ?></h2>
        <a href="#"><img src="img/botoncomprar200x100.png"  id="botoncomprar" width="200" height="100" alt="Comprar"></a>
        </div>
      </div>
    </div>
  
  </div>
     <div class="container-fluid margenslide">
     <div class="row">
     <div class="col">
      <div class="d-sm-block d-md-block">
       <br>
       <h2>DESCRIPCIÓN</h2>
        <br>
        
        <p><strong> Nombre: </strong><?php echo $value ['nombre']?></p>
        <p><strong>Marca: </strong><?php echo $value ['marca']?></p>
        <p><strong>Modelo: </strong><?php echo $value ['modelo']?></p>
        
       
       </div>
       </div> 
       </div>
       </div>

       <div class="container-fluid margenslide">
     <div class="row">
     <div class="col">
      <div class="d-sm-block d-md-block">
       <br>
       <h2>COMENTARIOS</h2>
       
        <br>
        <div class="row">
        <div class="d-sm-block d-md-block">
        <form name="form1" method="post" action="">

          <label for="textarea"></label>
            <p>
            <input type="text" name="usuario" placeholder="ingresar usuario" cols="80" rows="1"  > </input>
            </p>
            <p> 
              <textarea name="comentario" cols="80" rows="5" id="textarea" placeholder="escribir comentario"> </textarea>
            </p>
            <p>
            
             <div class="form-group">
                <label for="exampleFormControlSelect1">Calificacion</label>
                <select class="form-control" name="rank"id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </p>
            <p>
              <input type="submit" name="comentar" value="comentar">

            </p>
        </form>
             <?php
              
              $fileComentarios= fopen('json/comentariosArray.json','r');
              
              $contenidoComentario= fread($fileComentarios, filesize('json/comentariosArray.json'));
              
              fclose($fileComentarios);

              $contenidoArray = json_decode($contenidoComentario,true);
              
              foreach($contenidoArray as $com){
                if ($id==$com['productos_id']){
                    echo '<div class="row border border rounded shadow p-3 mb-5 bg-white rounded "">';
                      echo '<span>Usuario: '.$com['usuario'].'';
                      echo '<br>Opinion:'.$com['comentario'].'';
                      echo '<br>Puntaje: '.$com['rank'].'';
                      echo '<br>Fecha: '.$com['fecha'].'<br></span>';
                    echo '</div>';
              }
              }
            
              ?>
 
        
       
       </div>
       </div> 
       </div>
       </div>
       <?php }} ?>
       </section>
  </main>
  
 <?php
 include_once('inc/footer.php')
 ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>