<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro de psicologos</title>
  </head>  
<style>
    body{
        background-color: red;
    }
</style>
  <body>
    <h1></h1>
    <h1></h1>
    <h1>Registro</h1>
     <div class="container card" style="width: 200rem; height: 30rem;">
    <form class="" action="add.php">
    <div class="row">    
            <div class="col col-xs col-md">
                <label for="">ID</label>
                <input required class="form-control" type="text" name="ID_Usuario" value="" >
            </div>
            <div class="col col-xs col-md">
                <label for="">ID_Tu</label>
                <input required class="form-control" type="text" name="ID_Tu1" value="" >
            </div> 
    </div>   
    <div class="row">    
            <div class="col col-xs col-md">
                <label for="">Nombre </label>
                <input required class="form-control" type="text" name="nombre" value="" >
            </div>
            <div class="col col-xs col-md">
                <label for="">Apellidos:</label>
                <input required class="form-control" type="text" name="Apellidos" value="">
            </div>
            <div class="col col-xs col-md">
            <label for="">Genero</label>
            <select class="form-select" name="Genero" id="id_genero">
                <option value="volvo">Masculino</option>
                <option value="saab">Femenino</option> 
            </select>
            </div>   
        </div>
<!--    <br>
        <div class="row">
        <label for="">Direccion</label>
        <br>
            <div class="col col-xs col-md">
            <label for="">Calle</label>
                <input required class="form-control" type="text" name="Calle" value="" >
            </div>
            <div class="col col-xs col-md">
                <label for="">Colonia</label>
                <input required class="form-control" type="text" name="Colonia" value="">
            </div>
        </div>
        <div class="row"> 
           <div class="col col-xs col-md">
                <label for="">No_interior</label>
                <input required class="form-control" type="text" name="No_interior" value="" >
            </div> 
            <div class="col col-xs col-md">
                <label for="">No_exterior</label>
                <input required class="form-control" type="text" name="No_exterior" value="" >
            </div> 
        </div>
-->
        <div class="row">
            <div class="col col-xs col-md">
                <label for="">Ingresa tu correo electronico</label>
                <input required class="form-control" type="text" name="correo" value="" >
            </div> 
            <div class="col col-xs col-md">
                <label for="">Ingresa tu contraseña</label>
                <input required class="form-control" type="text" name="contraseña" value="" >
            </div> 
            <div class="col col-xs col-md">
                <label for="">Ingresa tu telefono</label>
                <input required class="form-control" type="text" name="telefono" value="" >
            </div> 
        </div>         
        <div class="row">
            <div class="col col-xs col-md">
                <label for="">Estados</label> <select class="form-select" name="Genero" id="id_genero">
                <option value="volvo">Estado de México</option>
                <option value="saab">Veracruz</option> 
                <option value="volvo">Oaxaca</option>
                <option value="volvo">Hidalgo</option>
            </select>
            </div> 
            <div class="col col-xs col-md">
                <label for="">Ingresa tu direccion</label>
                <input required class="form-control" type="text" name="direccion" value="" >
            </div> 
        </div> 
        <br>
        <div class="row">
            <div class="col">
                <input class="btn btn-primary" type="submit" value="GUARDAR">
            </div>
        </div>
    </form>
</div>
 </body>
</html>