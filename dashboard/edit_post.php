<?php require_once "./dashboard_header.php" ?>
<?php
   
    require_once "../db.php";

    // Get post id from URL
    $post_id = $_GET['id'] ?? '';

    if (!isset($post_id) || empty($post_id)) {
        header("Location: ./posts.php");
        exit;
    }

    // Fetch post data
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM posts WHERE id='$post_id' AND user_id='$user_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header("Location: ./posts.php");
        exit;
    }

    $post = mysqli_fetch_assoc($result);

    // Select categories query
    $cat_sel = "SELECT * FROM categories";
    $cat_result = mysqli_query($conn, $cat_sel);

?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Edit Post</h5>
                <button class="btn btn-sm btn-light d-md-none">
                    <i class="ri-menu-line"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="p-4">
                <form method="POST" action="./handle_edit_post.php" enctype="multipart/form-data">
                    <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                    <input type="hidden" name="old_image" value="<?php echo $post['image']; ?>">

                    <div class="row g-4">
                        <!-- Main Form -->
                        <div class="col-lg-8">
                            <!-- Title -->
                            <label for="title" class="form-label fw-bold">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter post title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
                        </div>

                        <div class="col-lg-4">
                            <!-- Category -->
                            <h6 class="fw-bold mb-3">Category</h6>
                            <select name="category_id" class="form-select" required>
                                <?php while($row = mysqli_fetch_assoc($cat_result)) {  ?>
                                    <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $post['category_id']) echo 'selected'; ?>>
                                        <?php echo htmlspecialchars($row['name']); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-8">
                            <!-- Featured Excerpt -->
                            <label class="form-label fw-bold">Post Excerpt</label>
                            <input name="excerpt" type="text" class="form-control" value="<?php echo htmlspecialchars($post['excerpt']); ?>">
                        </div>

                        <div class="col-md-4">
                            <!-- Featured Image -->
                            <label class="form-label fw-bold">Image</label>
                            <input name="image" type="file" class="form-control" accept="image/*">
                            <?php if($post['image']) { ?>
                                <small class="text-muted d-block mt-2">Current image: <?php echo htmlspecialchars($post['image']); ?></small>
                            <?php } ?>
                        </div>

                        <div class="col-md-12">
                            <!-- Content Editor -->
                            <label for="editor" class="form-label fw-bold mb-3">Content</label>
                            <div id="editor" style="height: 400px; background-color: white;"></div>
                            <input type="hidden" name="content" id="content" />
                        </div>

                    </div>

                    <div class="mt-4 text-end">
                        <a href="./posts.php" class="btn btn-outline-secondary btn-lg me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-lg w-25">Update Post</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Quill Editor -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['link', 'image']
                ]
            }
        });

        // Set the existing post content after Quill initializes
        const existingContent = <?php echo json_encode(html_entity_decode($post['content'])); ?>;
        quill.clipboard.dangerouslyPasteHTML(existingContent);

        // Get content on form submit
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('content').value = quill.root.innerHTML;
        });
    </script>
</body>

</html>
