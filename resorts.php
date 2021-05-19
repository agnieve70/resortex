<?php 
    session_start();
    include "./header.php"; 
    include "./class/resort.php";
?>
    <link rel="stylesheet" href="resort.css">
    <p id="id" hidden><?php echo $_GET['id']; ?></p>
    <?php include "./navbar.php"; ?>

    <div style="margin-top:20px;" class="container">
        <div id="content" class="row row-cols-1 row-cols-md-3 g-4">
        </div>
    </div>
    
    <br>
<?php include "./footer.php";?>

<script src="./resorts.js"></script>