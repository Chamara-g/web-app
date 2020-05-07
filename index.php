<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GeNet Guide</title>

  <link rel="icon" href="img/logo/favicon.png" sizes="32x32" />
  <link rel="icon" href="img/logo/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="img/logo/favicon.png" />

  <meta name="description" content="GeNet is a microarray gene expression analysis tool kit. It is a python based web application that can be used to preprocess, visualize, analyze, model, and predict results using microarray gene expression data">
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
        <a class="navbar-brand">
            <img src="img/logo/logo.png" alt="logo" style="width:115px; margin-top: -3px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a style="color: #5fcf80;">Home</a></li>
          <li><a href="user_guide.php">User guide</a></li>
          <li><a href="manual.php">Manual</a></li>
          <li><a href="nomenclature.php">Nomenclature</a></li>
          <li><a href="crash_courses.php">Crash course</a></li>
          <li><a href="faq.php">Faq</a></li>
<!--           <li class="btn-trial"><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

  <!--Modal box-->
<!--   <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">

                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>

                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">

                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>

                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div> -->
  <!--/ Modal box-->

  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Welcome to GeNet</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">From unrefined data to meaningful insights</p>
              <p class="small-text">“GeNet is a microarray gene expression analysis tool kit. It is a python based web application that can be used to preprocess,<br>visualize, analyze, model, and predict results using microarray gene expression data”</p>
              <a href="user_guide.php" class="btn get-quote">User guide</a>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  <!--what is genet-->
  <section class="section-padding" style="padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>What is Genet?</h2>
          <p>Microarray is a widely used technology in biomedical research. The proper analysis of microarray gene expression data is used in revealing underlying mechanisms of biological processes. To make this process easier, we present you GeNet, an easy to use python-based web application integrated with a machine learning framework and statistical methods. GeNet is designed carefully targeting a wide range of users. Bio informaticians, researchers, computer scientists, statistical analysts, etc can use the application without prior knowledge in other fields. It provides a hassle-free and interactive user experience that makes the analysis process much simpler and enjoyable. GeNet provides many analysis steps including different techniques for pre-processing, visualization, modeling, prediction, and validation of the results with a user-friendly GUI. Get started and explore more with GeNet.</p>
          <hr class="bottom-line">
        </div>
      </div>
      <div class="row">
  <!-- Modal -->
    <div class="modal-dialog-1">
      <div class="modal-content" style="box-shadow: none; border: 2px solid #5fcf80">
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9" style="box-shadow: none;">
              <iframe src="https://www.youtube.com/embed/yz04R_PKH2M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
      </div>
<!--       <div class="row">
        <div class="header-section text-center">
          <p>GeNet is a ready-to-go web application that does not need any external requirements. By using GeNet you can easily</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-6">
          <ul style="list-style-type: square;">
            <li>Perform data preprocessing</li>
            <li>Perform statistical analysis</li>
            <li>Select the most liable subsets of genes related to a target</li>
            <li>Perform modeling and prediction</li>
            <li>Visualize data using box plots, scatter plots and histograms, etc</li>
            <li>Validate your results</li>
            <li>Obtain analysis results</li>
          </ul>           
        </div>
        <div class="col-sm-2"></div>       
      </div> -->      
    </div>
  </section>
  <!--/ what is genet-->

  <!--Feature-->
  <section id="feature" class="section-padding-index">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Features</h2>
          <p>GeNet provides you with many features that make microarray gene expression analysis simple and hassle-free.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Hassle-free User Experience</h4>
                <p>GeNet is designed especially for the use of those with no or less programming knowledge or experience. It provides an easy to use graphical user interface that can be easily accessed and used by anyone.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-code"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Simple Tips and Guides along the way</h4>
                <p>Confused about how to use the application? GeNet got you covered! We provide you simple, easy to understand tips that would guide you through each step in the application.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-arrows-alt"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Data Pre-processing</h4>
                <p>Microarray gene expression data is messy and noisy. GeNet offers you a number of methods to clean and organize your data. Remember it all depends on your data set! The cleaner the data the more productive your results will be.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-database"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Visualization</h4>
                <p>Visualize the behavior and patterns of your data with GeNet for better understanding. Rather than being overwhelmed by the huge number of numerical data why not try distilling it into visual graphics where you can easily grab the complex patterns and relationships.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-bar-chart"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Selecting the best set of genes</h4>
                <p>Understanding microarray gene expression data can be exhausting due to its high dimensionality. It usually contains data about thousands of genes. How can you select the set of most impactful genes out of those? GeNet is there for the rescue! It provides you with efficient methods and allows you to extract the most reliable set of genes related to your data set.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-filter"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Analyzing your results</h4>
                <p>Elaborate the results you get by comparing various models and using standard techniques. GeNet offers you the facility to see in-depth the operation of your process and results. It guides you through step by step detailed analysis of the methodology and results.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-pie-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Validation</h4>
                <p>Making sure the results you got are meaningful is one of the main challenges in microarray gene expression analysis. GeNet offers you the opportunity to see through your results and compare them against already established biological data sources. It’s always better to have some validity than blindly obtaining results.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-check-circle-o"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Modeling & Prediction</h4>
                <p>Modeling is the process of generating predictions based on the patterns extracted from your data. You can explore with new datasets and predict future results. This will easily allow you to classify a new data set.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-thermometer-half"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Download Files and Images</h4>
                <p>GeNet provides you with the facility to download the result files and images in the most convenient formats. You can download, manipulate, and use them in external applications as you desire.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-download"></i>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </section>
  <!--/ feature-->

  <!--Organisations-->
