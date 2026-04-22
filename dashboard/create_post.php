<?php require_once "./dashboard_header.php" ?>
<?php
    // connect db
    require_once "../db.php";

    // select categories query
    $cat_sel = "SELECT * FROM categories";
    $result  = mysqli_query($conn, $cat_sel);



?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Create New Post</h5>
                <button class="btn btn-sm btn-light d-md-none">
                    <i class="ri-menu-line"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="p-4">
                <form method="POST" action="./handle_post.php" enctype="multipart/form-data">
                    <div class="row g-4">
                        <!-- Main Form -->
                        <div class="col-lg-8">
                            <!-- Title -->
                            <label for="title" class="form-label fw-bold">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter post title" required>
                        </div>

                        <div class="col-lg-4">
                            <!-- Category -->
                            <h6 class="fw-bold mb-3">Category</h6>
                            <select name="category_id" class="form-select" required>
                                <?php while($row = mysqli_fetch_assoc($result)) {  ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-8">
                            <!-- Featured Image -->
                            <label class="form-label fw-bold"> Post Excerpt</label>
                            <input name="excerpt" type="text" class="form-control"">
                        </div>

                        <div class="col-md-4">
                            <!-- Featured Image -->
                            <label class="form-label fw-bold"> Image</label>
                            <input name="image" type="file" class="form-control" accept="image/*">
                        </div>

                        <div class="col-md-12">
                            <!-- Content Editor -->

                            <label for="editor" class="form-label fw-bold mb-3">Content</label>
                            <div id="editor" style="height: 400px; background-color: white;">
                                <p>Start writing your amazing article here...</p>
                            </div>
                            <input type="hidden" name="content" id="content" />
                        </div>

                    </div>



                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary btn-lg w-25">Publish</button>

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
                    [{
                        'align': []
                    }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });


        // 1. Select the form
        const form = document.querySelector('form');

        form.addEventListener('submit', (e) => {
           e.preventDefault(); // Stop page refresh

            // 2. Get the HTML content
            const postHTML = quill.root.innerHTML;

            // console.log("Editor HTML:", postHTML);
            document.getElementById("content").value = postHTML;

            form.submit();


            // Now you can send 'postHTML' to your database/backend
        });
    </script>
</body>

</html>