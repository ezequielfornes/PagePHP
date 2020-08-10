
<?php
              
              $fileProductos= fopen('json/productosArray.json','r');
              
              $contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));
              
              fclose($fileProductos);
             
              $productosArray = json_decode($contenidoProductos,true);
              $i=0;
              $n=10;
              
              $p=$_GET['variable'];
              //$n=$_GET['cantidad'];
              echo'<div class="row">';
                     foreach($productosArray as $indice=> $value){
                        if($i>=$n){
                            return;
                        }
                        if($value['tipo']==$p){?><!--el "tipo" pertenece a categorias--><?php
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded" >';
                                   echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                                   echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                                   echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                                   echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                                   echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                                   echo '</a>';
                                   echo '</div>';
                                   $i++;          
                        }
                        if($value['tipo2']==$p){
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded" >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            
                        }
                        if($value['marca']==$p){
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded" >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente funcionbr2">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            
                        }
                        

                     }
              echo'</div>';
?>



