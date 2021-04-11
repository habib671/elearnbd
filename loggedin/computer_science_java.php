<?php
require "../header.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../loggedin.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science.php">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page">Java</li>

  </ol>
</nav>

<div class="java-container">

  <div class="card">
    <img src="img1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Apprendre la programmation avec JAVA</p>

      <p class="card-text details">Language : French</p>
      <p class="card-text details">Tutor : Dominique Liard</p>

    </div>
    <a href="computer_science/java/description_dominique.php" class="btn btn-primary" target="_blank">View Description !</a><br>
    <a href="computer_science/java/computer_science_java_dominique.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card">
    <img src="img2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Learn Java Programming | Video Tutorial for Beginners</p>

      <p class="card-text details">Language : English</p>
      <p class="card-text details">Tutor : LearningLad </p>
    </div>
    <a href="computer_science/java/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
    <a href="computer_science/java/computer_science_java_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card">
    <img src="img3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Java Programs For Practice</p>
      <p class="card-text details">Language : English</p>
      <p class="card-text details ">Tutor : Alex Lee </p>
    </div>
    <a href="computer_science/java/description_alexlee.php" class="btn btn-primary" target="_blank">View Description !</a><br>
    <a href="computer_science/java/computer_science_java_alexlee.php" class="btn btn-primary">View Course !</a>
  </div>

</div>

<?php
require "../footer.php";
?>