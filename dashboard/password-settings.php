<?php require_once "./dashboard_header.php" ?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Password Settings</h5>
                <button class="btn btn-sm btn-light d-md-none">
                    <i class="ri-menu-line"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="p-4">
                <div class="row g-4">

                    <!-- Sidebar Settings -->
                    <div class="col-lg-4">
                        <!-- Security Settings -->
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-white border-bottom py-3 px-4">
                                <h6 class="fw-bold mb-0">Security & Password</h6>
                            </div>
                            <div class="card-body p-4">
                                <form>
                                    <div class="mb-3">
                                        <label for="current-password" class="form-label fw-bold">Current
                                            Password</label>
                                        <input type="password" class="form-control" id="current-password"
                                            placeholder="Enter your current password">
                                    </div>

                                    <div class="mb-3">
                                        <label for="new-password" class="form-label fw-bold">New Password</label>
                                        <input type="password" class="form-control" id="new-password"
                                            placeholder="Enter new password">
                                        <small class="text-muted">At least 8 characters with uppercase, lowercase, and
                                            numbers</small>
                                    </div>

                                    <div class="mb-4">
                                        <label for="confirm-password" class="form-label fw-bold">Confirm
                                            Password</label>
                                        <input type="password" class="form-control" id="confirm-password"
                                            placeholder="Confirm new password">
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-lock-line"></i> Update Password
                                    </button>
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