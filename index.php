<!DOCTYPE html>
<html lang="en">

<head>
  <title>E-LearnBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">E-LearnBD</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Courses</a></li>
                <li><a href="#features-section" class="nav-link">Features</a></li>
                <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="#teachers-section" class="nav-link">Team</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="instructor.php" class="nav-link"><span>Become a instructor</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('http://images.freecreatives.com/wp-content/uploads/2016/04/Study-Quotes-Wallpaper-1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="sign">
                <!--sign-->
                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup'])) ? 'right-panel-active' : ''; ?>" id="container">
                  <div class="form-container sign-up-container">
                    <form action="includes/signup1.inc.php" method="post" id="signup_form">
                      <h1 class="title">Sign Up</h1>
                      <br>
                      <?php
                      if (isset($_GET['errorp'])) {
                        if ($_GET['errorp'] == "emptyfields") {
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        } else if ($_GET['errorp'] == "invalidmailuid") {
                          echo '<div style="color:red;">Invalid username and e-mail !</div>';
                        } else if ($_GET['errorp'] == "invaliduid") {
                          echo '<div style="color:red;">Invalid username !</div>';
                        } else if ($_GET['errorp'] == "invalidmail") {
                          echo '<div style="color:red;">Invalid e-mail !</div>';
                        } else if ($_GET['errorp'] == "passwordcheck") {
                          echo '<div style="color:red;">Passwords don\'t match!</div>';
                        } else if ($_GET['errorp'] == "usertaken") {
                          echo '<div style="color:red;">Username is already taken!</div>';
                        }
                      } elseif (isset($_GET['signup'])) {
                        if ($_GET['signup'] == "success")
                          echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                      }
                      ?>
                      <div id="error_signup_name"></div>
                      <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])) {
                                                                                                  if ($_GET['errorp'] == 'invalidmail' || $_GET['errorp'] == 'passwordcheck' || $_GET['errorp'] == 'emptyfields') {
                                                                                                    echo  isset($_GET['uid']) ? $_GET['uid'] : '';
                                                                                                  } else {
                                                                                                    echo '';
                                                                                                  }
                                                                                                }  ?>" />
                      <div id="error_signup_email"></div>
                      <input type="email" id="mail_signup" name="mail" placeholder="E-mail" value="<?php if (isset($_GET['errorp'])) {
                                                                                                      if ($_GET['errorp'] == 'invaliduid' || $_GET['errorp'] == 'passwordcheck' || $_GET['errorp'] == 'emptyfields' || $_GET['errorp'] == 'usertaken') {
                                                                                                        echo  isset($_GET['mail']) ? $_GET['mail'] : '';
                                                                                                      } else {
                                                                                                        echo '';
                                                                                                      }
                                                                                                    }  ?>" />
                      <div id="error_signup_pwd1"></div>
                      <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                      <div id="error_signup_pwd2"></div>
                      <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                      <button>Sign Up</button>
                    </form>

                  </div>
                  <div class="form-container sign-in-container">
                    <form action="includes/login.inc.php" method="post" id="signin_form">
                      <h1 class="title">Sign in</h1>
                      <br>
                      <?php
                      if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        } else if ($_GET['error'] == "wrongpwd") {
                          echo '<div style="color:red;">Wrong password!</div>';
                        } else if ($_GET['error'] == "nomatch") {
                          echo '<div style="color:red;">There\'s no match for your email !</div>';
                        } elseif (isset($_GET['login'])) {
                          if ($_GET['signup'] == "success")
                            echo '<div style="color:green;">Sign in Successful !</div>';
                        }
                      } ?>
                      <div id="error_signin_mail"></div>
                      <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail" value="<?php if (isset($_GET['error'])) {
                                                                                                                                    if ($_GET['error'] == "wrongpwd" || $_GET['error'] == "emptyfields") {
                                                                                                                                      echo  isset($_GET['mail']) ? $_GET['mail'] : '';
                                                                                                                                    } else {
                                                                                                                                      echo '';
                                                                                                                                    }
                                                                                                                                  }  ?>" />
                      <div id="error_signin_pwd"></div>
                      <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                      <a href="mail_input.php">Forgot your password?</a>
                      <button>Sign In</button>
                    </form>
                  </div>
                  <div class="overlay-container">
                    <div class="overlay">
                      <div id="overlay-left" class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                      </div>
                      <div class="overlay-panel overlay-right">
                        <h1>Hello, Learner!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="site-section courses-title" id="courses-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
          <h2 class="section-title">Courses</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <div class="row">

        <div class="owl-carousel col-12 nonloop-block-14">





          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="https://media-exp1.licdn.com/dms/image/C5603AQFolooHyTsi4g/profile-displayphoto-shrink_800_800/0/1608560422202?e=1623283200&v=beta&t=_jtYh77Ds9qpRdFicZtvB5oHkMZQ7Ff87boLRoMHWyg" alt="Image" class="img-fluid" style="height:215px;">
            </figure>
            <div class="course-inner-text py-4 px-4">
              <span class="course-price">$10</span>
              <div class="meta"><span class="icon-clock-o"></span>1 Lessons / 10 week</div>
              <h3><a href="loggedin/computer_science/programming/c-programming/description_lund.php">C programming with Anisul</a></h3>
              <p>Learn the basics of the C programming with Anisul Islam. </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"><span class="icon-users"></span> 3,193 students</div>
              <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
            </div>
          </div>



          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="loggedin/img5.png" alt="Image" class="img-fluid" style="height:215px;">
            </figure>
            <div class="course-inner-text py-4 px-4">
              <span class="course-price">$0</span>
              <div class="meta"><span class="icon-clock-o"></span>3 Lessons / 9 week</div>
              <h3><a href="loggedin/computer_science/c++/description_learninglad.php">C++</a></h3>
              <p>Learn the most famous programming language. </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"><span class="icon-users"></span> 1,123 students</div>
              <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 8</div>
            </div>
          </div>

          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="images/img_5.jpg" alt="Image" class="img-fluid" style="height:215px;">
            </figure>
            <div class="course-inner-text py-4 px-4">
              <span class="course-price">$10</span>
              <div class="meta"><span class="icon-clock-o"></span>2 Lessons / 5 week</div>
              <h3><a href="loggedin/computer_science/java/description_learninglad.php">JAVA</a></h3>
              <p>java is a must learn versatile language. </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"><span class="icon-users"></span> 1,523 students</div>
              <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 6</div>
            </div>
          </div>

          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="images/img_6.jpg" alt="Image" class="img-fluid" style="height:215px;">
            </figure>
            <div class="course-inner-text py-4 px-4">
              <span class="course-price">$0</span>
              <div class="meta"><span class="icon-clock-o"></span>5 Lessons / 7 week</div>
              <h3><a href="loggedin/computer_science/python/description_telusko.php">Python</a></h3>
              <p>Begin your journey in the world of AI. </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"><span class="icon-users"></span> 2,453 students</div>
              <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 5</div>
            </div>
          </div>

        </div>



      </div>
      <div class="row justify-content-center">
        <div class="col-7 text-center">
          <button class="customPrevBtn btn btn-primary m-1">Prev</button>
          <button class="customNextBtn btn btn-primary m-1">Next</button>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section" id="features-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
          <h2 class="section-title">Features</h2>
          <a href="loggedin/all_courses.php" class="btn btn-outline-primary btn-lg m-3">All Courses</a>
          <a href="loggedin/blog" class="btn btn-outline-primary btn-lg m-3">Blogs</a>
          <a href="loggedin/resource" class="btn btn-outline-primary btn-lg m-3">Resourses</a>
          <a href="loggedin/quiz" class="btn btn-outline-primary btn-lg m-3">Quizes</a>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section" id="programs-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
          <h2 class="section-title">Our Programs</h2>
          <p>We aim to make studying SIMPLE, EASY and ACCESSIBLE to EVERYONE thus we collected the BEST COURSES in the world in one place.</p>
        </div>
      </div>
      <div class="row mb-5 align-items-center">
        <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
          <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
          <h2 class="text-black mb-4">We Are Excellent In Education</h2>
          <p class="mb-4">Education is an art and we are the artists.</p>

          <div class="d-flex align-items-center custom-icon-wrap mb-3">
            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
            <div>
              <h3 class="m-0">2,931 Yearly Graduates</h3>
            </div>
          </div>

          <div class="d-flex align-items-center custom-icon-wrap">
            <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
            <div>
              <h3 class="m-0">50 Universities Worldwide</h3>
            </div>
          </div>

        </div>
      </div>

      <div class="row mb-5 align-items-center">
        <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h2 class="text-black mb-4">Strive for Excellent</h2>
          <p class="mb-4">our goal is your success.</p>

          <div class="d-flex align-items-center custom-icon-wrap mb-3">
            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
            <div>
              <h3 class="m-0">2,931 Yearly Graduates</h3>
            </div>
          </div>

          <div class="d-flex align-items-center custom-icon-wrap">
            <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
            <div>
              <h3 class="m-0">50 Universities Worldwide</h3>
            </div>
          </div>

        </div>
      </div>

      <div class="row mb-5 align-items-center">
        <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
          <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
          <h2 class="text-black mb-4">Education is life</h2>
          <p class="mb-4">Beginning of a never ending journey of learning.</p>

          <div class="d-flex align-items-center custom-icon-wrap mb-3">
            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
            <div>
              <h3 class="m-0">2,931 Yearly Graduates</h3>
            </div>
          </div>

          <div class="d-flex align-items-center custom-icon-wrap">
            <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
            <div>
              <h3 class="m-0">50 Universities Worldwide</h3>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="site-section" id="teachers-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
          <h2 class="section-title">Our Team</h2>
          <p class="mb-5">The best we promise the best we are !</p>
        </div>
      </div>

      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="teacher text-center">
            <img src="images/habib.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
            <div class="py-2">
              <h3 class="text-black">Md Ahsan Habib</h3>
              <p class="position">ID: 181-15-1907</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="teacher text-center">
            <img src="https://scontent.fdac38-1.fna.fbcdn.net/v/t1.6435-9/53031575_1061585554032991_5399796101878382592_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeFz6YggLIGY_RaaPyJp6m-sxXTOEYGauT_FdM4RgZq5P-oXv67ofEy49YlmwAo9VOg6sCoKy6d9UAPxBT8aqZd5&_nc_ohc=wdTCmq-VnFgAX9eEvKH&_nc_ht=scontent.fdac38-1.fna&oh=3c645744c96ff8fa1173bcf3f1ad400f&oe=60986A46" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
            <div class="py-2">
              <h3 class="text-black">Md Anisuzzaman Shayak</h3>
              <p class="position">ID: 181-15-1988</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="teacher text-center">
            <img src="https://scontent.fdac38-1.fna.fbcdn.net/v/t1.6435-9/124449737_1023914228127210_8767509000799212704_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=174925&_nc_eui2=AeE8csNgCAwfLQs-p_cTz70N1GCCQ-FXBSjUYIJD4VcFKNbNPydidPLEDmEGCICwc5a_6LtMWTahyooq0fPyVKsD&_nc_ohc=bHw430g-8VYAX-ukeBK&_nc_ht=scontent.fdac38-1.fna&oh=5c5b248e240bdc82d8fe2e3030f46cf5&oe=6098519E" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
            <div class="py-2">
              <h3 class="text-black">Nozrof Shahriar Shuvo</h3>
              <p class="position">ID: 181-15-1987</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="teacher text-center">
            <img src="https://scontent.fdac38-1.fna.fbcdn.net/v/t1.6435-9/34459189_1752350661512017_4293572857557942272_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=174925&_nc_eui2=AeHf3FTmZI7ZhGQKe4270D1slgxLFjeBrMGWDEsWN4GswYdXlfqqGWmUga3u8TV4-54qlbG2vleUH1fEcWWqtvn-&_nc_ohc=QwHnEEVB6ToAX8Rb5Ks&_nc_ht=scontent.fdac38-1.fna&oh=b63c0e68ef569f77f53cf4c64f099c85&oe=6097806F" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
            <div class="py-2">
              <h3 class="text-black">Mahdi Saifullah Srizan</h3>
              <p class="position">ID: 181-15-1869</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="teacher text-center">
            <img src="https://scontent.fdac38-1.fna.fbcdn.net/v/t1.6435-9/53006832_361178554728034_1029912876745228288_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeH9RrqlNZk7VMIMyc3GwyP96Nl5IxGPSHjo2XkjEY9IeDE3_2mdWDvw3R6USAbtfr_d4oB4LzC-LYh8me_3U3Tq&_nc_ohc=k1pKWh_DJysAX9r5kja&_nc_ht=scontent.fdac38-1.fna&oh=43b5ad13b05d82ae6dff59af5c21db68&oe=6095AC75" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
            <div class="py-2">
              <h3 class="text-black">Abdul Hadi Himel</h3>
              <p class="position">ID: 181-15-2080</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay" style="background-image: url('http://images.freecreatives.com/wp-content/uploads/2016/04/Study-Quotes-Wallpaper-1.jpg');">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-8 text-center testimony">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
              <h2 class="section-title text-light">Our Teacher</h2>
            </div>
          </div>
          <img src="https://elearn.daffodilvarsity.edu.bd/pluginfile.php/961238/mod_label/intro/3-01-03.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
          <h3 class="mb-4">Mushfiqur Rahman (MUR)</h3>
          <blockquote>
            <p>Lecturer<br>Department of Computer Science & Engineering<br>Faculty of Science & Information Technology<br>Daffodil International University<br>Permanent Campus, Ashulia, Dhaka</p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section pb-0">

    <div class="future-blobs">
      <div class="blob_2">
        <img src="images/blob_2.svg" alt="Image">
      </div>
      <div class="blob_1">
        <img src="images/blob_1.svg" alt="Image">
      </div>
    </div>
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
        <div class="col-lg-7 text-center">
          <h2 class="section-title">Why Choose Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">

          <div class="p-4 rounded bg-white why-choose-us-box">

            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
              <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
              <div>
                <h3 class="m-0">2,931 Yearly Graduates</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
              <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
              <div>
                <h3 class="m-0">50 Universities Worldwide</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
              <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
              <div>
                <h3 class="m-0">Top Professionals in The World</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
              <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
              <div>
                <h3 class="m-0">Expand Your Knowledge</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
              <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
              <div>
                <h3 class="m-0">Best Online Teaching Assistant Courses</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
              <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
              <div>
                <h3 class="m-0">Best Teachers</h3>
              </div>
            </div>

          </div>


        </div>
        <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
          <img src="https://github.com/Nozrof/Web-portfolio/blob/main/img/image.png?raw=true" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light" id="contact-section">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-7">

          <h2 class="section-title mb-3">Message Us</h2>
          <p class="mb-5">We are more than happy to receive your suggestions.</p>
          <!-- Beginning of the php for the contact form -->
          <?php
          // Message Vars
          $msg = '';
          $msgClass = '';

          // Check For Submit
          if (filter_has_var(INPUT_POST, 'submit')) {
            // Get Form Data
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            $subject = htmlspecialchars($_POST['subject']);

            // Check Required Fields
            if (!empty($email) && !empty($name) && !empty($message) && !empty($subject)) {
              // Passed
              // Check Email
              if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
              } else {
                // Passed
                $toEmail = 'support@lacademy.com';
                $body = $subject . '<h4>Name</h4><p>' . $name . '</p>
                    <h4>Email</h4><p>' . $email . '</p>
                    <h4>Message</h4><p>' . $message . '</p>';

                // Email Headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                if (mail($toEmail, $subject, $body, $headers)) {
                  // Email Sent
                  $msg = 'Your email has been sent';
                  $msgClass = 'alert-success';
                } else {
                  // Failed
                  $msg = 'Your email was not sent';
                  $msgClass = 'alert-danger';
                }
              }
            } else {
              // Failed
              $msg = 'Please fill in all fields';
              $msgClass = 'alert-danger';
            }
          }
          ?>
          <?php if ($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
          <?php endif; ?>
          <!-- End of the php for the contact form -->
          <form method="post" action="index.php#contact-section" data-aos="fade" id="contact_form">
            <div class="form-group row">
              <div class="col-md-12">
                <div id="error_contact_fullname"></div>
                <input type="text" name="name" id="contact_fullname" class="form-control" placeholder="Full name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <div id="error_contact_subject"></div>
                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <div id="error_contact_email"></div>
                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <div id="error_contact_message"></div>
                <textarea class="form-control" id="contact_message" name="message" cols="30" rows="10" placeholder="Write your message here."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <input type="submit" name="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>


  <footer class="footer-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>About E-LearnBD</h3>
          <p>An E-Learning platform rich of resources, We make learning easy and simple for Everyone.</p>
        </div>

        <div class="col-md-3 ml-auto">
          <h3>Links</h3>
          <ul class="list-unstyled footer-links">
            <li><a href="#home-section" class="nav-link">Home</a></li>
            <li><a href="#courses-section" class="nav-link">Courses</a></li>
            <li><a href="#features-section" class="nav-link">Features</a></li>
            <li><a href="#programs-section" class="nav-link">Programs</a></li>
            <li><a href="#teachers-section" class="nav-link">Team</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h3>Subscribe</h3>
          <p>Keep yourself up to date and receive all kind of news about E-LearnBD.</p>
          <form action="https://www.youtube.com/channel/UCzlG6DSC6Ks34ah5ohcejSg" target="_blank" class="footer-subscribe">
            <div class="d-flex mb-5">
              <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
            </div>
          </form>
        </div>

      </div>

      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>

              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved

            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>



  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

</body>

</html>