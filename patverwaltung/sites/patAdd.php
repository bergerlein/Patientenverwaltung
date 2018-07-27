<body>
    <div class="container">

        <form action="index.php?section=success" method="POST">
            
            <table>

                <tr>
                    <td>Vorname</td>
                    <td><input type="text" name="vorname"></td>
                </tr>

                <tr>
                    <td>Nachname</td>
                    <td><input type="text" name="nachname"></td>
                </tr>

                <tr>
                    <td>E-Mail-Adresse</td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>SV-Nummer (4-stellig)</td>
                    <td><input type="number" step="any" min="1000" max="9999" name="svnr" placeholder="1234"></td>
                </tr>

                <tr>
                    <td>Geburtsdatum</td>
                    <td><input type="date" name="gebdat" placeholder="TTMMJJ"></td>
                </tr>

                <tr>
                    <td>Geschlecht</td>
                    <td><input type="radio" name="geschlecht" value="m">m
                        <input type="radio" name="geschlecht" value="f">f
                        <input type="radio" name="geschlecht" value="ka" checked>keine Angabe
                    </td>
                </tr>

                <tr>
                    <td>Blutdruck Diastolisch</td>
                    <td><input type="number" step="any" min="20" max="300" name="dia"></td>
                </tr>

                <tr>
                    <td>Blutdruck Systolisch</td>
                    <td><input type="number" step="any" min="30" max="400" name="sys"></td>
                </tr>

                <tr>
                    <td>Puls</td>
                    <td><input type="number" step="any" min="20" max="300" name="puls"></td>
                </tr>

                <tr>
                    <td>Anmerkungen</td>
                    <td><input type="text" name="anmerkungen"></td>
                </tr>
                <tr>
                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="reset" class="btn btn-outline-danger" role="button" value="Reset">
                        <input type="submit" name="submit" class="btn btn-outline-info" role="button" value="Absenden">
                        
                    </td>

                </tr>

            </table>
                
        </form>
    </div>
</body>
