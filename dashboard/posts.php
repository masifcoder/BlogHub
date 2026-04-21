<?php require_once "./dashboard_header.php" ?>

<body>
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php require_once "./dashboard_sidebar.php" ?>

        <!-- Main Content -->
        <main class="flex-grow-1 ms-md-0" style="margin-left: 260px !important;">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm sticky-top py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
                <h5 class="mb-0 fw-bold">My Posts</h5>
                <a href="create-post.html" class="btn btn-primary btn-sm">
                    <i class="ri-add-line"></i> New Post
                </a>
            </div>

            <!-- Content -->
            <div class="p-4">
                <!-- Filters -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-4">
                                <label for="search" class="form-label small fw-bold">Search</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text bg-transparent">
                                        <i class="ri-search-line"></i>
                                    </span>
                                    <input type="text" class="form-control" id="search" placeholder="Search posts...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="category" class="form-label small fw-bold">Category</label>
                                <select class="form-select form-select-sm" id="category">
                                    <option>All Categories</option>
                                    <option>Technology</option>
                                    <option>Design</option>
                                    <option>Business</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="status" class="form-label small fw-bold">Status</label>
                                <select class="form-select form-select-sm" id="status">
                                    <option>All Status</option>
                                    <option>Published</option>
                                    <option>Draft</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-secondary btn-sm w-100">
                                    <i class="ri-filter-line"></i> Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts Table -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Views</th>
                                        <th>Likes</th>
                                        <th>Published</th>
                                        <th class="pe-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-4">
                                            <div>
                                                <p class="fw-bold mb-1">Getting Started with Web Development</p>
                                                <small class="text-muted">A comprehensive guide for beginners...</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">Technology</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Published</span>
                                        </td>
                                        <td>1.2K</td>
                                        <td>45</td>
                                        <td>Mar 15, 2024</td>
                                        <td class="pe-4">
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary me-1" title="View">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4">
                                            <div>
                                                <p class="fw-bold mb-1">UI/UX Design Principles 101</p>
                                                <small class="text-muted">Master the essentials of user-centered design...</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Design</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Published</span>
                                        </td>
                                        <td>987</td>
                                        <td>52</td>
                                        <td>Mar 14, 2024</td>
                                        <td class="pe-4">
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary me-1" title="View">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4">
                                            <div>
                                                <p class="fw-bold mb-1">Growing Your Online Business</p>
                                                <small class="text-muted">Strategies to scale your business...</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">Business</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Published</span>
                                        </td>
                                        <td>2.1K</td>
                                        <td>61</td>
                                        <td>Mar 13, 2024</td>
                                        <td class="pe-4">
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary me-1" title="View">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4">
                                            <div>
                                                <p class="fw-bold mb-1">React Hooks Best Practices</p>
                                                <small class="text-muted">Expert tips for writing clean React code...</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">Technology</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning text-dark">Draft</span>
                                        </td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>Mar 12, 2024</td>
                                        <td class="pe-4">
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary me-1" title="View">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4">
                                            <div>
                                                <p class="fw-bold mb-1">CSS Grid vs Flexbox</p>
                                                <small class="text-muted">Understanding layout methods in CSS...</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Design</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Published</span>
                                        </td>
                                        <td>1.5K</td>
                                        <td>38</td>
                                        <td>Mar 11, 2024</td>
                                        <td class="pe-4">
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary me-1" title="View">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="ri-arrow-left-s-line"></i> Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next <i class="ri-arrow-right-s-line"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>