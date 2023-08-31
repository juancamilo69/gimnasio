<script>
$(document).ready(function() {
    $('#abrir-consulta').click(function() {
        // Realiza una solicitud AJAX para obtener el contenido de la consulta
        $.ajax({
            url: '',
            method: 'GET',
            success: function(data) {
                // Coloca el contenido en el contenedor de la consulta
                $('#consulta-container').html(data);
            },
            error: function() {
                // Manejo de errores si la carga de la consulta falla
                $('#consulta-container').html('Error al cargar la consulta.');
            }
        })
    })
});
</script>
