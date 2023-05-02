<?php 
error_reporting(E_ALL);
require __DIR__ . '/../function/json.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = addProject($_POST['titre'], $_POST['description'], $_FILES['url_photo'], $_POST['url_site']);
}

include_once __DIR__ . '/../includes/header.php';
if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
?>

    <h1>Hello, <?php echo $_SESSION['pseudo']; ?></h1>
    <a href="functions/logout.php">Logout</a>

    <div class="filter add_project">
      <form method="post" enctype="multipart/form-data">
        <div>
          <label for="titre">Titre</label>
          <input type="text" name="titre" required>
          <label for="description">Description</label>
          <textarea type="text" name="description" required></textarea>
          <label for="url_photo">Url Photo</label> 
          <label for="url_site">Url Site</label> 
          <input type="text" name="url_site" required>
          <button class="fill" type="submit">Envoyer</button>
        </div>
      </form>
    </div>
    
<?php 
}else{
     header("Location: index.php");
     exit();
}
include_once __DIR__ . '/../includes/footer.php';
?>
