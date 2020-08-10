<?php 
$fileProductos= fopen('json/productosArray.json','r');
              
$contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));

fclose($fileProductos);

$productosArray = json_decode($contenidoProductos,true);


$arrayCategorias=array();
$i=0;
foreach($productosArray as $producto=>$value){
        if(!in_array($value['tipo'],$arrayCategorias)){
                $arrayCategorias[$i]=$value['tipo'];
                $i++;  
        }
}
$arrayCate=$arrayCategorias;
$fp= fopen('json/categoriasArray.json','w');

fwrite($fp,json_encode($arrayCategorias));

fclose($fp);

?>

