<?php
include "logic.php";
require "../../header.php";
session_start();
if (isset($_SESSION['userUid'])) {
    $author = $_SESSION['userUid'];
} else {
    $author = 'Anonymous';
}
?>

<div class="container mt-5">

    <?php foreach ($query as $q) { ?>
        <div class="bg-dark p-5 rounded-lg text-white text-center">
            <h1><?php echo $q['title']; ?></h1>
            <p><?php echo 'By ' . $q['author'] . ' | ' . $q['category'] . ' | ' . $q['date']; ?></p>
            <?php
            if ($author == $q['author']) {
                echo '<div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=' . $q['id'] . '" class="btn btn-light btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value="' . $q['id'] . '" name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>';
            }
            ?>
        </div>
        <p class="mt-5" style="text-align:justify"><?php echo $q['content']; ?></p>
    <?php } ?>

    <a href="index.php" class="btn btn-outline-dark my-3">&larr; Back</a>
</div>

<?php
require "../../footer.php";
?>