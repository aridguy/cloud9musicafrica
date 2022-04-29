<?php 
if(isset($_POST['uploadfilesub'])) {
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `uploadedimage` (`imagename`) VALUES ('$filename')";
$qry = mysqli_query($conn, $sql);
if( $qry) {
echo "</br>image uploaded";
}
}

 ?>
<!DOCTYPE html>
<php lang="en">

<head>
  <style type="text/css">
    .imagess {
      width: 295.98px;
      height: 295.98px;
      margin: 10px;
    }
    li.itemImg {
    display: inline-block;
}
h4.ourartist {
    color: white;
    text-align: center;
}
.socially {
    text-align: center;
}
  </style>
  <script src="https://use.fontawesome.com/dee7e9529e.js"></script>
  <script src="https://use.fontawesome.com/dee7e9529e.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Artist</title>
  <meta content="" name="cloud9musicafrica">
  <meta content="" name="record label">
   <meta content="" name="musical label">
    <meta content="" name="cloud9 music">
     <meta content="" name="entertainment">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- fontawesomes -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/dee7e9529e.js"></script>

 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+2347067376191</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> info@cloud9musicafrica.com</span></i>

      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo/Official-logoWB.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">HOME</a></li>
          <li><a class="nav-link scrollto" href="about.php">ABOUT</a></li>
          <li><a class="nav-link scrollto active" href="artist.php">ARTIST</a></li>
          <li><a class="nav-link scrollto" href="release.php">RELEASE</a></li>
          <li><a class="nav-link scrollto" href="contact.php">CONTACT</a></li>
          </li>
        <!--   <li><a class="nav-link scrollto" href="contact.php">FAQ</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

    <!-- ======= artist Section ======= -->
    <section id="chefs" class="chefs" style="position: relative;top: 100px">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Musicians in Cloud9 Music Africa</h2>
          <p>Artists</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>JAYTRIGGA</h4>
                </div>
                <div class="social">
                  <a href="https://web.facebook.com/JaytriggaOfficial/?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/jaytrigga_official/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.youtube.com/watch?v=WRTALhBnqL8" target="_blank"><i class="fa fa-youtube"></i></a>
                  <a href="https://soundcloud.com/user-trigga" target="_blank"><i class="fa fa-soundcloud"></i></a>
                  <a href="https://open.spotify.com/artist/0iHhkGRIIJ1rPe6Uah0yW6" target="_blank"><i class="fa fa-spotify"></i></a>
                  <a href="https://audiomack.com/jay-trigga/song/" target="_blank"><i class="fa fa-audio-description"></i></a>
                  <a href="https://twitter.com/JaytriggaO" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>CHRIS DA KING</h4>
                </div>
                <div class="social">
                  <a href="https://web.facebook.com/chrisdakingofficial/" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/chrisdaking_official/" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.youtube.com/channel/UC21izEhBLpiuSaMTHF0ufOg" target="_blank"><i class="fa fa-youtube"></i></a>
                  <a href="https://open.spotify.com/artist/0iHhkGRIIJ1rPe6Uah0yW6" target="_blank"><i class="fa fa-soundcloud"></i></a>
                  <a href="https://soundcloud.com/ChrisDaKing" target="_blank"><i class="fa fa-spotify"></i></a>
                  <a href="https://audiomack.com/chris-da-king/song/testimony" target="_blank"><i class="fa fa-audio-description"></i></a>
                  <a href="https://twitter.com/hashtag/chrisdaking" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End artist Section -->
<div class="container-fluid">
    <div class="member" data-aos="zoom-in" data-aos-delay="200">
    <div class="table-responsive">
    <ul class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php

    $servername = "localhost";

    $username = "cloudmus_Ucl9";

    $password = "cloudmus_Ucl9???";

    $dbname = "cloudmus_cl9";

    // Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = 'SELECT * from uploadedimage';

    if (mysqli_query($conn, $sql)) {

    echo "";

    } else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

    $count=1;

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-md-12">
      <li class="itemImg">
    <?php 
    $imgTag = '<img class="imagess" src="xyz/imagesuploadedf/' . $row['imagename'] . '" />';
    echo $imgTag; ?>
    <div class="member-info">
      <div class="member-info-content">
        <h4 class="ourartist"><?php echo $row['artistname']; ?></h4>
      </div>
    </div>
      <div>
        <div class="socially">
          <a href="https://twitter.com/<?php echo $row['tw']; ?>"><i class="bi bi-twitter"></i></a>
          <a href="https://web.facebook.com/<?php echo $row['fb']; ?>"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/<?php echo $row['ig']; ?>"><i class="bi bi-instagram"></i></a>
          <a href="https://youtube.com/<?php echo $row['yt']; ?>"><i class="bi bi-youtube"></i></a>
        </div>
      <div></div>
    </div>
    <?php

    $count++;}} else {

    echo '0 results';

    }

    ?>
  </li>
</div>
    </ul>
  </div>
</div>
</div>
  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</php>