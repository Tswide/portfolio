<?php 
error_reporting(E_ALL);
require __DIR__ . '/../function/json.php';
$json = new Json();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = $json->addProject($_POST['titre'], $_POST['description'], $_FILES['url_photo'], $_POST['url_site']);
}

include_once __DIR__ . '/../includes/header.php';
if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
?>
  <div class="formulaire_admin">
    <h1>Hello, <?php echo $_SESSION['pseudo']; ?></h1>
    <a href="functions/logout.php">Logout</a>
    
    <div class="filter add_project">
      <form method="post" enctype="multipart/form-data" id="form_add_project">
        <div>
          <label for="titre">Titre</label>
          <input type="text" name="titre" required>
          <label for="description">Description</label>
          <textarea type="text" name="description" required></textarea>
          <label for="description_long">description_long</label>
          <textarea type="text" name="description_long" required></textarea>
          <label for="url_photo">Url Photo</label> 
          <input type="file" name="url_photo" accept="image/png image/jpeg" required>
          <label for="url_site">Url Site</label> 
          <input type="text" name="url_site" required>
          <button class="fill" type="submit">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
   
<?php 
}else{
     header("Location: index.php");
     exit();
}
include_once __DIR__ . '/../includes/footer.php';
?>
