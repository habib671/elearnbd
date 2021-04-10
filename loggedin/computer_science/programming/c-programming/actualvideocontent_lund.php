<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../computer_science/java/accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>Learn Academy</title>
</head>

 <body>
 <!-- <header>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
      //  if (isset($_SESSION['userId'])){
      //    echo '<a href="../../profile.php" name="profile">Profile</a>
      //          <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
      //  }
        ?>
      </div>
 </header> -->

  <?php
      $lien="";
      $nom_vid="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/xYQFvuTsOAI";
            $nom_vid="Translator program - Compiler,Interpreter,Assembler";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/WDX1gLtCIlc";
            $nom_vid="Introduction to C program";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/HWyEt9Q_2pE";
            $nom_vid=" Keyword, Variable, data type";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/6y2TkyxlMcw";
            $nom_vid="Arithmetic Operator";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/6dxhmo1vQIw";
            $nom_vid="Fahrenheit to Centigrade C program";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/3Ovy79Gszvc";
            $nom_vid="Conditional control statement - If,else syntax & Flowchart";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/U_h--1GeMRc";
            $nom_vid="দুইটি সংখ্যার মধ্যে বৃহত্তম সংখ্যা নির্ণয়ের জন্য C program";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/W4TBEgB9PeI";
            $nom_vid="vowel/consonant তা নির্ণয়ের জন্য C program";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/Yny-iLKFJII";
            $nom_vid="switch | Calculator";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/2kuf1VrxotM";
            $nom_vid=" Loop | for, while, do while loop";
            break;
         
            break;
          default:
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_chemical.php" style="color:white;">Chemical Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering_chemical_lund.php" style="color:white;">Mass Transfer</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="950" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <!-- Détails chapitre 1 -->
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Chapter 1 : All the Lectures
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <a href="actualvideocontent_lund.php?video=1">&#10170  Convection versus diffusion </a><br>
                <a href="actualvideocontent_lund.php?video=2">&#10170  Determining diffusivity (CT2 Intro) </a><br>
                <a href="actualvideocontent_lund.php?video=3">&#10170  Estimating diffusivity: Simple model</a><br>
                <a href="actualvideocontent_lund.php?video=4">&#10170  Diffusivity: D_AB versus D_BA</a><br>
                <a href="actualvideocontent_lund.php?video=5">&#10170  Approaching advanced diffusivity model</a><br>
                <a href="actualvideocontent_lund.php?video=6">&#10170  Estimating diffusivity, advanced model</a><br>
                <a href="actualvideocontent_lund.php?video=7">&#10170  Reading logarithmic diagrams (with high accuracy)</a><br>
                <a href="actualvideocontent_lund.php?video=8">&#10170  Estimating diffusivity: Contribution method</a><br>
                <a href="actualvideocontent_lund.php?video=9">&#10170  Diffusion in liquids</a><br>
                <a href="actualvideocontent_lund.php?video=10">&#10170  Convection AND diffusion</a><br>
                <a href="actualvideocontent_lund.php?video=11">&#10170  Equimolar counter diffusion</a><br>
                <a href="actualvideocontent_lund.php?video=12">&#10170  Diffusion through stagnant component</a><br>
                <a href="actualvideocontent_lund.php?video=13">&#10170  Diffusivity versus Mass transfer coefficients</a><br>
                <a href="actualvideocontent_lund.php?video=14">&#10170  Two Film Theory</a><br>
                <a href="actualvideocontent_lund.php?video=15">&#10170  Two Film Theory example + Quick summary</a><br>
                <a href="actualvideocontent_lund.php?video=16">&#10170  Overall Mass Transfer Coefficient</a><br>
                <a href="actualvideocontent_lund.php?video=17">&#10170  Penetration theory</a><br>
                <a href="actualvideocontent_lund.php?video=18">&#10170  Boundary Layer Theory</a><br>
                <a href="actualvideocontent_lund.php?video=19">&#10170  Reynolds analogy and Chilton Colburn analogy</a><br>
                <a href="actualvideocontent_lund.php?video=20">&#10170  Mass transfer in 3D</a><br>
                <a href="actualvideocontent_lund.php?video=21">&#10170  Non-stationary mass transfer and Swedish meat balls</a><br>
                <a href="actualvideocontent_lund.php?video=22">&#10170  Introduction to COMSOL Multiphysics</a><br>
              </div>
            </div>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
