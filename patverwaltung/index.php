<!--
INDEX.PHP
- SESSION start
- INCLUDEs der dateien:
    - login
    - header
    - nav
    - content
    - footer
- SECTION wird auf "home" gesetzt, falls keine andere ausgewählt ist
-->

<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- CSS bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <!-- CSS eigenes -->
        <link href="res/patDesign.css" rel="stylesheet" type="text/css"/> 

        <title>Patient*innen-Verwaltung</title>
    </head>

    <body>

        <!-- wenn keine section gewählt: section = home-->

        <?php
        if (!isset($_GET['section'])) {
            $_GET['section'] = "home";
        }
        ?>

        <!--include files -->

        <div id="header">
            <div>
                <?php include "inc/login.inc.php"; ?>
            </div>
            <?php include "inc/header.inc.php"; ?>
        </div>

        <div id="nav">
            <?php include "inc/nav.inc.php"; ?>
        </div>

        <div id="content" >
            <?php include "inc/content.inc.php"; ?>
        </div>

        <div id="footer">
            <?php include "inc/footer.inc.php"; ?>
        </div>

    </body>
</html>
