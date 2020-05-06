<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GeNet | noname</title>

  <link rel="icon" href="img/logo/favicon.png" sizes="32x32" />
  <link rel="icon" href="img/logo/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="img/logo/favicon.png" />

  <meta name="description" content="Learn some of the most used terminologies in microarray gene expression analysis using statistical methods and machine learning techniques">
  <meta name="keywords" content="genet, gene expression, microarray">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">  

</head>

<style type="text/css">

  .img-div{
    border: 2px solid #5FCF80;
    margin-top: 15px;
  }
  .det-p-head{
    padding: 10px 0 0 0;
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
        <a class="navbar-brand" href="index.php">
            <img src="img/logo/logo.png" alt="logo" style="width:115px; margin-top: -3px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="user_guide.php">User guide</a></li>
          <li><a href="manual.php">Manual</a></li>
          <li><a style="color: #5fcf80;">Nomenclature</a></li>
          <li><a href="crash_courses.php">Crash course</a></li>
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
              <h2 class="text-dec">Nomenclature</h2>
            </div>
            <div class="intro-para text-center quote">
<!--               <p class="big-text">From unrefined data to meaningful insights</p> -->
              <p class="small-text">“Learn some of the most used terminologies in microarray gene expression analysis using statistical methods and machine learning techniques”</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  <!--gene_expression-->
  <section id="gene_expression" class="section-padding-nomenclature">
    <div class="container">
      <div class="row">
        <p class="det-p-head"><b>Gene expression</b></p>
        <p class="det-p-manual">Gene expression is the process by which the information encoded in a gene is used to direct the assembly of a protein molecule. The transcription of genomic DNA to produce mRNA is the first step in the process of protein synthesis, and differences in gene expression are responsible for morphological and phenotypic differences.</p>
      </div>                          
    </div>
  </section>
  <!--/ gene_expression-->

  <!--Microarray technology-->
  <section id="microarray_link" class="section-padding-nomenclature">
    <div class="container">
      <div class="row">
        <p class="det-p-head"><b>Microarray technology</b></p>
        <p class="det-p-manual">Microarray technology is one method to monitor the expression levels of thousands of genes under a particular condition. A microarray is typically a glass slide on to which DNA molecules are fixed in an orderly manner at specific locations called spots (or probes). These spots are later identified in this document by probe_IDs. A microarray may contain thousands of spots and each spot may contain a few million copies of identical DNA molecules which uniquely corresponds to a gene. There are many methods in microarray data analysis, but one of the most popular methods is to compare the expression levels of a set of genes under two conditions Condition A and a reference condition, Condition B.  RNA is extracted from the two cells and is labeled with different dyes (red and green) during the synthesis of cDNA by reverse transcriptase. Following this step, cDNA is hybridized onto the microarray slide, where each cDNA molecule representing a gene will bind to the spot containing its complementary DNA sequence. The microarray slide is then excited with a laser at suitable wavelengths to detect the red and green dyes. The intensity of the colors of the final image will give a measurement of the amount of cDNA bound to a spot. The amount of cDNA bound to a certain spot is directly proportional to the initial number of RNA molecules present for that gene. The final image will undergo different image processing techniques to reduce background noise and the final expression level can be expressed as a ratio of the spot intensities between the gene set corresponding to condition A and the reference condition, condition B. The expression ratio T_k  is defined as </p>
        <p class="det-p-manual">T_k=R_k/G_k</p>
        <p class="det-p-manual">where, for each gene k on the array, where R_k represents the spot intensity metric for the test sample and G_k represents the spot intensity metric for the reference sample.</p>
        <p class="det-p-manual">If the intensity of the test condition is higher, which is if for a particular gene k if the spot intensity metric for the test sample is higher than the reference sample, it is up-regulated and vise versa. If there is no significant change in the expression levels, the expression ratio becomes 1. In this method the mapping interval of the up-regulated and down-regulated gene sets is different. Due to reasons like this, there are other transformation methods practiced to represent the expression ratio level as well. How an expression level is expressed depends on the dataset which has been used on each study. </p>
        <p class="det-p-manual">High throughput and the noise of data in microarray gene expression data has made extracting useful information from them challenging. GeNet simplifies this task by providing various methods that can be used in the data pre-processing steps and selecting the most prominent genes affecting a target(feature selection) etc.</p>
        <p class="det-p-manual">Since microarray technology can determine the expression levels of thousands of genes from a single array of chemical sensors, it has become a popular gene expression screening tool in the molecular investigation of various diseases. Gene expression data from both samples with the disease and without the disease can be used to identify which genes could have an impact on the disease. GeNet has provided a framework using machine learning techniques and statistical analysis that could identify the biomarker genes for a particular disease. GeNet also provides the facility to predict the status of the sample, whose current status is not known yet.</p>
      </div>                           
    </div>
  </section>
  <!--/ Microarray technology-->

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

$(window).on('load', function() {
    $('.animate_left').addClass('animated bounceInLeft');
});
$(window).on('load', function() {
    $('.animate_right').addClass('animated bounceInRight');
});

</script>