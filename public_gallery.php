<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Thunderlines</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700|Roboto:300,400,700&display=swap"
    rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            Thunderlines
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-2">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classes.html">Classes</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="public_gallery.php">Gallery</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="personal_class.html">Personal Class</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="number-container d-none d-md-block">
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container slider_item-box">
              <div class="row pt-5">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <h2>Gallery</h2>
                              <div class="row">
                                  <?php
                                    include_once 'Database_Connect.php';

                                    $gallery_res = $conn->query("select * from gallery where image_status='1'");
                                    while ($gallery_row = $gallery_res->fetch_array())
                                    {
                                        echo "<div class='col-md-3'>";
                                        echo "<div class='card-body'>";
                                        echo "<img src='http://localhost/dance-academy/admin/$gallery_row[2]' width='180' height='210'>";
                                        echo "<p style='color:#000;'><br>$gallery_row[1]</p>";
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                  ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- end slider section -->
  </div>




  <!-- info section -->

  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>





</body>

</html>