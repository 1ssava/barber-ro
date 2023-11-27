<?php
include("database.php");

// Lógica para cargar eventos desde la base de datos y generar el HTML
$query = "SELECT id, fecha, hora_inicio, hora_fin FROM eventos";
$result = mysqli_query($conn, $query);

echo '<div id="horarios">';
while ($row = mysqli_fetch_assoc($result)) {
    $idEvento = $row['id'];
    $fecha = $row['fecha'];
    $horaInicio = $row['hora_inicio'];
    $horaFin = $row['hora_fin'];

    // Verificar si el evento está ocupado consultando la base de datos o algún otro método
    $ocupado = verificarSiEventoEstaOcupado($idEvento); // Implementa esta función

    // Añadir la clase adecuada según si está ocupado o no
    $claseEvento = $ocupado ? 'evento-ocupado' : 'evento-disponible';

    echo "<div class='$claseEvento' data-id='$idEvento'>$fecha $horaInicio - $horaFin</div>";
}
echo '</div>';

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
     function realizarConsultaEnBaseDeDatos($idEvento) {
//     // Lógica para consultar la base de datos y determinar si el evento está ocupado
      }
?>
