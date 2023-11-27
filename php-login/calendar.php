<?php
include("database.php");
include("includes/header.php");

?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Incluye fullCalendar y su tema de Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.js"></script>

<!-- Incluye la fuente Roboto desde Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap">

<style>
    #calendario {
        font-family: 'Roboto', sans-serif;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }
    .text-center{
        margin-top: 20px;
    }
</style>

<div id="calendario"></div>

<script>
    jQuery(document).ready(function ($) {
        // Inicializa el calendario con fullCalendar
        jQuery('#calendario').fullCalendar({
        locale: 'en',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        touchScroll: true,
        selectable: true,
        selectHelper: true,
        eventClick: function (event) {
            if (event.url) {
                window.open(event.url);
                return false;
            }
        },
        dayClick: function (date, jsEvent, view) {
            // Captura la fecha seleccionada y redirige a la vista de Día
            var fechaSeleccionada = moment(date).format('YYYY-MM-DD');
            window.location.href = 'guardar_evento.php?fecha=' + fechaSeleccionada;
        },
        select: function (start, end) {
            // Captura la selección del usuario para la vista de Día
            var fechaReserva = moment(start).format('YYYY-MM-DD');
            var horaInicio = moment(start).format('HH:mm');
            var horaFin = moment(end).format('HH:mm');

            // Redirige al usuario a guardar_evento.php con los parámetros
            window.location.href = 'guardar_evento.php?fecha=' + fechaReserva + '&hora_inicio=' + horaInicio + '&hora_fin=' + horaFin;
        }

        });
    });
</script>

    <div class="text-center">
        <a href="inicio_exitocl.php" class="btn btn-primary">Volver al inicio</a>
    </div>