<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GeNet | CRASH COURSES</title>

  <link rel="icon" href="img/logo/favicon.png" sizes="32x32" />
  <link rel="icon" href="img/logo/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="img/logo/favicon.png" />

  <meta name="description" content="Follow these video tutorials to get an understanding of the functionality and some basic processes of GeNet">
  <meta name="keywords" content="genet, gene expression, microarray">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="img/logo/logo.png" alt="logo" style="width:115px; margin-top: -3px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="user_guide.php">User guide</a></li>
          <li><a href="manual.php">Manual</a></li>
          <li><a href="nomenclature.php">Nomenclature</a></li>
          <li><a style="color: #5fcf80;">Crash course</a></li>
          <li><a href="faq.php">Faq</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

  <!--Banner-->
  <div class="banner-manual">
    <div class="bg-color-manual">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">CRASH COURSE</h2>
            </div>
            <div class="intro-para text-center quote">
<!--               <p class="big-text">From unrefined data to meaningful insights</p> -->
              <p class="small-text">“Follow these video tutorials to get an understanding of the functionality and some basic processes of GeNet”</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  <!--Courses-->
  <section id="courses" class="section-padding-index">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Crash course</h2>
          <p>Go through each of these videos, to get a step by step guide along the way.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row img_for_course_div"></div>
    </div>
  </section>
  <!--/ Courses-->

<div class="video_model_div"></div>

  <!-- Modal -->
  <div class="modal fade" id="course_model" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close_course_model" data-dismiss="modal">&times;</button>
          <p class="modal-title head_name_model">How to Log In to GeNet</p>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item video_iframe_course_model" src="" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php';?>

</body>

</html>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/subscribe.js"></script>
<script src="js/sweetalert2@9.js"></script>
<script type="text/javascript">

</script>

<script src="js/crash_course.js"></script>
