<!--
N A V I G A T I O N
    - Menü-Buttons
    - Sections setzen:
        - add
        - show
        - contact
    - Section standardmäßig auf "home" gesetzt (in index.php)
    - Button-Farbe: if-Abfragen (je nach Section anderer Button)
    - Button "Daten abrufen" wird nur bei Session login User angezeigt
-->

<nav id="nav" class="navbar sticky-top navbar-expand-sm navbar-light bg-grey">  

    <div class="container">
        <ul class="navbar-nav">

            <!-- HOME BUTTON -->
            <li class="nav-item">
                <a href="index.php">
                    <button type="button" class="btn btn-dark">Home</button>
                </a>
            </li>

            <!-- MENÜ BUTTONS-->

            <!-- Button "Daten hinzufügen" -->

            <li class="nav-item">
                <a href="index.php?section=add">    <!-- section = add -->
                    <?php
                    if ($_GET['section'] == "add" || $_GET['section'] == "success") {    // button der klasse "info" anzeigen (aktives menü-item)
                        ?><button type="button" class="btn btn-info">Daten hinzufügen</button>
                        <?php
                    } else {   // wenn section nicht "add": button klasse "light" anzeigen (inaktives item)
                        ?><button type="button" class="btn btn-light">Daten hinzufügen</button><?php
                    }
                    ?>
                </a> 
            </li>

            <!-- Button "Daten abrufen" -->
            <!-- nur, wenn "user" eingeloggt ist -->
            <?php
            if (isset($_SESSION["login"])) {
                switch ($_SESSION["login"]) {
                    case "user":
                        ?>
                        <li class="nav-item">
                            <a href="index.php?section=show">
                                <?php
                                if ($_GET['section'] == "show") {
                                    ?><button type="button" class="btn btn-info">Daten abrufen</button>
                                    <?php
                                } else {
                                    ?><button type="button" class="btn btn-light">Daten abrufen</button><?php
                                }
                                ?>
                            </a>
                        </li>
                    <?php
                }
            }
            ?>

                        
            <!-- Button "Kontakt" -->

            <li class="nav-item">
                <a href="index.php?section=contact">
                    <?php
                    if ($_GET['section'] == "contact") {
                        ?><button type="button" class="btn btn-info">Kontakt</button>
                        <?php
                    } else {
                        ?><button type="button" class="btn btn-light">Kontakt</button><?php
                }
                    ?>
                </a>
            </li>

        </ul>
    </div>
</nav>
