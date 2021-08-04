<?php

require_once('pagesData.php');
require_once('header.php');

?>

<div class="container">
    <?php if (empty($_GET['id'])) { ?>
    
    <h2>Blog</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quasi molestiae blanditiis ducimus provident! Mollitia ad necessitatibus ipsum asperiores quo?</p>

    <div class="posts-list">
         
    <?php if (!empty($postsData)) {        
    foreach($postsData as $id => $post) { ?>

        <div class="post">
            <h3><a href="blog.php?id=<?php echo $id; ?>"><?php echo $post['name']; ?></a></h3>
            <?php echo $post['description']; ?>
        </div>

    <?php } } ?>    
    </div>

    <?php } else { require_once 'page.php'; } ?>

</div>

<?php

require_once('footer.php');

?>
