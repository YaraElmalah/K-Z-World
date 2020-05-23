<!--


Template Name: K-Z World
Email: yaraelmalah90@gmail.com
Last Modified: 24 - 05 - 2020 
By: Yara ElMalah


-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css Files-->
    <link rel="stylesheet" href="<?php echo $cssFiles; ?>bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $cssFiles; ?>all.min.css" />
    <link rel="stylesheet" href="<?php echo $cssFiles; ?>main.css" />
    <link rel="stylesheet" href="<?php echo $cssFiles; ?>media.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300;400;600&display=swap"/>
    <title>K-Z World</title>
</head>
<body>
<!--Start Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">K - <span>Z</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Movies<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Romance</a></li>
            <li><a href="#">Science Fiction</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Marvel</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">DC</a></li>
          </ul>
        </li>
          <li><a href="#">Anime</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Series <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">TV Series</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Netflix</a></li>
          </ul>
        </li>
        <li><a href="#">Books</a></li>
        <li><a href="#"><i class="fas fa-cookie-bite fa-lg" title='Are we use Cookies?'></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--End Navbar-->
