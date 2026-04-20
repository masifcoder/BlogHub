<?php require_once "./header.php" ?>


<body class="bg-light">

    <!-- Login Container -->
    <section class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow border-0">
                        <!-- Header -->
                        <div class="card-body p-3 text-center ">
                            <i class="ri-login-box-line" style="font-size: 45px; color: #007bff;"></i>
                            <h2 class="fw-bold mt-2 mb-1">Welcome Back</h2>
                            <p class="text-muted">Sign in to your BlogHub account</p>
                        </div>

                        <!-- Form -->
                        <div class="card-body py-3 px-5">
                            <form>
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="email" class="form-label fw-bold">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="ri-mail-line text-muted"></i>
                                        </span>
                                        <input type="email" class="form-control border-start-0" id="email" placeholder="you@example.com" required>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="ri-lock-line text-muted"></i>
                                        </span>
                                        <input type="password" class="form-control border-start-0" id="password" placeholder="Enter your password" required>
                                  
                                    </div>
                                </div>

                                <!-- Login Button -->
                             <button type="submit" class="btn btn-primary w-100 btn-lg mb-3">
                                    <i class="ri-login-box-line"></i> Sign In
                                </button>
                            

                            </form>
                        </div>

                        <!-- Footer -->
                        <div class="card-body p-3 text-center border-top bg-light">
                            <p class="mb-0">Don't have an account? <a href="register.html" class="fw-bold text-primary text-decoration-none">Create one</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
