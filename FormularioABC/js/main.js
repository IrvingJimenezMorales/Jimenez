var tipoOperacion=0;

$('document').ready(function () {

    $("#btnConsultar").click(function () {
        $('input').val('');
        var vidoper = prompt("ID de Operador:");


        $.post('/Jimenez/FormularioABC/php/Read.php',
                {IdOperador: vidoper},
                function (ret) {
                if (ret['resultado'] != 0) {

                console.log("Error");

                $('#modalMensaje .modal-header').addClass('modal-header-danger');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text(ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                });
                }
                else {

                console.log(ret);
                console.log(ret.detalle);
                console.log(ret.detalle.NombreOperador);
                console.log(ret.detalle.ApellidoOperador);


                $('#IdOperador').val(ret.detalle.IdOperador);
                $('#Nombre').val(ret.detalle.NombreOperador);
                $('#Apellido').val(ret.detalle.ApellidoOperador);
                $('#Telefono').val(ret.detalle.Telefono);
                $('#NumCaja').val(ret.detalle.NumCaja);
                $('#Departamento').val(ret.detalle.Departamento);
                $('#Pedimento').val(ret.detalle.Pedimento);
                $('#Patente').val(ret.detalle.Patente);
                $('#Folio').val(ret.detalle.Folio);
                $('#FechaEntrada').val(ret.detalle.FechaEntrada);
                $('#HoraEntrada').val(ret.detalle.HoraEntrada);
                $('#CodigoBarras').val(ret.detalle.CodigoBarras);
                


                $('#modalMensaje .modal-header').addClass('modal-header-success');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text("Nombre: "+ret.detalle.NombreOperador+' '+ret.detalle.ApellidoOperador);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#myModal .modal-header').removeClass('modal-header-success');
                });
                
            }
        },'json');

    });


    $("#btnlimpiar").click(function () {
        $('input').val('');
        $('.form-control').prop("disabled", true);
        document.getElementById("formularioOperadores").reset();
    });

    $("#btnActualizar").click(function () {
        tipoOperacion = 2;
        
        var vidoper = $('#IdOperador').val();
        var vnom = $('#Nombre').val();
        var vape = $('#Apellido').val();
        var vtel = $('#Telefono').val();
        var vcaj = $('#NumCaja').val();
        var vdep = $('#Departamento').val();
        var vped = $('#Pedimento').val();
        var vpat = $('#Patente').val();
        var vfol = $('#Folio').val();
        var vfee = $('#FechaEntrada').val();
        var vhee = $('#HoraEntrada').val();
        var vcdb = $('#CodigoBarras').val();

        if (vidoper=="" || vnom=="" || vape=="" || vtel=="" || vcaj=="" || vdep=="" || vped=="" || vpat=="" || vfol=="" || vfee=="" || vhee=="" || vcdb=="") {
            console.log("Falto capturar informacion");
            $('#modalMensaje .modal-header').addClass('modal-header-danger');
            $('#modalMensaje .modal-header h2').text("Formulario Incompleto");
            $('#modalMensaje .modal-body h3').text("Debe capturar todos los campos");
            $('#modalMensaje').modal();
            $("#modalMensaje").on('shown.bs.modal', function () {
                $('#botonCerrar').focus();
            });
            $("#modalMensaje").on('hidden.bs.modal', function () {
                $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                $("#Nombre").focus();
            });


        } else {
        $.post('/Jimenez/FormularioABC/php/Update.php',
                {ido: vidoper, nom: vnom, app: vape, tel: vtel, numc: vcaj, depto: vdep, ped: vped, pat: vpat, fol: vfol, fee: vfee ,hee: vhee, cdb: vcdb, tip:tipoOperacion},
                function (ret) {

                if (ret.resultado!= 0) {

                console.log('Error Actualizacion');

                $('#modalMensaje .modal-header').addClass('modal-header-danger');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text(ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                });
                }
                else {
                $('#IdOperador').val(ret.detalle);

                $('#modalMensaje .modal-header').addClass('modal-header-success');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text("ID del Operador Actualizado : "+vidoper);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#myModal .modal-header').removeClass('modal-header-success');
                });
                 
            }
         },'json');
          
        }
      
    });


    $("#btnGuardar").click(function () {
        tipoOperacion = 1;
        var vidoper = $('#IdOperador').val();
        var vnom = $('#Nombre').val();
        var vape = $('#Apellido').val();
        var vtel = $('#Telefono').val();
        var vcaj = $('#NumCaja').val();
        var vdep = $('#Departamento').val();
        var vped = $('#Pedimento').val();
        var vpat = $('#Patente').val();
        var vfol = $('#Folio').val();
        var vfee = $('#FechaEntrada').val();
        var vhee = $('#HoraEntrada').val();
        var vcdb = $('#CodigoBarras').val();

        if (vidoper=="" || vnom=="" || vape=="" || vtel=="" || vcaj=="" || vdep=="" || vped=="" || vpat=="" || vfol=="" || vfee=="" || vhee=="" || vcdb=="") {
            console.log("Falto capturar informacion");
            $('#modalMensaje .modal-header').addClass('modal-header-danger');
            $('#modalMensaje .modal-header h2').text("Formulario Incompleto");
            $('#modalMensaje .modal-body h3').text("Debe capturar todos los campos");
            $('#modalMensaje').modal();
            $("#modalMensaje").on('shown.bs.modal', function () {
                $('#botonCerrar').focus();
            });
            $("#modalMensaje").on('hidden.bs.modal', function () {
                $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                $("#Nombre").focus();
            });


        } else {
        $.post('/Jimenez/FormularioABC/php/Create.php',
                {ido: vidoper, nom: vnom, app: vape, tel: vtel, numc: vcaj, depto: vdep, ped: vped, pat: vpat, fol: vfol, fee: vfee ,hee: vhee, cdb: vcdb, tip:tipoOperacion},
                function (ret) {

                if (ret.resultado!= 0) {

                console.log('Error Insercion');

                $('#modalMensaje .modal-header').addClass('modal-header-danger');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text(ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                });
                }
                else {
                $('#IdOperador').val(ret.detalle);

                $('#modalMensaje .modal-header').addClass('modal-header-success');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text("Operador : "+ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#myModal .modal-header').removeClass('modal-header-success');
                });
                  
            }
        },'json');
         
           
        }
    });



    $('#btnEliminar').click( function() {
        /*var vidoper = $('#IdOperador').val();*/
        var vidoper = prompt("ID de Operador a Eliminar:");

        if (confirm('Borrar')) {
            $.post('/Jimenez/FormularioABC/php/Delete.php',
            {IdOperador: vidoper},
            function (ret) {
                alert("Borrado");
            },'json');

            $('input').val('');
          
        } else {
            alert("No se borra");
        }
    });

});
