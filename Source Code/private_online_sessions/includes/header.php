<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>TeachMe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <!-- <i class="flaticon-043-teddy-bear"></i> -->
          <span class="text-primary">TeachMe</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="index.php" class="nav-item nav-link ">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="class.php" class="nav-item nav-link">Classes</a>
            <a href="teacher.php" class="nav-item nav-link">Teachers</a>
            <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
            <a href="blog.php" class="nav-item nav-link">Blog</a>
            <!-- <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pages</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                <a href="single.html" class="dropdown-item">Blog Detail</a>
              </div>
            </div> -->
            <a href="contact.php" class="nav-item nav-link">Contact</a>
          </div>
          <?php if (!isset($_SESSION['user_name'])) { ?>
          <a href="./dashboard/registration.php" class="btn btn-primary px-4 mr-2">Register</a>
          
          <a href="./dashboard/login.php" class="btn btn-primary px-4">Login</a>
          <?php } else{  $id=$_SESSION['user_id'];?>
            <a href="./my_account.php" class="btn btn-primary px-4 mr-2">My Account</a>
          
          <a href="./logout.php" class="btn btn-primary px-4">Logout</a>
            <?php } ?>

        </div>
      </nav>
    </div>
    <!-- Navbar End -->