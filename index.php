<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php  $getPosts = getPublishedPosts();  ?>

<?php require_once(ROOT_PATH. '/includes/header.php') ?>

<title>Blog | Home </title>
</head>
<body>
    <!-- container - wraps whole page -->
    <div class="container">
        <!-- navbar -->
        <?php require_once(ROOT_PATH. '/includes/navbar.php') ?>
        <!--  // navbar -->

        <!-- Banner -->
        <?php require_once(ROOT_PATH. '/includes/banner.php') ?>

        <!-- Page content -->
        <div class="content">
            <h2 class="content-title">Recent Articles</h2>
            <hr>
            <!-- more content to come here ... -->
            <?php foreach ($getPosts as $post): ?>
            <div class="post" style="margin-left: 0px;">
                <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">

                <!-- Added  if statement... -->
                <?php if (isset($post['topic']['name'])): ?>
                    <a 
                        href="<?php echo BASE_URL . 'filteredposts.php?topic=' . $post['topic']['id'] ?>"
                        class="btn category">
                        <?php echo $post['topic']['name'] ?>
                    </a>
                <?php endif ?>

                <a href="singlepost.php?post-slug=<?php echo $post['slug']; ?>">
                    <div class="post_info">
                        <h3><?php echo $post['title'] ?></h3>
                        <div class="info">
                            <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                            <span class="read_more">Read more...</span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach ?>
        </div>
        <!-- // Page content -->

        <!-- footer -->
        <?php require_once(ROOT_PATH. '/includes/footer.php') ?>
        <!-- // footer -->
    
    </div>
    <!-- // container -->
</body>
</html>