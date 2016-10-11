<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Multipress - Responsive Multipurpose HTML5 Template">
  <meta name="author" content="">

  <title> Premium Layers - Responsive HTML5 vCard Template</title>
  <base href="/static/template/vcard/">
  <!-- Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">

  <!-- Google Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800,700italic,600italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Neuton:400,200,300' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="/js/libs/respond.min.js"></script>
  <![endif]-->

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Theme Styles CSS-->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" >
  <link rel="stylesheet" href="css/flexslider.css"/>
  <link rel="stylesheet" href="css/nivo-lightbox.css" />
  <link rel="stylesheet" href="images/themes/default/default.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <!--[if lt IE 9]>
  <script src="/js/libs/html5.js"></script>
  <![endif]-->

  <!-- Style Switch -->
  <link rel="stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />

</head>
<body ng-app="vcard">

<!-- LOADING MASK -->
<div id="mask">   
    <div class="loader">
        <img src="images/loading.gif" alt='loading'>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container no-padding">
    <div class="row">
      <div class="col-md-3 l-content">
        <div class="profile-pic">
          <div class="pic-bg"><img src="images/profile-avatar.png" class="img-responsive" alt=""/></div>
        </div>
        <nav>
        <ul class="navigation">
          <li><a href="/book#">Profile <i class="fa fa-user"></i></a></li>
          <li><a href="/book#/news">Work <i class="fa fa-briefcase"></i></a></li>
          <li><a href="/book#/resume">Resume <i class="fa fa-file-text"></i></a></li>
          <li><a href="/book#/blog">Blog <i class="fa fa-comment"></i></a></li>
          <li><a href="/book#/contact">Contact <i class="fa fa-envelope"></i></a></li>
        </ul>
        </nav>
      </div>

      <div class="col-md-9 r-content">
        <div class="flexslider_">
          <div class="slides">
          <!-- ============ ============ ============  ============  ============  ============  -->
            <div ng-view></div>
            <!-- ============ ============ ============  ============  ============  ============  -->
          </div>
        </div>

        <!-- FOOTER -->
        <footer>
          <div class="row">
            <div class="col-md-7">
              <p>&copy; 2014 Robb Armstrong. All Rights Reserved</p>
            </div>
            <div class="col-md-5">
              <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>
<!-- MAIN CONTENT -->

<!-- JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/main.js"></script>
<script src="js/contact.js"></script>
<script src="js/animations.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular-resource.min.js"></script>

<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/vcard_scripts.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>



</body>
</html>