<!--   <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>Say NO!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Says Yes!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Can't Say!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
              <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
            </hgroup>
            <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Organisations-->
  <!--Cta-->
  <section id="cta-2" style="background-color: #5fcf8038;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">Subscribe Now</h2>
          <p class="cta-2-txt">Stay in touch with us for the latest updates. Subscribe to us to get the latest news.</p>
          <div class="cta-2-form text-center">
            <form method="post" id="workshop-newsletter-form">
              <input class="subscribe_email_middle" placeholder="Enter Your Email Address" type="email">
              <input id="subscribe_click" class="cta-2-form-submit-btn" value="Subscribe" type="button">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Cta-->
  <!--work-shop-->
<!--   <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Upcoming Workshop</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor HTML5 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-css3 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor CSS3 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-joomla color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Joomla Workshop</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ work-shop-->
  <!--Faculity member-->
<!--   <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Meet Our Faculty Member</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Bryan Johnson</p>
              <p class="pm-staff-profile-title">Lead Software Engineer</p>

              <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Bryan Johnson</p>
              <p class="pm-staff-profile-title">Lead Software Engineer</p>

              <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Bryan Johnson</p>
              <p class="pm-staff-profile-title">Lead Software Engineer</p>

              <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Faculity member-->
  <!--Testimonial-->
  <section id="testimonial" class="section-padding-index">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">See What Our Customer Are Saying?</h2>
          <p class="white">GeNet team always strives to give the best experience for our customers. It is your feedback and suggestions that make us do better.</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"GeNet is very easy to use. Recommend it to anyone without prior experience."</p>
            <p class="text-name">Shehan Shaman - Student</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"I have struggled a lot with gene expression data preprocessing and feature selection in the past. GeNet made it so simple and I was amazed to see the accuracy of the outputs."</p>
            <p class="text-name">Kaveesha Dilshani - Student</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->
  <!--Courses-->
<!--   <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Courses</h2>
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
            <a href="#"></a>
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
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Courses-->
  <!--Pricing-->
<!--   <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Pricing</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            
            <div class="pricing-head">
              <h4>Monthly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">200</span>
            </div>

            
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            
            <div class="pricing-head">
              <h4>Quarterly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">800</span>
            </div>

           
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
         
            <div class="pricing-head">
              <h4>Year Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
            </div>

            
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Pricing-->
  <!--Contact-->
  <section id="contact" class="section-padding-index">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <p>Have any doubts? Contact us for further inquiries.</p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control text-div-tag" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->

<?php include 'footer.php';?>

</body>

</html>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
<script src="contactform/subscribe.js"></script>
<script src="js/sweetalert2@9.js"></script>
