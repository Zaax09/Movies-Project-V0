<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php include "Component\header.php"; ?>
<?php include "Component\Navbar.php"; ?>

     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>





</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>