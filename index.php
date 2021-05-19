
<?php 

include "./header.php"; 
include "./class/resort.php";
?>
<link rel="stylesheet" href="style.css">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top:10%">
            <h1 class="text-center text-primary">Resortex</h1>
            <div class="form-group">
                
                <div class="form-floating mb-3">
                    <select name="" id="cityInput" class="form-control  "></select>
                    <label for="cityInput">Select City</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" id="btnLoadResorts" type="button">Search <i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="col-md-4"></div>
        
    </div>
</div>


<br><br>
<?php include "./footer.php";?>

<script src="./index.js"></script>