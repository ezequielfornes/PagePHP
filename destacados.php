
<?php 

$fileProductos= fopen('json/productosArray.json','r');
              
$contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));
              
fclose($fileProductos);
             
$productosArray = json_decode($contenidoProductos,true);

echo '<div class="container-fluid publicaciones">';
echo'<div class="row">';
        foreach ($productosArray as $indice => $valor){
          if ($valor['destacado']){ 
            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
            echo '<a href="publicacion.php?id='.$valor['id_producto'].'">';
            echo '<h2 class="botonesbusquedad fuente ">'.$valor['nombre'].'</h2>';
            echo '<img src="img/'.$valor['foto'].'.jpg" class="funcionbr4" width= "200" height="150" alt="'.$valor['nombre'].'" />';
            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$valor['descripcionshort'].'</h3>';
            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$valor['precio'].'</h2>';
            echo '</a>';
            echo '</div>';
        }
    }
echo'</div></div>';
        ?>


