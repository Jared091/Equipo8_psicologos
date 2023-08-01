<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tipo de usuarios</title>
  </head>  
<style>
    body{
        background-color: blue;
    }
</style>
  <body>
    <h1></h1>
    <h1></h1>
     <div class="container card" style="width: 100rem; height: 10rem;">
    <form class="" action="add.php">
        <div class="row">
            <div class="col col-xs col-md">
            <label for="">¿Que tipo de usuario eres? </label>
            <select class="form-select" name="tipo_de_usuarios" id="ID_Tu">
                <option value="volvo">Psicologo</option>
                <option value="saab">Cliente</option> 
            </select>
            </div>   
        
        <div class="row">
            <div class="col">
                <input class="btn btn-primary" type="submit" value="iniciar">
            </div>
        </div>
    </form>
</div>
 </body>
</html>