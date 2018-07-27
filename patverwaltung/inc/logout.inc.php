<!--
L O G O U T
löscht session und macht refresh auf index.php (weiterleitung)-->

<meta http-equiv="refresh" content="1; url=../index.php">

<?php
# session löschen
session_start();
$_SESSION = ARRAY();
session_destroy();

# cookie löschen
setcookie('cookie', '', time() - 600, "/");
?>
