<?php
include("includes/header.php");
include("database.php");
?>

<!-- Incluye jQuery antes de cualquier otro script -->
<script console.log('jQuery version:', $.fn.jquery); src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div id="horarios">
    <!-- Aquí se mostrarán los horarios disponibles -->
</div>

<script>
    jQuery(document).ready(function (jQuery) {
        console.log('Antes de cargar horarios');

        // Cargar horarios desde el backend y mostrar en la interfaz
        jQuery.ajax({
            url: 'cargar_horarios.php',
            method: 'GET',
            success: function (response) {
                console.log('Respuesta cargarHorarios:', response);
                jQuery('#horarios').html(response);
            },
            error: function (error) {
                console.error('Error cargarHorarios:', error);
            }
        });

        // Manejar clic en un horario
        jQuery('#horarios').on('click', '.horario-disponible', function () {
            var idHorario = jQuery(this).data('id');

            // Realizar una solicitud al backend para marcar el horario como ocupado
            jQuery.ajax({
                url: 'marcar_ocupado.php',
                method: 'POST',
                data: { id_horario: idHorario },
                success: function (response) {
                    // Actualizar la interfaz después de marcar el horario como ocupado
                    jQuery('#horarios').html(response);
                    alert('Horario seleccionado con éxito.');
                },
                error: function () {
                    alert('Error al seleccionar el horario. Inténtalo de nuevo.');
                }
            });
        });
    });
</script>


<?php
include("includes/footer.php");
?>
