<?php require_once "./header.php" ?>

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
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="posts.html" class="text-decoration-none">
                        <div class="category-card p-4 text-center rounded border-0 bg-white shadow-sm category-hover">
                            <i class="ri-terminal-line text-primary" style="font-size: 32px;"></i>
                            <h6 class="mt-3 fw-bold text-dark">Technology</h6>
                            <small class="text-muted">245 posts</small>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="posts.html" class="text-decoration-none">
                        <div class="category-card p-4 text-center rounded border-0 bg-white shadow-sm category-hover">
                            <i class="ri-palette-line text-success" style="font-size: 32px;"></i>
                            <h6 class="mt-3 fw-bold text-dark">Design</h6>
                            <small class="text-muted">189 posts</small>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="posts.html" class="text-decoration-none">
                        <div class="category-card p-4 text-center rounded border-0 bg-white shadow-sm category-hover">
                            <i class="ri-bar-chart-line text-info" style="font-size: 32px;"></i>
                            <h6 class="mt-3 fw-bold text-dark">Business</h6>
                            <small class="text-muted">156 posts</small>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="posts.html" class="text-decoration-none">
                        <div class="category-card p-4 text-center rounded border-0 bg-white shadow-sm category-hover">
                            <i class="ri-book-line text-warning" style="font-size: 32px;"></i>
                            <h6 class="mt-3 fw-bold text-dark">Education</h6>
                            <small class="text-muted">234 posts</small>
                        </div>
                    </a>
                </div>
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
                <!-- Featured Post Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <a href="post-detail.php" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 card-hover">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=300&fit=crop"
                                class="card-img-top" alt="Post image">
                            <div class="card-body">
                                <span class="badge bg-primary mb-2">Technology</span>
                                <h5 class="card-title fw-bold text-dark">Getting Started with Web Development</h5>
                                <p class="card-text text-muted small">Learn the fundamentals of modern web development
                                    and build your first project.</p>
                                <div class="d-flex align-items-center mt-3 text-muted small">
                                    <i class="ri-user-3-line me-2"></i> John Doe
                                    <i class="ri-calendar-line ms-3 me-2"></i> Mar 15, 2024
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Featured Post Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <a href="post-detail.php" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 card-hover">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500&h=300&fit=crop"
                                class="card-img-top" alt="Post image">
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Design</span>
                                <h5 class="card-title fw-bold text-dark">UI/UX Design Principles 101</h5>
                                <p class="card-text text-muted small">Master the essentials of creating user-centered
                                    digital experiences.</p>
                                <div class="d-flex align-items-center mt-3 text-muted small">
                                    <i class="ri-user-3-line me-2"></i> Sarah Smith
                                    <i class="ri-calendar-line ms-3 me-2"></i> Mar 14, 2024
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Featured Post Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <a href="post-detail.php" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 card-hover">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=300&fit=crop"
                                class="card-img-top" alt="Post image">
                            <div class="card-body">
                                <span class="badge bg-info mb-2">Business</span>
                                <h5 class="card-title fw-bold text-dark">Growing Your Online Business</h5>
                                <p class="card-text text-muted small">Strategies to scale your business and reach more
                                    customers online.</p>
                                <div class="d-flex align-items-center mt-3 text-muted small">
                                    <i class="ri-user-3-line me-2"></i> Mike Johnson
                                    <i class="ri-calendar-line ms-3 me-2"></i> Mar 13, 2024
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <a href="posts.html" class="btn btn-outline-primary">View All Posts <i
                        class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>



    <?php require_once "./footer.php" ?>