<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../java/accordionstyle.css">
  <link rel="stylesheet" href="../../../style.css">
  <title>Learn Academy</title>
</head>

<body>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
      <li class="breadcrumb-item"><a href="../../../loggedin.php" style="color:white;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;font-size:bold;">Computer Science</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
      <li class="breadcrumb-item active" aria-current="page" style="color:white;">Cours C++</li>

    </ol>
  </nav>
  <!-- the actual content of this course ( Cours C++ )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
    <!-- Détails chapitre 1 -->
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            অধ্যায় ২ : ভেক্টর
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <a href="actualvideocontent_formationvideo.php?video=1">&#10170 ০২.০১. অধ্যায় ২ : ভেক্টর - Vector and scalar quantities (ভেক্টর এবং স্কেলার রাশি)</a><br>
          <a href="actualvideocontent_formationvideo.php?video=2">&#10170 ০২.০২. অধ্যায় ২ : ভেক্টর - ভেক্টর রাশি নির্দেশনা এবং তল ভেক্টর</a><br>
        </div>
      </div>
    </div>
    <!-- Détails chapitre 2 -->
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            অধ্যায় ৩ : গতি - দূরত্ব ও সরণ
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <a href="actualvideocontent_formationvideo.php?video=4">&#10170 ০৩.০১. অধ্যায় ৩ : গতি - দূরত্ব ও সরণ (Distance and Displacement)</a><br>
          <a href="actualvideocontent_formationvideo.php?video=7">&#10170 ০৩.০২. অধ্যায় ৩ : গতি - দ্রুতি ও বেগ (Speed and Velocity)</a><br>
        </div>
      </div>
    </div>
    <!-- Détails chapitre 3 -->
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            অধ্যায় ৫ : কাজ, ক্ষমতা ও শক্তি - কাজ (Work)
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <a href="actualvideocontent_formationvideo.php?video=4">&#10170 ০৫.০১. অধ্যায় ৫ : কাজ, ক্ষমতা ও শক্তি - কাজ (Work)</a><br>
          <a href="actualvideocontent_formationvideo.php?video=7">&#10170 ০৫.০২. অধ্যায় ৫ : কাজ, ক্ষমতা ও শক্তি - বলের দ্বারা কাজ বা ধনাত্মক কাজ (Positive Work)</a><br>
        </div>
      </div>

    </div>

    <?php require "../../../footer.php" ?>