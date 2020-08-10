<?php
include_once('inc/header.php')
?>   
   
<main>
   <section>
    
    <div class="container-fluid">
    <div class="row">
    
      <div class="col-4 bg-danger d-none d-sm-block"></div>
       
       <div class="col">
      <h1 class="centro">Registro de nuevo usuario</h1>  

    <form action="#" method="get" class="centro">
        <fieldset>
            Nombre:
            <input type="text" name="nombre" class="funcionbr">
            <br>
            
            Apellido:
            <input type="text" name="apellido" class="funcionbr">
            <br>
            
            Fecha de nacimiento:
            <input type="text" name="fecha de nacimiento" class="funcionbr"> 
            <br>
            
            Email:
            <input type="email" name="correo" class="funcionbr"> 
            <br>
           
            Contraseña:
            <input type="password" name="contraseña" class="funcionbr funcionbr2">
            <br>
            
            Genero:
            <br>
            <input type="radio" name="genero" value="femenino" checked> Femenino
             <br>
              <input type="radio" name="genero" value="masculino"> Masculino
             <br>
              <input type="radio" name="genero" value="Otro"> Otro
             <br>
              <input type="radio" name="genero" value="noresponde" class="funcionbr2"> No contesta
             <br>
             
            Terminos y servicios:
            <br>
            
            <input type="checkbox" name="acepta" value="Si acepto" required> Acepto los terminos y servicios
            <br>
            
        <input type="submit" value="Registrar" class="funcionbr">
        </fieldset>
        </form>
    </div>
    
    
    <div class="col-4 bg-danger sinpadding d-none d-sm-block">  
             </div>

    
            </div>
        </div>
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