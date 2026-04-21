<?php require_once "./dashboard_header.php" ?>

<?php

require_once "../db.php";

// limit 5 students
$sql5 = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql5);

?>

<body>
    <div class="d-flex min-vh-100">

        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-sm btn-light d-md-none" type="button">
                        <i class="ri-menu-line"></i>
                    </button>
                    <h5 class="mb-0 fw-bold">Dashboard</h5>
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-sm btn-light">
                            <i class="ri-notification-line"></i>
                        </button>
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop" alt="User" class="rounded-circle" width="40" height="40">
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-4">
                <!-- Welcome Section -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-2">Manage Categories</h2>
                    <p class="text-muted">Here you can manage categories for store.</p>
                </div>

                <!-- Latest Posts Table -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-bottom py-3 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bold mb-0">Latest Posts</h6>
                            <a href="./category_form.php" class="btn btn-sm btn-primary">
                                <i class="ri-add-line"></i> Create Category
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">ID</th>
                                        <th>Category</th>
                                        <th class="pe-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td class="ps-4 fw-bold"><?php echo $row['id']; ?></td>
                                            <td><span class="badge bg-primary"><?php echo $row['name']; ?></span></td>
                                            <td class="pe-4">
                                                <a href="posts.html" class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>