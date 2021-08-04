<?php
    $post = $postsData[$_GET['id']];
    if (!empty($postsData) && !empty($_GET['id'])) { ?>
        
       <h1><?php echo $post['name']; ?></h1>
        <?php echo $post['description']; ?>

<?php } ?>
