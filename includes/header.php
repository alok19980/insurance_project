<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="theme/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="theme/assets/img/favicon.png">
  <title>
    Ronak Insurance Management Systems
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="theme/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="theme/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="theme/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="theme/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
<?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) { ?>
<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php" target="_blank">
        <span class="ms-1 font-weight-bold">Ronak Insurance </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_PAGE == "index.php") ? 'active' : ''; ?>" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_PAGE == "gi.php") ? 'active' : ''; ?>" href="gi.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">GI ( General Insurance )</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_PAGE == "li.php") ? 'active' : ''; ?>" href="li.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">LI ( Life Insurance )</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_PAGE == "mc.php") ? 'active' : ''; ?>" href="mc.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mediclaim</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_PAGE == "si.php" ) ? 'active' : ''; ?>" href="si.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">SI ( Simple Insurance )</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_PAGE == "policyCopy.php") ? 'active' : ''; ?>" href="policyCopy.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-folder-17 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Policy Copy</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="theme/assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Version : 1.0</h6>
            <p class="text-xs font-weight-bold mb-0">Ronak Insurance Syatems</p>
          </div>
        </div>
      </div>
      
      <a class="btn btn-primary btn-sm mb-0 w-100" href="logout.php" type="button">Logout</a>
    </div>
  </aside>

<?php } else { ?>
<!-- Start od Login header -->
<body class="">
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="index.php">
              Ronak Insurance Management Systems
            </a>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  


<!-- end of Login header -->

<?php } ?>