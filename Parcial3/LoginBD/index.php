<?php 

    session_start(); 
    $nombre = $_SESSION['Usuario'];

    if(isset($_SESSION['Usuario'])){

?>
<!DOCTYPE html>
<html lang="en">
    
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Formulario  Boostrap</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href= "/Jimenez/parcial3/LoginBD/css/Styles.css">
      
  </head>
  <body>
            <?php echo 'Bienvenido '.$nombre; ?>
              <a id="CerrarSesion" href="/Jimenez/Parcial3/LoginBD/php/salir.php">Cerrar sesión</a>
              

      <form>
        
         <nav class="navbar navbar-dark bg-primary">
              <form class="form-inline">
                <ul>
                  <button class="btn btn-secondary" type="submit">Agregar Operador</button>
                  <button class="btn btn-secondary" type="button">Eliminar Operador</button>
                  <button class="btn btn-secondary" type="button">Actualizar Operador</button>
                </ul>
              </form>
          </nav>
         
      
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationDefault01">Nombre Operador</label>
              <input type="text" class="form-control" id="validationDefault01" value="Irving" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationDefault02">Apellido Operador</label>
              <input type="text" class="form-control" id="validationDefault02" value="Jimenez" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault03">Telefono</label>
              <input type="number" class="form-control" id="validationDefault03" value="867" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-2 mb-3">
              <label for="validationDefault04">Numero de caja</label>
              <input type="text" class="form-control" id="validationDefault04" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">Departamento</label>
              <select class="custom-select" id="validationDefault05" required>
                <option selected disabled value="">Choose...</option>
                <option>SAGARPA</option>
                <option>PROFEPA</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault06">Pedimento</label>
              <input type="number" class="form-control" id="validationDefault06" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault07">Patente</label>
              <input type="number" class="form-control" id="validationDefault07" required>
            </div>
          </div>
          <div class="form-row">
              <div class="col-md-2 mb-3">
                <label for="validationDefault08">Folio</label>
                <input type="text" class="form-control" id="validationDefault08" required>
              </div>
              <div class="col-md-3 mb-3">
                  <label for="validationDefault09">Fecha de Entrada</label>
                  <input type="date" class="form-control" id="validationDefault09" required>
                </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault10">Hora de Entrada</label>
                <input type="time" class="form-control" id="validationDefault10" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault11">Codigo de Barras</label>
                <input type="number" class="form-control" id="validationDefault11" required>
              </div>
            </div>
         
          
        </form>
      
  </body>
</html>

<?php 
    }else{

        header('Location: /Jimenez/parcial3/LoginBD/login.html');

    }

?>