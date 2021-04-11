<?php
require "../../header.php";
?>

<div class="container mt-5">
    <form method="POST" action="logic.php">
        <label>Blog Title</label>
        <input type="text" name="title" placeholder="Blog Title" class="form-control mb-3 text-center" required>
        <label>Category</label>
        <select name="category" class="form-control mb-3">
            <option disabled selected> Select Category</option>
            <?php
            include "logic.php";
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
        <textarea name="content" class="form-control mb-3" cols="30" rows="10" required></textarea>
        <input type="submit" class="btn btn-dark" name="new_post" value="ADD POST">
    </form>
</div>

<?php
require "../../footer.php";
?>