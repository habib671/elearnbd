<?php
include "logic.php";
require "../../header.php";
?>

<div class="container mt-5">

    <!-- Display any info -->
    <?php if (isset($_REQUEST['info'])) { ?>
        <?php if ($_REQUEST['info'] == "added") { ?>
            <div class="alert alert-success" role="alert">
                Post has been added successfully
            </div>
        <?php } ?>
    <?php } ?>

    <!-- Create a new Post button -->
    <div class="text-center">
        <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
    </div>

    <!-- Display posts from database -->
    <div class="row">
        <?php foreach ($query as $q) { ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $q['title']; ?></h5>
                        <p class="card-text"><?php echo substr($q['content'], 0, 150) . '<br>'; ?>...</p>
                        <a href="view.php?id=<?php echo $q['id'] ?>" class="btn btn-sm btn-secondary">Read More &rarr;</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

<?php
require "../../footer.php";
?>