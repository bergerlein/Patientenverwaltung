<meta http-equiv="refresh" content="1; url=../index.php?section=show">

<?php
session_start();

unset($_SESSION['daten']);

/*nur vorname löschen:
 $_SESSION['daten'][0]['vorname'] = '';*/

var_dump($_SESSION);
?>