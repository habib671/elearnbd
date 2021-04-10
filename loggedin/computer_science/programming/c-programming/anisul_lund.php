<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../../computer_science/java/accordionstyle.css">
<link rel="stylesheet" href="../../../../style.css">
<title>Learn Academy</title>
</head>

 <body>
 <!-- <header>
   <div class="topnav d-flex justify-content-center" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
      //  if (isset($_SESSION['userId'])){
      //    echo '<a href="../../profile.php" name="profile">Profile</a>
      //          <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
      //  }
        ?>
      </div>
 </header> -->

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">C programming with Anisul Islam</li>

  </ol>
</nav>


  <div class="accordion" id="accordionExample">
	
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           All the Lectures
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_lund.php?video=1">&#10170  Translator program - Compiler,Interpreter,Assembler </a><br>
        <a href="actualvideocontent_lund.php?video=2">&#10170  Introduction to C program </a><br>
        <a href="actualvideocontent_lund.php?video=3">&#10170  Keyword, Variable, data type</a><br>
        <a href="actualvideocontent_lund.php?video=4">&#10170  Arithmetic Operator</a><br>
        <a href="actualvideocontent_lund.php?video=5">&#10170  Fahrenheit to Centigrade C program</a><br>
        <a href="actualvideocontent_lund.php?video=6">&#10170  Conditional control statement - If,else syntax & Flowchart</a><br>
        <a href="actualvideocontent_lund.php?video=7">&#10170  দুইটি সংখ্যার মধ্যে বৃহত্তম সংখ্যা নির্ণয়ের জন্য C program</a><br>
        <a href="actualvideocontent_lund.php?video=8">&#10170  vowel/consonant তা নির্ণয়ের জন্য C program</a><br>
        <a href="actualvideocontent_lund.php?video=9">&#10170  switch | Calculator</a><br>
        <a href="actualvideocontent_lund.php?video=10">&#10170 Loop | for, while, do while loop</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../../footer.php" ?>
