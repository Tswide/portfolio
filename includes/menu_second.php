<input type="checkbox" id="active">
<label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
<div class="wrapper-second">
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="#">Compétences</a></li>
        <li><a href="#">Formations</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
    <?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
    ?>
        <li><a href="../portfolio/admin/administration.php">Administration</a></li>
    <?php
    }    
    ?>
    </ul>
</div>