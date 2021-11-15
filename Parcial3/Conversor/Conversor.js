$(() => {
    $('#Convertir').click(function () {
        
        let valor = $('#Fahrenheight').val();
        $.ajax({
            url: `Server.php?Fahrenheight=${valor}`,
            type: 'GET',
            success: function (response) {
                $('#Salida').html(response);
            },
            error: function(error){
                console.log(error);
            }
        });
    });
});


