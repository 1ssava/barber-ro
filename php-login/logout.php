<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
// Evitar almacenamiento en caché
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
?>
