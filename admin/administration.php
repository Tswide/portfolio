<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
?>

    <h1>Hello, <?php echo $_SESSION['pseudo']; ?></h1>
    <a href="functions/logout.php">Logout</a>
    
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>