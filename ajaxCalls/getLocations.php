<?php

    include "../class/resort.php";

    $resort = new Resort();
    echo json_encode($resort->getLocations());
?>