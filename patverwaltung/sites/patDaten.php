<div class="container">
    <table>
        <?php
        if (isset($_SESSION['daten'])) {
            ?>
            <tr>
                <th></th>
                <th>
                    Eingegebene Daten
                </th>
            </tr>

            <tr>
                <td>Vorname</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["vorname"]; ?>
                </td>
            </tr>

            <tr>
                <td>Nachname</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["nachname"]; ?>
                </td>
            </tr>

            <tr>
                <td>E-Mail-Adresse</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["email"]; ?>
                </td>
            </tr>

            <tr>
                <td>SV-Nummer</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["svnr"]; ?>
                </td>
            </tr>

            <tr>
                <td>Geburtsdatum</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["gebdat"]; ?>
                </td>
            </tr>

            <tr>
                <td>Geschlecht</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["geschlecht"]; ?>
                </td>
            </tr>

            <tr>
                <td>Blutdruck Diastolisch</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["dia"]; ?>
                </td>
            </tr>

            <tr>
                <td>Blutdruck Systolisch</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["sys"]; ?>
                </td>
            </tr>

            <tr>
                <td>Puls</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["puls"]; ?>
                </td>
            </tr>

            <tr>
                <td>Anmerkungen</td>
                <td>
                    <?php echo $_SESSION['daten'][0]["anmerkungen"]; ?>
                </td>
            </tr>

            <tr>
                <td>
                   <a class="btn btn-outline-danger" href="inc/delete.php" role="button">Datensatz löschen
                        </a>
                  </td>
                <td>
                    <a class="btn btn-outline-info" href="index.php" role="button">OK</a>
                </td>
            </tr>
            <?php
        } else {
            echo 'Keine Daten vorhanden!';
            echo '<br><br><a class="btn btn-outline-info" href="index.php?section=add" role="button">Zur Dateneingabe</a>';
        }
        ?>  
    </table>

</div>
