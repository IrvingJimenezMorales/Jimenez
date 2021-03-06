<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  if ( !isset($_SESSION['login']) || empty($_SESSION['login']) ) {
      header("Location: ./login.html");
  }
  ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Parcial3/Login/css/Styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    

    <title>Formulario  Boostrap</title>
</head>
<body>

    <form>
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
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" required>
            <label class="form-check-label" for="invalidCheck2">
              El Operador No Existe
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              El Operador Existe
            </label>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Agregar Operador</button>
        <button class="btn btn-secundary" type="submit">Salir</button>
      </form>
    
</body>
</html>