<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GeNet | FAQ</title>

  <link rel="icon" href="img/logo/favicon.png" sizes="32x32" />
  <link rel="icon" href="img/logo/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="img/logo/favicon.png" />

  <meta name="description" content="Go through some of the Frequently Asked Questions on GeNet and the answers to these questions">
  <meta name="keywords" content="genet, gene expression, microarray">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">

</head>

<style type="text/css">
  
  .h3_faq{
      cursor: pointer;
  }
  .answer_faq{
    display: none;
  }

</style>

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
          <li><a href="crash_courses.php">Crash course</a></li>
          <li><a style="color: #5fcf80;">Faq</a></li>
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
              <h2 class="text-dec">GeNet FAQ</h2>
            </div>
            <div class="intro-para text-center quote">
<!--               <p class="big-text">From unrefined data to meaningful insights</p> -->
              <p class="small-text">“Go through some of the Frequently Asked Questions on GeNet and the answers to these questions”</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  <!--step_1-->
  <section id="step_1" class="section-padding-index">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt-manual h3_faq">01. Who can use GeNet?</h3>
              <p class="det-p-manual answer_faq">GeNet was designed for the use of people in every field in bioinformatics, statistics and computer science. This can be used for the easy analysis of gene expression data which is used in many medical researches.</p>
            </hgroup>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt-manual h3_faq">02. Do we need to have any background knowledge to use GeNet?</h3>
              <p class="det-p-manual answer_faq">GeNet facilitates a graphical user interface which is very easy to understand even for a person without much computer knowledge. We have provided a user guide for anyone who needs basic instructions to follow the steps. In addition, GeNet manual includes in detail information on each step. Anyone who prefer visual aid can follow up GeNet crash course.</p>
            </hgroup>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt-manual h3_faq">03. What kind of files can be input to the system?</h3>
              <p class="det-p-manual answer_faq">Users can upload files in .csv files. The format of the files to be uploaded in each step is described in the <a href="manual.php#upload_link" target="_blank">GeNet manual</a>.</p>
            </hgroup>
          </div>
        </div>
      </div>             
    </div>
  </section>
  <!--/ step_1-->

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

  $('.h3_faq').click(function(){
    $('.answer_faq').hide(0);

    $(this).next().addClass('animated bounce');
    $(this).next().show(0);
  });

</script>