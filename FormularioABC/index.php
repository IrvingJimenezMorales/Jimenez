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
      <link rel="stylesheet" href= "/Jimenez/FormularioABC/css/Styles.css">
      
  </head>
  <body>
            <?php echo 'Bienvenido '.$nombre; ?>
              <a id="CerrarSesion" href="/Jimenez/FormularioABC/php/salir.php">Cerrar sesión</a>
             
      <!-- Modal de Dialogo -->
      <div class="modal fade" id="modalMensaje" role="dialog">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <h2 class="modal-title text-center">Acceso</h2>
            </div>
            <div class="modal-body text-center">
              <h3>Message</h3>
            </div>
            <div class="modal-footer">
              <button id="botonCerrar" type="button" class="btn btn-default" data-dismiss="modal" autofocus>Cerrar</button>
            </div>
      </div>
      </div>
      </div>
 
        <!-- Modal de Confirmación -->
      <div class="modal fade" id="modalSalida" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header modal-header-primary">
                              <button type="button" class="close" data-dismiss="modal">X</button>
                              <h2 class="modal-title text-center">Confirmación</h2>
                          </div>
                          <div class="modal-body text-center">
                              <h3>Desea Borrar el registro?</h3>
                </div>
                <div class="modal-footer">
                      <button id="botonCerrar" type="button" class="btn btn-default" data-dismiss="modal" autofocus>Cerrar</button>
                      <button id="botonCerrar" type="button" class="btn btn-default" data-dismiss="modal" autofocus>Cerrar</button>
                      
                </div>
            </div>
          </div>
      </div>
        <!-- Formulario de Operadores. -->
      <form id="formularioOperadores">

           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                  <button class="btn btn-secondary" type="button" id="btnGuardar">Agregar Operador</button>
                  <button class="btn btn-secondary" type="button" id="btnActualizar">Actualizar Operador</button>
                  <button class="btn btn-secondary" type="button" id="btnEliminar">Eliminar Operador</button>
                  <button class="btn btn-secondary" type="button" id="btnConsultar">Consultar Operador</button>
                  <button class="btn btn-secondary" type="button" id="btnLimpiar">Limpiar</button>
                  </li>
                </ul>
              </div>
          </nav>
      
          <div class="form-row">
          <div class="col-md-2 mb-2">
              <label for="validationDefault01">ID</label>
              <input type="text" class="form-control" id="IdOperador" placeholder = "0" >
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault01">Nombre Operador</label>
              <input type="text" class="form-control" id="Nombre" >
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">Apellido Operador</label>
              <input type="text" class="form-control" id="Apellido" >
            </div>
            <div class="col-md-2 mb-2">
              <label for="validationDefault03">Telefono -10-</label>
              <input type="number" class="form-control" id="Telefono">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-2 mb-3">
              <label for="validationDefault04">Numero de caja</label>
              <input type="text" class="form-control" id="NumCaja" >
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">Departamento</label>
              <select class="custom-select" id="Departamento">
                <option selected disabled value="">Departamento...</option>
                <option>SAGARPA</option>
                <option>PROFEPA</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault06">Pedimento -8-</label>
              <input type="number" class="form-control" id="Pedimento" >
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault07">Patente -4-</label>
              <input type="number" class="form-control" id="Patente">
            </div>
          </div>
          <div class="form-row">
              <div class="col-md-2 mb-3">
                <label for="validationDefault08">Folio -7-</label>
                <input type="text" class="form-control" id="Folio">
              </div>
              <div class="col-md-3 mb-3">
                  <label for="validationDefault09">Fecha de Entrada</label>
                  <input type="date" class="form-control" id="FechaEntrada" >
                </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault10">Hora de Entrada</label>
                <input type="time" class="form-control" id="HoraEntrada" >
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault11">Codigo de Barras -4-</label>
                <input type="number" class="form-control" id="CodigoBarras" >
              </div>
              
            </div>
         
      </form>

       
      <!-- jQuery, Popper.js, Bootstrap JS -->
      <script src="/Jimenez/FormularioABC/assets/jquery/jquery-3.3.1.min.js"></script>
      <script src="/Jimenez/FormularioABC/assets/popper/popper.min.js"></script>
      <script src="/Jimenez/FormularioABC/assets/bootstrap/js/bootstrap.min.js"></script>
        
      <!-- datatables JS -->
      <script type="text/javascript" src="/Jimenez/FormularioABC/assets/datatables/datatables.min.js"></script> 
      <script type="text/javascript" src="/Jimenez/FormularioABC/js/main.js"></script> 
        
        
  </body>
</html>


<?php 
    }else{

        header('Location: /Jimenez/FormularioABC/login.html');

    }

?>