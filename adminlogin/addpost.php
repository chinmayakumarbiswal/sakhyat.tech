<?php
  require('../includes/database.php');
  require('../includes/function.php');
  if(!isset($_SESSION['isUserLoggedIn'])){
    header('location:../includes/logout.php');
  }
  $admin=getAdminInfo($db,$_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard -SakhyatTech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../images/icon.png" alt="">
        <span class="d-none d-lg-block">Sakhyat</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">




        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../images/icon.png" alt="Profile" class="rounded-circle">

            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$admin['userName']?></suserNamepan>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=$admin['userName']?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link " href="category.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Category</span>
        </a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link " href="addpost.php">
          <i class="bi bi-journal-text"></i>
          <span>Add Post</span>
        </a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link " href="comment.html">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Comment</span>
        </a>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link " href="menu.html">
          <i class="bi bi-gem"></i>
          <span>Menu</span>
        </a>
      </li> -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Addpost</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      

      <form action="../includes/addpost.php" method="post" enctype="multipart/form-data" >
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Post Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="post_title" required>
            </div>
          </div>
          <div class="col-lg">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Post Content</h5>

              <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor" name="post_content" required>
               
              </textarea><!-- End TinyMCE Editor -->

            </div>
          </div>

          <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select Post Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="post_category">
                      <?php
                        $categories=getAllCategory($db);
                        foreach($categories as $ct){
                          ?>
                            <option value="<?=$ct['id']?>"><?=$ct['name']?></option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>
            </div>

        </div>

        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
            <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile" name="post_image" accept="image/*" required>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Publish Post</label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="addpost">Publish Post</button>
          </div>
        </div>


      </form>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sakhyat.Tech</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://chinmayakumarbiswal.in/">Chinmaya Kumar Biswal</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>