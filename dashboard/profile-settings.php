<?php require_once "./dashboard_header.php" ?>
<?php


    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    if ($user_id === null) {
        header("Location: login.php");
        exit();
    }   

    require_once "../db.php";

    // get user data from database
    $sql = "SELECT id, name, bio, image FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";

?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Profile Settings</h5>


                <?php if (isset($_SESSION['profile_update_success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                        <?php echo $_SESSION['profile_update_success']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['profile_update_success']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['profile_update_error'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                        <?php echo $_SESSION['profile_update_error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['profile_update_error']); ?>
                <?php endif; ?>


                <button class="btn btn-sm btn-light d-md-none">
                    <i class="ri-menu-line"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="p-4">
                <div class="row g-4">
                    <!-- Main Settings -->
                    <div class="col-lg-8">
                        <!-- Profile Information -->
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-header bg-white border-bottom py-3 px-4">
                                <h6 class="fw-bold mb-0">Profile Information</h6>
                            </div>
                            <div class="card-body p-4">
                                <form method="post" action="handle_profile_update.php" enctype="multipart/form-data" class="row">
                                    <!-- Profile Picture -->
                                    <div class="mb-4 col-md-12">
                                        <div class="d-flex align-items-center gap-4">
                                            <img src="../uploads/<?php echo $user['image'] ?>" alt="Profile" class="rounded-circle" width="100" height="100">
                                            <div>
                                                <input type="file" name="profile_image" class="form-control form-control-sm mb-2"
                                                    accept="image/*">
                                                <small class="text-muted">Recommended: Square image, minimum
                                                    400x400px</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Full Name -->
                                    <div class="mb-3 col-md-6">
                                        <label for="fullname" class="form-label fw-bold">Full Name</label>
                                        <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $user['name']; ?>">
                                    </div>

                                    <!-- Bio -->
                                    <div class="mb-3 col-md-12">
                                        <label for="bio" class="form-label fw-bold">Bio</label>
                                        <textarea class="form-control" name="bio" id="bio"
                                            rows="3"><?php echo $user['bio']; ?></textarea>
                                        <small class="text-muted">Max 150 characters</small>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ri-save-line"></i> Save Changes
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>