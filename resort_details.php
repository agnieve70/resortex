<?php 
    session_start();
    include "./header.php"; 
    include "./class/resort.php";
?>
    <link rel="stylesheet" href="resort_details.css">
    <p id="id" hidden><?php echo $_GET['id']; ?></p>
    <?php include "./navbar.php"; ?>

       <div id="content">
        
       </div>

    <br>
<?php include "./footer.php";?>

<script src="./resort_details.js"></script>