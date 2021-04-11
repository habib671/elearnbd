<?php
require "header.php";
?>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">Home</li>
	</ol>
</nav>

<div class="card-container">
	<div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header">Computer science</div>
		<div class="card-body">
			<ul style="list-style-type:circle">
				<li><a class="card-text" href="loggedin/computer_science_java.php">Java</a><br></li>
				<li><a class="card-text" href="loggedin/computer_science_c++.php">C++ </a><br></li>
				<li><a class="card-text" href="loggedin/computer_science_python.php">Python</a></li>
			</ul>
		</div>
	</div>

	<div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header">SSC & HSC</div>
		<div class="card-body">
			<ul style="list-style-type:circle">
				<li><a class="card-text" href="loggedin/ssc_hsc_physics.php">Physics</a><br></li>
				<li><a class="card-text" href="#">Chemistry </a><br></li>
				<li><a class="card-text" href="#">Math</a></li>
			</ul>
		</div>
	</div>

	<div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header">Job Preparation</div>
		<div class="card-body">
			<ul style="list-style-type:circle">
				<li><a class="card-text" href="#">বাংলা সাহিত্য</a><br></li>
				<li><a class="card-text" href="#">আন্তর্জাতিক বিষয়াবলি</a><br></li>
				<li><a class="card-text" href="#">English Literature</a></li>
			</ul>
		</div>
	</div>

</div>
<center>
	<a href="loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
</center>



<?php
require "footer.php";
?>