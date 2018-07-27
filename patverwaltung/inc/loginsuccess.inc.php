<!-- LOGIN ERFOLGREICH 

"eingeloggt"-meldung
logout-button
-->

<div id="login">
    Eingeloggt als
    <?php echo $_SESSION["login"]; ?>
    &nbsp;&nbsp;&nbsp;
    <a href="inc/logout.inc.php">
        <button type="button" class="btn btn-outline-secondary btn-sm">
            Logout
        </button>
    </a>
</div> 