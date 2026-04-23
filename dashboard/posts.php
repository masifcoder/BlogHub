<?php require_once "./dashboard_header.php" ?>
<?php
    require_once "../db.php";

    // check user is logged in
    if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
        $_SESSION['auth_error'] = "Please login to view dashboard";
        header("Location: ../login.php");
        exit;
    }

    // Get all posts for the current user with category join
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT p.id, p.title, p.excerpt, p.image, p.created_at, c.name as category_name 
            FROM posts p 
            JOIN categories c ON p.category_id = c.id 
            WHERE p.user_id = '$user_id'
            ORDER BY p.created_at DESC";
    $result = mysqli_query($conn, $sql);
?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
                <h5 class="mb-0 fw-bold">My Posts</h5>
                <a href="./create_post.php" class="btn btn-primary btn-sm">
                    <i class="ri-add-line"></i> New Post
                </a>
            </div>

            <!-- Content -->
            <div class="p-4">
                <!-- Posts Table -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Title</th>
                                        <th>Category</th>
                                        <th>Published</th>
                                        <th class="pe-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if(mysqli_num_rows($result) > 0) {
                                            while($post = mysqli_fetch_assoc($result)) { 
                                    ?>
                                    <tr>
                                        <td class="ps-4">
                                            <div>
                                                <p class="fw-bold mb-1"><?php echo htmlspecialchars($post['title']); ?></p>
                                                <small class="text-muted"><?php echo htmlspecialchars(substr($post['excerpt'], 0, 50)); ?>...</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary"><?php echo htmlspecialchars($post['category_name']); ?></span>
                                        </td>
                                        <td><?php echo date('M d, Y', strtotime($post['created_at'])); ?></td>
                                        <td class="pe-4">
                                            <a href="./edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete" onclick="deletePost(<?php echo $post['id']; ?>)">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php 
                                            }
                                        } else {
                                    ?>
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">
                                            No posts yet. <a href="./create_post.php">Create your first post</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function deletePost(postId) {
            if(confirm('Are you sure you want to delete this post?')) {
                window.location.href = './handle_delete_post.php?id=' + postId;
            }
        }
    </script>
</body>

</html>