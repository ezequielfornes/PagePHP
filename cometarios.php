
<?php

$fileComentarios= fopen('comentariosArray.json','r');

$contenidoComentario= fread($fileComentarios, filesize('comentariosArray.json'));

fclose($fileComentarios);

$contenidoArray = json_decode($contenidoComentario,true);

foreach($contenidoArray as $com){
  if ($id==$com['productos_id']){
      echo '<div class="row">';
        echo '<p>'$com['usuario']'</p>';
        echo '<p>'$com['comentario']'</p>';
        echo '<p>'$com['rank']'</p>';
        echo '<p>'$com['fecha']'</p><br>';
      echo '</div>';
}
}
?>