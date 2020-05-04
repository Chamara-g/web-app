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
        <a class="navbar-brand" href="{{ url_for('index') }}">
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a  data-toggle="modal" data-target="#course_one"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course02.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course03.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course04.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course05.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course06.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a data-toggle="modal" data-target="#myModal"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->

  <!-- Modal -->
  <div class="modal fade" id="course_one" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close_course_one" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item video_iframe_course_one" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0&enablejsapi=1" allowfullscreen></iframe>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

function video_play_close(name_course){
  $('.close_' + name_course).click(function(){
      var leg=$('.video_iframe_' + name_course).attr("src");
      $('.video_iframe_' + name_course).attr("src",leg);
  });
}

video_play_close('course_one');

</script>
