<?php
$_SESSION['daten'] = array();

array_push($_SESSION['daten'], $_POST);

/*
  $_SESSION['vorname'] = $_POST['vorname'];
  $_SESSION['nachname'] = $_POST['nachname'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['gebdat'] = $_POST['gebdat'];
  $_SESSION['svnr'] = $_POST['svnr'];
  $_SESSION['geschlecht'] = $_POST['geschlecht'];
  $_SESSION['dia'] = $_POST['dia'];
  $_SESSION['sys'] = $_POST['sys'];
  $_SESSION['puls'] = $_POST['puls'];
  $_SESSION['anmerkungen'] = $_POST['anmerkungen'];
 */
?>

<div class="container">
    <table>

        <tr>
            <th></th>
            <th>
                Eingegebene Daten
            </th>
        </tr>

        <tr>
            <td>Vorname</td>
            <td>
                <?php echo $_POST['vorname']; ?>
            </td>
        </tr>

        <tr>
            <td>Nachname</td>
            <td>
                <?php echo $_POST['nachname']; ?>
            </td>
        </tr>

        <tr>
            <td>E-Mail-Adresse</td>
            <td>
                <?php echo $_POST['email']; ?>
            </td>
        </tr>

        <tr>
            <td>SV-Nummer</td>
            <td>
                <?php echo $_POST['svnr']; ?>
            </td>
        </tr>

        <tr>
            <td>Geburtsdatum</td>
            <td>
                <?php echo $_POST['gebdat']; ?>
            </td>
        </tr>

        <tr>
            <td>Geschlecht</td>
            <td>
                <?php echo $_POST['geschlecht']; ?>
            </td>
        </tr>

        <tr>
            <td>Blutdruck Diastolisch</td>
            <td>
                <?php echo $_POST['dia']; ?>
            </td>
        </tr>

        <tr>
            <td>Blutdruck Systolisch</td>
            <td>
                <?php echo $_POST['sys']; ?>
            </td>
        </tr>

        <tr>
            <td>Puls</td>
            <td>
                <?php echo $_POST['puls']; ?>
            </td>
        </tr>

        <tr>
            <td>Anmerkungen</td>
            <td>
                <?php echo $_POST['anmerkungen']; ?>
            </td>
        </tr>

        <tr>
            <td><br><br><br></td>
            <td>
                <a class="btn btn-outline-info" href="index.php" role="button">OK</a>
            </td>
        </tr>

    </table>

</div>