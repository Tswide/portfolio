<nav>
    <h1 class="titre_sidebar">Julien Jcbs</h1>
    <menu>
        <li>Compétences</li>
        <li>Formation</li>
        <li>Portfolio</li>
        <li>Contact</li>
    </menu>
    <?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
    ?>
        <a href="../portfolio/admin/functions/logout.php">Logout</a>
    <?php
    }    
    ?>
</nav>