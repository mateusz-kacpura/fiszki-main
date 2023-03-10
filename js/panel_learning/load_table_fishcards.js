function EnviarCorreo()
{
    jQuery.ajax({
        type: "POST",
        url: 'servicios.php',
        data: {functionname: 'enviaCorreo', arguments: [$(".Txt_Nombre").val(), $(".Txt_Correo").val(), $(".Txt_Pregunta").val()]}, 
         success:function(data) {
        alert(data); 
         }
    });
}
