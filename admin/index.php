<?php 
include_once '../includes/header.php';
include_once 'functions/validate_data.php';

$pdo = new PDO('mysql:host=localhost;dbname=portfolio_ecole;', 'root', '');
// array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')

if(isset($_POST['submit'])) {
    if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
        $pseudo = validate($_POST['pseudo']);
        $mdp = validate($_POST['mdp']);

        $stmt = $pdo->prepare("SELECT * FROM user_admin WHERE pseudo = ? AND mdp = ?");
        $stmt->execute(array($pseudo, $mdp));

        if($stmt->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $stmt->fetch()['id'];
            header("Location: administration.php");
            exit();
        } else {
            echo "Votre pseudo ou mot de passe est incorrect.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?> 

<form action="" method="post">
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">
      
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" id="mdp">

    <input type="submit" name="submit" id="submit" value="Connexion">
</form>

<?php include_once '../includes/footer.php'; ?>
