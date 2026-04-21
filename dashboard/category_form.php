<?php require_once "./dashboard_header.php" ?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Create New Category</h5>
                <button class="btn btn-sm btn-light d-md-none">
                    <i class="ri-menu-line"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="p-4">
                <form action="./handle_category.php" method="POST">
                    <div class="row g-4">
                        <!-- Main Form -->
                        <div class="col-lg-8">
                            <!-- Title -->
                            <label for="title" class="form-label fw-bold">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="title" placeholder="Enter category namee" required>
                        </div>
                        <?php if (isset($_SESSION['name_error']) && !empty($_SESSION['name_error'])) { ?>
                            <div class="alert alert-danger my-1"> <?php echo $_SESSION['name_error'];
                                                                    unset($_SESSION['name_error']) ?> </div>
                        <?php } ?>

                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-lg w-25">Create</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>