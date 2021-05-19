<?php 

    include "./header.php"; 
    include "./class/resort.php";
?>
    <link rel="stylesheet" href="style.css">

    <div class="container-fluid">
        <div class="row" style="margin-bottom:50px;">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-top:10%">
                <h1 class="text-center text-primary">Login <i class="fa fa-user-key"></i></h1>
                <form action="" id="loginUser">
                    <div class="form-group">
                        
                        <div class="form-floating mb-3">
                            <input type="email" name="email" id="email" class="form-control">
                            <label for="email">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" id="password" class="form-control">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-lg btn-primary" id="btnLoadResorts" type="submit">Login <i class="fa fa-sign-in"></i></button>
                        <p>Not a Member? <a href="signup.php">Sign Up!</a> or <a href="index.php">Bak to Home</a></p>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
            
        </div>
    </div>
    

    <br><br>
<?php include "./footer.php";?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="./user.js"></script>


