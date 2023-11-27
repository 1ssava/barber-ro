<?php
include("database.php");

// Lógica para cargar eventos desde la base de datos y generar el HTML
$query = "SELECT id, fecha, hora_inicio, hora_fin FROM eventos";
$result = mysqli_query($conn, $query);

echo '<div id="calendario"></div>';

echo '<script>';
echo '$(document).ready(function () {';
echo '    $("#calendario").fullCalendar({';
echo '        locale: "es",';
echo '        header: {';
echo '            left: "prev,next today",';
echo '            center: "title",';
echo '            right: "month,agendaWeek,agendaDay"';
echo '        },';
echo '        defaultView: "agendaDay",';
echo '        selectable: true,';
echo '        selectHelper: true,';
echo '        editable: true,';
echo '        events: [';

$first = true;

while ($row = mysqli_fetch_assoc($result)) {
    $idEvento = $row['id'];
    $fecha = $row['fecha'];
    $horaInicio = $row['hora_inicio'];
    $horaFin = $row['hora_fin'];

    // Verificar si el evento está ocupado consultando la base de datos o algún otro método
    $ocupado = verificarSiEventoEstaOcupado($idEvento); // Implementa esta función

    // Añadir el evento al calendario
    if (!$first) {
        echo ',';
    }
    echo '{';
    echo '    id: "' . $idEvento . '",';
    echo '    title: "Evento",';
    echo '    start: "' . $fecha . 'T' . $horaInicio . '",';
    echo '    end: "' . $fecha . 'T' . $horaFin . '",';
    echo '    rendering: "' . ($ocupado ? 'background' : '') . '",'; // Renderizar como fondo si está ocupado
    echo '    color: "' . ($ocupado ? 'red' : 'green') . '"'; // Cambiar el color según si está ocupado o no
    echo '}';

    $first = false;
}

echo ']';
echo '    });';
echo '});';
echo '</script>';

// Función para verificar si el evento está ocupado
function verificarSiEventoEstaOcupado($idEvento) {
    // Implementa la lógica para verificar si el evento está ocupado
    // Puedes realizar una consulta a la base de datos u otro método según tus necesidades
    // Retorna true si está ocupado, false si está disponible
    // Ejemplo:
     $ocupado = realizarConsultaEnBaseDeDatos($idEvento);
    return $ocupado;
}

// Puedes implementar la función "realizarConsultaEnBaseDeDatos" según tus necesidades
// function realizarConsultaEnBaseDeDatos($idEvento) {
//     // Lógica para consultar la base de datos y determinar si el evento está ocupado
// }
?>
