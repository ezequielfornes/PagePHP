<?php
include_once('inc/header.php')
?>

   
<main>
   <section> 
     
    <div class="container-fluid">
    <div class="row">
    
      <div class="col-4 bg-danger d-none d-sm-block"></div>
       
       <div class="col">
      <h1 class="centro">Contacto</h1>  
    <form action="#" method="get" class="centro">
        <fieldset>
            <legend>Datos del comprador:</legend>
            Nombre:
            <input type="text" name="nombre" >
            
            <br>
            Apellido:
            <input type="text" name="apellido" class="funcionbr">
            
            <br>
            Area con la cual desea realizar la Consulta:
            <input type="text" name="fecha" class="funcionbr"> 
            
            <br>
            Email:
            <input type="email" name="correo" class="funcionbr"> 
            
            <br>
            Telefono: (ej: 011-4905-0565)
            <input type="tel" name="telefono" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" class="funcionbr funcionbr2">
            
            <br>
            Genero:
            <br>
            <input type="radio" name="genero" value="femenino" checked > Femenino
             <br>
              <input type="radio" name="genero" value="masculino" > Masculino
             <br>
              <input type="radio" name="genero" value="Otro"> Otro
             <br>
              <input type="radio" name="genero" value="noresponde" class="funcionbr2"> No contesta
             
             <br>
            Terminos y servicios:
            
            <br>
            <input type="checkbox" name="acepta" value="Si acepto" required class="funcionbr"> Acepto los terminos y servicios
            
            <br>
            
            <h3 class="funcionbr"> Consulta:</h3>
            <textarea rows="10" cols="30" name="comentarios" >
            </textarea>
            
            <br>
        <input type="submit" value="Enviar">
        </fieldset>
        </form>
    </div>
    
    
    <div class="col-4 bg-danger d-none d-sm-block">  
</div>

    
</div>
</div>


    </section>
</main>


<?php
include_once ('inc/footer.php')
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>