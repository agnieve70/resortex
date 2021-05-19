<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Resortex</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home
          </a>
        </li> -->
        <?php
          if(isset($_SESSION['user_id'])):
        ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-user"></i> Hi! <?php echo $_SESSION["firstname"]; ?>, logout?</a>
        </li>
        <?php
          else :
        ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fa fa-key"></i> Login</a>
        </li>
        <?php endif; ?>
        
      </ul>
    </div>
  </div>
</nav>