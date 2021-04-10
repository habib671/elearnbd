<?php
include "logic.php";
session_start();
if (isset($_SESSION['userUid'])) {
    $author = $_SESSION['userUid'];
} else {
    $author = 'Anonymous';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>

<body>

    <div class="container mt-5">
        <?php foreach ($query as $q) {
            if ($author != $q['author']) {
                header("Location: {$hostname}index.php");
            } ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
                <label>Blog Title</label>
                <input type="text" placeholder="Blog Title" class="form-control my-3 text-center" name="title" value="<?php echo $q['title'] ?>">
                <label>Category</label>
                <select name="category" class="form-control mb-3">
                    <option disabled selected> Select Category</option>
                    <?php
                    $sql = "SELECT * FROM category";
                    $result = mysqli_query($conn, $sql) or die("Query Failed.");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['category_name']}'>{$row['category_name']}</option>";
                        }
                    }
                    ?>
                </select>
                <label>Content</label>
                <textarea name="content" class="form-control my-3" cols="30" rows="10"><?php echo $q['content'] ?></textarea>
                <button class="btn btn-dark" name="update">Update</button>
            </form>
        <?php } ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>