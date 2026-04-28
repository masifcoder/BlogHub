<?php require_once "./header.php" ?>

<?php

$id  = isset($_GET['id']) ? $_GET['id'] : null;

    if($id == null) {
        header("Location: index.php");
        exit;
    }

require_once "./db.php";
// get post with categoery and user info
$sql = "SELECT posts.*, users.name as user_name, users.bio as user_bio, categories.name as category_name 
        FROM posts 
        JOIN users ON posts.user_id = users.id 
        JOIN categories ON posts.category_id = categories.id 
        WHERE posts.id = $id";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);

// echo "<pre>";
// print_r($post);
// echo "</pre>";
// exit;

?>


<body>
    <?php require_once "./navbar.php" ?>

    <!-- Post Content -->
    <article class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&h=400&fit=crop"
                        alt="Post featured image" class="img-fluid rounded mb-4">

                    <!-- Post Meta -->
                    <div class="d-flex flex-wrap gap-3 mb-4 text-muted small border-bottom pb-4">
                        <span class="badge bg-primary"><?php echo $post['category_name']; ?></span>
                        <span><i class="ri-calendar-line"></i> <?php echo date("F j, Y", strtotime($post['created_at'])); ?> </span>
                        <span><i class="ri-time-line"></i> 5 min read</span>
                        <span><i class="ri-eye-line"></i> 2.5K views</span>
                    </div>

                    <!-- Post Title -->
                    <h1 class="display-4 fw-bold mb-4 text-dark"><?php echo $post['title']; ?></h1>

                    <!-- Author Info -->
                    <div class="d-flex align-items-center gap-3 mb-5 pb-4 border-bottom">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=50&h=50&fit=crop"
                            alt="Author" class="rounded-circle" width="50" height="50">
                        <div>
                            <h6 class="fw-bold mb-0"><?php echo $post['user_name']; ?></h6>
                            <!-- <small class="text-muted">Full Stack Developer | Tech Enthusiast</small> -->
                        </div>
                        <button class="btn btn-sm btn-primary ms-auto">Follow</button>
                    </div>

                    <!-- Post Body -->
                    <div class="post-body mb-5">
                       <?php echo nl2br($post['content']); ?>
                    </div>

                    <!-- Share & Actions -->
                    <div class="border-top border-bottom py-4 mb-5">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-thumb-up-line"></i> Like
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-bookmark-line"></i> Save
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-share-forward-line"></i> Share
                                </button>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="mb-5">
                        <h4 class="fw-bold mb-4">Comments (8)</h4>

                        <!-- Comment Form -->
                        <div class="mb-5 p-4 bg-light rounded">
                            <h6 class="fw-bold mb-3">Leave a Comment</h6>
                            <form>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3"
                                        placeholder="Share your thoughts..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>

                        <!-- Comments List -->
                        <div class="mb-4">
                            <div class="d-flex gap-3 mb-4">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=40&h=40&fit=crop"
                                    alt="Commenter" class="rounded-circle" width="40" height="40">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Jane Smith</h6>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                    <p class="text-muted mb-2">Great article! The step-by-step approach is really
                                        helpful for beginners. I'm starting my web development journey and this gave me
                                        a clear roadmap.</p>
                                    <button class="btn btn-sm btn-link p-0 text-primary">Reply</button>
                                </div>
                            </div>

                            <div class="d-flex gap-3 mb-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop"
                                    alt="Commenter" class="rounded-circle" width="40" height="40">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Michael Chen</h6>
                                        <small class="text-muted">5 hours ago</small>
                                    </div>
                                    <p class="text-muted mb-2">Thanks for breaking down the fundamentals so clearly.
                                        Would love to see a follow-up article on JavaScript best practices!</p>
                                    <button class="btn btn-sm btn-link p-0 text-primary">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Card -->
                    <div class="card shadow-sm border-0 mb-4 ">
                        <div class="card-body text-center">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop"
                                alt="Author" class="rounded-circle mb-3" width="100" height="100">
                            <h5 class="fw-bold"><?php echo $post['user_name']; ?></h5>
                            <!-- <p class="text-muted small">Full Stack Developer | Tech Enthusiast | Coffee Lover</p> -->
                            <p class="small"><?php echo $post['user_bio']; ?></p>
                            <button class="btn btn-primary btn-sm w-100">Follow Author</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </article>

   
        <?php require_once "./footer.php" ?>