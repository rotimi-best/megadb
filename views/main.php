<!DOCTYPE html>
<html>
<head>
	<title>Mega Data Base</title>
  <!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css" media="screen">
-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://localhost/phpsandbox/megadb/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/phpsandbox/megadb/assets/css/custom.min.css">

    

<script src=""></script>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">



</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container-fluid">
				<div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>


        <div class="collapse navbar-collapse" id="navbarResponsive">

              <a class="navbar-brand" href="#"> MegaDB </a>
         <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>lecturehalls/">Lecture Halls</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>teachers/">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>statistics/">Statistics</a>
          </li>
        </ul>
        <?php else: ?>
          <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
          </li>
           </ul>
        <?php endif; ?>
        
        <ul class="nav navbar-nav ml-auto">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>home/about/"><?php echo $_SESSION['user_data']['university_name']; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Log Out</a></li>

          <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login </a></li>
        <?php endif; ?>
        </ul>
      </div>
      </div>
    </nav>



    <div class="container">
      <div class="page-header" id="banner">
        <?php Messages::display(); ?>
        <?php require($view);  ?>
      </div>

    </div>

  </body>
  <footer class="lead text-center border-secondary mb-1 bg-dark" id="footer">
      <p>Created by Ibitoye Rotimi Best</p><br>
      <p>Facebook: Rotimiibitoye Best || Youtube: Rotimi Best || Instagram: rotimi.best</p>
  </footer>
</html>
