<?php 
$fileProductos= fopen('json/productosArray.json','r');
              
$contenidoProductos= fread($fileProductos, filesize('json/productosArray.json'));

fclose($fileProductos);

$productosArray = json_decode($contenidoProductos,true);


$arrayMarca=array();
$i=0;
foreach($productosArray as $producto=>$value){
        if(!in_array($value['marca'],$arrayMarca)){
                $arrayMarca[$i]=$value['marca'];
                $i++;  
        }
}
   $arrayMa=$arrayMarca;
$fp= fopen('json/marcasArray.json','w');

fwrite($fp,json_encode($arrayMarca));

fclose($fp);

?>
