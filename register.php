<?php require_once "./header.php" ?>
<?php session_start() ?>

<body class="bg-light">


    <!-- Register Container -->
    <section class="min-vh-100 d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow border-0">
                        <!-- Header -->
                        <div class="card-body p-3 text-center ">
                            <i class="ri-user-add-line" style="font-size: 48px; color: #007bff;"></i>
                            <h2 class="fw-bold mt-3 mb-1">Create Account</h2>
                            <p class="text-muted">Join BlogHub and start sharing your stories</p>
                        </div>

                        <!-- Form -->
                        <div class="card-body px-5 py-3">
                            <form method="post" action="./handle_register.php">
                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label for="fullname" class="form-label fw-bold">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="ri-user-3-line text-muted"></i>
                                        </span>
                                        <input type="text" name="name" class="form-control border-start-0" id="fullname" placeholder="John Doe" required>
                                    </div>
                                    <input type="text" name="name" class="form-control" id="namelabel" placeholder="student name">
                                    <?php if (isset($_SESSION['name_error']) && !empty($_SESSION['name_error'])) { ?>
                                        <div class="alert alert-danger my-1"> <?php echo $_SESSION['name_error'];
                                                                                unset($_SESSION['name_error']) ?> </div>
                                    <?php } ?>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="ri-mail-line text-muted"></i>
                                        </span>
                                        <input type="email" name="email" class="form-control border-start-0" id="email" placeholder="you@example.com" required>
                                    </div>
                                    <?php if (isset($_SESSION['email_error']) && !empty($_SESSION['email_error'])) { ?>
                                        <div class="alert alert-danger my-1"> <?php echo $_SESSION['email_error'];
                                                                                unset($_SESSION['email_error']) ?> </div>
                                    <?php } ?>
                                </div>

                                <!-- age -->
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Age</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="ri-calendar-line text-muted"></i>
                                        </span>
                                        <input type="number" class="form-control border-start-0" name="age" id="email" required>
                                    </div>
                                    <?php if (isset($_SESSION['age_error']) && !empty($_SESSION['age_error'])) { ?>
                                        <div class="alert alert-danger my-1"> <?php echo $_SESSION['age_error'];
                                                                                unset($_SESSION['age_error']) ?> </div>
                                    <?php } ?>
                                </div>


                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Gender</label>
                                    <select class="form-select" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <?php if (isset($_SESSION['gender_error']) && !empty($_SESSION['gender_error'])) { ?>
                                        <div class="alert alert-danger my-1"> <?php echo $_SESSION['gender_error'];
                                                                                unset($_SESSION['gender_error']) ?> </div>
                                    <?php } ?>
                                </div>


                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="ri-lock-line text-muted"></i>
                                        </span>
                                        <input type="password" name="password" class="form-control border-start-0" id="password" placeholder="Create a strong password" required>
                                    </div>
                                    <?php if (isset($_SESSION['password_error']) && !empty($_SESSION['password_error'])) { ?>
                                        <div class="alert alert-danger my-1"> <?php echo $_SESSION['password_error'];
                                                                                unset($_SESSION['password_error']) ?> </div>
                                    <?php } ?>
                                </div>


                                <!-- Register Button -->
                                <button type="submit" class="btn btn-primary w-100 btn-lg mb-3">
                                    <i class="ri-user-add-line"></i> Create Account
                                </button>


                            </form>
                        </div>

                        <!-- Footer -->
                        <div class="card-body p-3 text-center border-top bg-light">
                            <p class="mb-0">Already have an account? <a href="./login.php" class="fw-bold text-primary text-decoration-none">Sign in</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>