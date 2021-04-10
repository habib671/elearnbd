<?php
session_start();
$hostname = "http://localhost/elearnbd/loggedin/blog/";

// Don't display server errors 
ini_set("display_errors", "off");

// Initialize a database connection
$conn = mysqli_connect("localhost", "root", "", "loginsystemtut");

// Destroy if not possible to create a connection
if (!$conn) {
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}

// Get data to display on index page
$sql = "SELECT * FROM blog_data";
$query = mysqli_query($conn, $sql);

// Create a new post
if (isset($_REQUEST['new_post'])) {
    if (isset($_SESSION['userUid'])) {
        $author = $_SESSION['userUid'];
    } else {
        $author = 'Anonymous';
    }
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $category = $_REQUEST['category'];
    $date = date("d M, Y");

    $sql = "INSERT INTO blog_data(author,title,content,category,date) VALUES('$author','$title','$content','$category','$date')";
    mysqli_query($conn, $sql);
    echo $sql;

    header("Location: {$hostname}index.php?info=added");
    exit();
}

// Get post data based on id
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM blog_data WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

// Delete a post
if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM blog_data WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

// Update a post
if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $category = $_REQUEST['category'];
    if ($category == '') {
        $sql = "UPDATE blog_data SET title = '$title', content = '$content' WHERE id = $id";
    } else {
        $sql = "UPDATE blog_data SET title = '$title', content = '$content', category = '$category' WHERE id = $id";
    }

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
