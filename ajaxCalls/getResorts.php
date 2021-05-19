<?php

    include "../class/resort.php";
    $id = $_GET['id'];

    $resort = new Resort();
    echo json_encode($resort->getResorts($id));
?>