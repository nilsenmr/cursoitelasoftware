$(document).ready(function() {
    load(1);
});

function load(page) {

    $("#loader").fadeIn('slow');
    $.ajax({
        url: './ajax/usuarios.php?action=ajax',
        beforeSend: function(objeto) {
            $('#loader').html('<img src="../Views/img/ajax-loader.gif"> Cargando...');
        },
        success: function(data) {
            $(".outer_div").html(data).fadeIn('slow');
            $('#loader').html('');

        }
    })
}