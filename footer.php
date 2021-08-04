<?php require_once('pagesData.php'); ?>
<footer class="footer padding">
    <div class="footer-information">
        <div class="container-background">
            <div class="container">
                <ul class="main-footer-list">

                    <li class="main-footer-list-li">
                        <h4>Contact Us</h4>

                        <ul class="contact-us-footer-list">
                            <li><a href="#" class="adress">55 main St. Toronto, ON MIH 3A5</a></li>
                            <li><a href="#" class="mobile">(416) 555-5252</a></li>
                            <li><a href="#" class="email">hello@treehouse.com</a></li>
                        </ul>                     
                                                                        
                    </li>

                    <li class="main-footer-list-li">
                        <h4>Latest Posts</h4>

                        <ul class="latest-posts-footer-list">
                            <?php if (!empty($postsData)) {        
                                foreach($postsData as $id => $post) { ?>
                                    
                                        <li><a href="blog.phpd=<?php echo $id; ?>"><?php echo $post['name']; ?></a></li>
                                   
                            <?php } } ?>    
                        </ul>

                    </li>

                    <li class="main-footer-list-li">
                        <h4>Latest Tweets</h4>

                        <ul class="latest-tweets-footer-list">
                            <li><a href="#">Confucious: Life is really simple, but we insist on making it complicated.</a><a href="#" clsas="bold">#famousquotes</a><span class="tweet-time">8 mins ago</span></li>
                            <li><a href="#">Grab the Free Treehouse web teamplate at FreebiesXpress!</a><a href="#" clsas="bold">#freebies #templates</a><span class="tweet-time">2 days ago</span></li>
                        </ul>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-messangers padding">
        <div class="container">
            <span class="copyright">&copy; Copyright 2014 FreebiesXpress.com</span>
            <ul>
                <li><a href="#" class="a-tw"></a></li>
                <li><a href="#" class="a-fb"></a></li>
                <li><a href="#" class="a-pr"></a></li>
                <li><a href="#" class="a-gm"></a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
