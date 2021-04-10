<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../java/accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>Learn Academy</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/5faBF5MgTcA";
            $nom_vid="০২.০১. অধ্যায় ২ : ভেক্টর - Vector and scalar quantities (ভেক্টর এবং স্কেলার রাশি)";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/GxgiEDfAEAw";
            $nom_vid="০২.০২. অধ্যায় ২ : ভেক্টর - ভেক্টর রাশি নির্দেশনা এবং তল ভেক্টর";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/sHzt_gc6MC8";
            $nom_vid="Affichage En Console";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/AKXFTQp1pOY";
            $nom_vid="Saisie Utilisateur";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/QD9aJCNyPiA";
            $nom_vid="Variables et Constantes";
            $chapitre="1";
            break;
            case '6':
              $lien="https://www.youtube.com/embed/X7uw6E883tI";
              $nom_vid="Variables et Constantes";
              $chapitre="1";
              break;
          default:
         
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_formationvideo.php" style="color:white;">Cours C++</a></li>
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
          <?php
            if (isset($chapitre)){
              switch ($chapitre) {
                case '1':
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapitre 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=1">&#10170  Introduction</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=2">&#10170  Premier Code</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=3">&#10170  Affichage En Console</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=5">&#10170  Saisie Utilisateur</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapitre 2 : Manipulation des types de données
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=4">&#10170  Variables et Constantes</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=7">&#10170  Les Tableaux</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=8">&#10170  Pointeurs et Allocation Mémoire</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=9">&#10170  Structures et Enumérations</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapitre 3 : Programmation procédurale
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=6">&#10170  Les fonctions</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapitre 4 : Programmation Orienté Objet
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=10">&#10170  Programmation Objet</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=11">&#10170  Constructeurs et Attributs</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=12">&#10170  Méthodes et Accesseurs</a><br>
                      </div>
                    </div>
                  </div>';
                  break;

              }
            }
           ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
