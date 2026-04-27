<?php require_once "./header.php" ?>
<?php

require_once "./db.php";

// get posts with categoery and user info
$sql = "SELECT posts.*, users.name as user_name, categories.name as category_name 
        FROM posts 
        JOIN users ON posts.user_id = users.id 
        JOIN categories ON posts.category_id = categories.id 
        ORDER BY posts.created_at DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// now get top 4 categories with post count
$sql = "SELECT categories.*, COUNT(posts.id) as post_count 
        FROM categories 
        LEFT JOIN posts ON posts.category_id = categories.id 
        GROUP BY categories.id 
        ORDER BY post_count DESC LIMIT 4";
$result = mysqli_query($conn, $sql);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);



// echo "<pre>";
// print_r($posts);
// echo "</pre>";
// exit;

?>


<body>

    <?php require_once "./navbar.php" ?>

    <!-- Hero Section -->
    <section class="hero-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-7">
                    <h1 class="display-4 fw-bold mb-3 text-dark">Welcome to BlogHub</h1>
                    <p class="lead mb-4 text-muted">Discover inspiring stories, insightful articles, and thoughtful
                        perspectives from creators around the world.</p>
                    <div class="gap-3 d-flex flex-wrap">
                        <a href="posts.html" class="btn btn-primary btn-lg">
                            <i class="ri-book-open-line"></i> Explore Posts
                        </a>
                        <a href="dashboard/index.html" class="btn btn-outline-primary btn-lg">
                            <i class="ri-pencil-line"></i> Write Article
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <div class="hero-image">
                        <i class="ri-article-line" style="font-size: 180px; color: #007bff; opacity: 0.1;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5 bg-light" id="categories">
        <div class="container">
            <div class="mb-5">
                <h2 class="h3 fw-bold mb-2">Popular Categories</h2>
                <p class="text-muted">Browse posts by topic</p>
            </div>
            <div class="row g-3">
                <?php foreach ($categories as $category) { ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="posts.php?category=<?php echo $category['id'] ?>" class="text-decoration-none">
                            <div class="category-card p-4 text-center rounded border-0 bg-white shadow-sm category-hover">
                                <!-- <i class="ri-book-line text-warning" style="font-size: 32px;"></i> -->
                                <h6 class="mt-3 fw-bold text-dark"><?php echo $category['name'] ?></h6>
                                <small class="text-muted"><?php echo $category['post_count'] ?> posts</small>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <!-- Featured Posts Section -->
    <section class="py-5">
        <div class="container">
            <div class="mb-5">
                <h2 class="h3 fw-bold mb-2">Latest Posts</h2>
                <p class="text-muted">Top stories trending this week</p>
            </div>
            <div class="row g-4 mb-5">
                <?php foreach ($posts as $post) { ?>
                    <div class="col-md-6 col-lg-4">
                        <a href="post-detail.php?id=<?php echo $post['id'] ?>" class="text-decoration-none">
                            <div class="card h-100 shadow-sm border-0 card-hover">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=300&fit=crop"
                                    class="card-img-top" alt="Post image">
                                <div class="card-body">
                                    <span class="badge bg-primary mb-2"><?php echo $post['category_name'] ?></span>
                                    <h5 class="card-title fw-bold text-dark"><?php echo $post['title'] ?></h5>
                                    <p class="card-text text-muted small"><?php echo $post['excerpt'] ?></p>
                                    <div class="d-flex align-items-center mt-3 text-muted small">
                                        <i class="ri-user-3-line me-2"></i> <?php echo $post['user_name'] ?>
                                        <i class="ri-calendar-line ms-3 me-2"></i> <?php echo date('M j, Y', strtotime($post['created_at'])) ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>



            </div>
            <div class="text-center">
                <a href="posts.php" class="btn btn-outline-primary">View All Posts <i
                        class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>



    <?php require_once "./footer.php" ?>