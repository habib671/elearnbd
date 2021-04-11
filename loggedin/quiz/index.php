<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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

    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Quick Quiz</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Question</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>

    <!-- //script js linked : -->
    <script src="question.js"></script>


    <script src="script.js"></script>

</body>

</html>

</html>