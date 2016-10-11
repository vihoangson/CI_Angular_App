<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo base_url(); ?>">
    <title>AngularJS and CodeIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="static/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
      var BASE_URL = "<?php echo base_url(); ?>";
    </script>
  </head>
  <body>
    <div class="container">
      <div ng-app="book">
        <div class="page-header">
          <h1>Book</h1>
        </div>
        <div ng-view></div>
      </div>
    </div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular-resource.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/scripts.js"></script>

  </body>
</html>