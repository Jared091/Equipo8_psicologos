<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro de clientes</title>
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
     <div class="container card" style="width: 200rem; height: 20rem;">
    <form class="" action="add.php">
    <div class="row">
            <div class="col col-xs col-md">
                <label for="">ID_Cita </label>
                <input required class="form-control" type="number" name="ID_Cita" value="" >
            </div>
    </div>
        <div class="row">
            <div class="col col-xs col-md">
                <label for="">Fecha de cita </label>
                <input required class="form-control" type="date" name="Fecha_cita" value="" >
            </div>
            <div class="col col-xs col-md">
                <label for="">Hora inicio</label>
                <input required class="form-control" type="time" name="Hora_inicio" value="">
            </div>
            <div class="col col-xs col-md">
                <label for="">Hora final</label>
                <input required class="form-control" type="time" name="Hora_final" value="">
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