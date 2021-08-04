<?php require_once('pagesData.php'); ?>

<nav>
<ul class="nav">
<!--     <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="contact.php">Contact</a></li> -->

    <?php foreach($navData as $idNav => $nav) { ?>
        <li><a href="<?php echo $navData[$idNav]; ?>"><?php echo $idNav; ?></a></li>
     <?php } ?>
</ul>
</nav>

