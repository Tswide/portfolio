<?php 
include_once '../includes/header.php';
if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
?>

    <h1>Hello, <?php echo $_SESSION['pseudo']; ?></h1>
    <a href="functions/logout.php">Logout</a>
    
<?php 
}else{
     header("Location: index.php");
     exit();
}
include_once '../includes/footer.php'
?>