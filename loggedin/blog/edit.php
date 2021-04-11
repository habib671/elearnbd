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

<?php
require "../../footer.php";
?>