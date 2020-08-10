<form action="publicaciones.php" method="get" class="border border rounded shadow p-3 mb-5 bg-white rounded">
<fieldset id="categoriamarcas">
<h1 class="fuente2">Categorias</h1>


<?php require_once('categorias.php');?>
 <?php 
   
    
 $i=0;
    foreach($arrayCate as $categorias=>$valor){
     
     echo'<div class="form-check">';
     echo'<input type="checkbox" class="form-check-input"  name="variable1[]" value="'.$valor.'">';
     echo'<label class="form-check-label" for="variable'.$i.'">'.$valor.'</label>';
     echo'</div>';
        $i++;
    }
 ?>
 <hr width=250 noshade>
 <?php require_once('marcas.php');?>
 <?php
 echo'<h1 class="fuente2">Marcas</h1>';

 $i=0;
foreach($arrayMa as $marcas=>$valo){
   
    echo'<div class="form-check">';
    echo'<input type="checkbox" class="form-check-input"  name="variable2[]" value="'.$valo.'">';
    echo'<label class="form-check-label" for="var'.$i.'">'.$valo.'</label>';
    echo'</div>';
    $i++;
}

echo'<button type="submit"  class="btn btn-danger">Buscar</button>';

echo'</form>';

echo'</div>';