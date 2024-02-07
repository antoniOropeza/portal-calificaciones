<nav class="main-header navbar navbar-expand navbar-amlo navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Pedro Antonio López Oropeza</a>
      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" style="font-size:20px;color:#ffffff;">
          <?php echo $_SESSION['user']; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-left">
          <a href="logout.php" button class="btn btn-danger dropdown-item">Cerrar sesión</a>
          </a>
        </div>
      </li>
    </ul>
  </nav>