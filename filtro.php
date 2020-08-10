<?php
        $fileProductos= fopen('json/productosArray.json','r');
              
        $contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));
        
        fclose($fileProductos);
       
        $productosArray = json_decode($contenidoProductos,true);
            if(isset($_GET["variable1"])){
                $c=$_GET["variable1"];
            }
            if(isset($_GET["variable2"])){
                $m=$_GET["variable2"];
            }

              $muestra=array();
              $i=0;
              echo'<div class="row">';
              if(isset($c)&&isset($m)){
                     foreach($productosArray as $indice=> $value){
                         if(!in_array($value,$muestra)){
                         foreach($c as $categoria){
                             foreach($m as $marca){
                                if($value['tipo']==$categoria && $value['marca']==$marca){
                                    $muestra[$i]=$value;
                                    $i++;  
                                }
                             }
                         }
                        }
                    }
                }
                elseif(isset($c)){
                    foreach($productosArray as $indice=> $value){
                        if(!in_array($value,$muestra)){
                        foreach($c as $categoria){
                               if($value['tipo']==$categoria){
                                   $muestra[$i]=$value;
                                   $i++;  
                               }
                        }
                       }
                   }
                }
                elseif(isset($m)){
                    foreach($productosArray as $indice=> $value){
                        if(!in_array($value,$muestra)){
                            foreach($m as $marca){
                               if($value['marca']==$marca){
                                   $muestra[$i]=$value;
                                   $i++;  
                               }
                            }
                       }
                   }
                }
                    foreach($muestra as $producto=>$value){
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
                    echo'</div>';
                       
?>