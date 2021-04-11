<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/elearnbd/style.css">
  <link rel="stylesheet" href="http://localhost/elearnbd/styleloggedin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>E-LearnBD</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light font-weight-bold">
    <a class="navbar-brand" href="http://localhost/elearnbd/">
      <img src="http://localhost/elearnbd/images/logo.png" height="40" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/elearnbd/loggedin.php">All Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/elearnbd/loggedin/blog">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/elearnbd/loggedin/resource">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/elearnbd/loggedin/quiz">Quiz</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION['userId'])) {
          echo '<li class="nav-item">
          <a class="nav-link" href="http://localhost/elearnbd/loggedin/profile.php" name="profile">&#128100; ' . $_SESSION['userUid'] . '</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-light btn btn-secondary btn-sm mx-2" role="button" href="http://localhost/elearnbd/includes/logout.inc.php" name="logout-submit">SIGN OUT</a>
          </li>';
        } else {
          echo '<li class="nav-item">
          <a class="nav-link text-light btn btn-secondary btn-sm mx-2" role="button" href="http://localhost/elearnbd/signin.php">SIGN IN</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-light btn btn-info btn-sm mx-2" role="button" href="http://localhost/elearnbd/signup.php">SIGN UP</a>
          </li>';
        }
        ?>
      </ul>
    </div>
  </nav>