<?php 
    session_start();
    include "./header.php"; 
    include "./class/resort.php";
?>
    <link rel="stylesheet" href="resort.css">
    <p id="id" hidden><?php echo $_GET['id']; ?></p>
    <?php include "./navbar.php"; ?>

    <div class="container">
        <?php echo $_SESSION['user_id'] ?>
    </div>
    
    <br>
<?php include "./footer.php";?>

<script src="./user_dashboard.js"></script>