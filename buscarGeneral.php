<?php
              
              $i=0;
              $n=10;
              
              $p=strtolower($_GET['palabra']);
              $fileProductos= fopen('json/productosArray.json','r');
              
              $contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));
              
              fclose($fileProductos);
             
              $productosArray = json_decode($contenidoProductos,true);
              //$n=$_GET['cantidad'];
              echo'<div class="row">';
                     foreach($productosArray as $indice=> $value){
                        if(empty($p)){
                            echo 'no se encontraron resultados';
                            return;
                        }
                        if($i>=$n){
                            return;
                        }
                        foreach($value as $valor=> $a){
                            $pos = strpos(strtolower($a),$p);
                            if($pos===false){
                            }else{
                                echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
                                echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                                echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                                echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                                echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                                echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                                echo '</a>';
                                echo '</div>';
                                $i++; 
                                break;   
                            }
                        }?>
       <!--                 switch($p){
                        case strtolower($value['nombre']):
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            break;
                        
                        case strtolower($value['tipo']):
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            break;
                        case strtolower($value['tipo2']):
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            break;
                        case strtolower($value['marca']):
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                         echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            break;
                        case strtolower($value['modelo']):
                                   
                            echo '<div class="col border border rounded shadow p-3 mb-5 bg-white rounded " >';
                            echo '<a href="publicacion.php?id='.$value['id_producto'].'">';
                            echo '<h2 class="botonesbusquedad fuente">'.$value['nombre'].'</h2>';
                            echo '<img src="img/'.$value['foto'].'.jpg" class="funcionbr4" width= "300" height="250" alt="'.$value['nombre']. '" />';
                            echo '<h3 class="botonesbusquedad fuente2 funcionbr4">'.$value['descripcionshort'].'</h3>';
                            echo '<h2 class="botonesbusquedad fuente funcionbr3">'.$value['precio'].'</h2>';
                            echo '</a>';
                            echo '</div>';
                            $i++;   
                            break;
                        }
--><?php
                     }
              echo'</div>';
?>