<?php require_once "./header.php" ?>

<body>
    <?php require_once "./navbar.php" ?>

    <!-- Post Content -->
    <article class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&h=400&fit=crop"
                        alt="Post featured image" class="img-fluid rounded mb-4">

                    <!-- Post Meta -->
                    <div class="d-flex flex-wrap gap-3 mb-4 text-muted small border-bottom pb-4">
                        <span class="badge bg-primary">Technology</span>
                        <span><i class="ri-calendar-line"></i> March 15, 2024</span>
                        <span><i class="ri-time-line"></i> 5 min read</span>
                        <span><i class="ri-eye-line"></i> 2.5K views</span>
                    </div>

                    <!-- Post Title -->
                    <h1 class="display-4 fw-bold mb-4 text-dark">Getting Started with Web Development</h1>

                    <!-- Author Info -->
                    <div class="d-flex align-items-center gap-3 mb-5 pb-4 border-bottom">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=50&h=50&fit=crop"
                            alt="Author" class="rounded-circle" width="50" height="50">
                        <div>
                            <h6 class="fw-bold mb-0">John Doe</h6>
                            <small class="text-muted">Full Stack Developer | Tech Enthusiast</small>
                        </div>
                        <button class="btn btn-sm btn-primary ms-auto">Follow</button>
                    </div>

                    <!-- Post Body -->
                    <div class="post-body mb-5">
                        <p class="lead text-muted">Web development has become an essential skill in today's digital
                            world. Whether you're looking to build a career or just want to create something for the
                            web, this guide will help you get started.</p>

                        <h3 class="fw-bold mt-5 mb-3">Why Learn Web Development?</h3>
                        <p>Web development is one of the most in-demand skills in the tech industry. Companies of all
                            sizes are looking for skilled developers who can create functional, beautiful websites and
                            applications. As a web developer, you'll have the opportunity to work on projects that
                            impact millions of users worldwide.</p>

                        <p>Beyond career opportunities, web development is incredibly rewarding. You get to see your
                            work come to life in the browser, and you can build solutions to real-world problems. The
                            learning curve is manageable for beginners, yet there's always something new to explore and
                            master.</p>

                        <h3 class="fw-bold mt-5 mb-3">The Three Pillars of Web Development</h3>
                        <p>Web development rests on three fundamental technologies:</p>

                        <h5 class="fw-bold mt-4 mb-2"><i class="ri-code-s-line"></i> HTML - The Structure</h5>
                        <p>HTML (HyperText Markup Language) provides the structure and content of web pages. It uses a
                            system of tags and elements to organize content, creating the foundation upon which all
                            websites are built. Learning HTML is the first step in your web development journey.</p>

                        <h5 class="fw-bold mt-4 mb-2"><i class="ri-palette-line"></i> CSS - The Style</h5>
                        <p>CSS (Cascading Style Sheets) is responsible for the visual presentation of web pages. With
                            CSS, you can control colors, layouts, typography, and responsive design. Modern CSS has
                            evolved to include features like Flexbox and Grid, making layout design more intuitive than
                            ever.</p>

                        <h5 class="fw-bold mt-4 mb-2"><i class="ri-terminal-line"></i> JavaScript - The Interactivity
                        </h5>
                        <p>JavaScript brings interactivity to web pages. It allows you to respond to user actions,
                            validate forms, animate elements, and communicate with servers. JavaScript has evolved from
                            a simple scripting language to a full-fledged programming language that powers both
                            front-end and back-end development.</p>

                        <h3 class="fw-bold mt-5 mb-3">Getting Started: Your First Steps</h3>
                        <p>Here's a practical roadmap to begin your web development journey:</p>

                        <div class="bg-light p-4 rounded mb-4">
                            <ol class="mb-0">
                                <li><strong>Learn HTML Basics:</strong> Start by understanding HTML structure, semantic
                                    elements, and forms.</li>
                                <li><strong>Master CSS:</strong> Learn styling, layouts with Flexbox and Grid, and
                                    responsive design principles.</li>
                                <li><strong>JavaScript Fundamentals:</strong> Understand variables, functions, DOM
                                    manipulation, and basic algorithms.</li>
                                <li><strong>Build Projects:</strong> Create small projects to reinforce your learning
                                    and build a portfolio.</li>
                                <li><strong>Learn a Framework:</strong> Once comfortable with basics, explore frameworks
                                    like React or Vue.js.</li>
                                <li><strong>Explore Back-end:</strong> Learn a server-side language like Python,
                                    Node.js, or PHP.</li>
                            </ol>
                        </div>

                        <h3 class="fw-bold mt-5 mb-3">Resources for Learning</h3>
                        <p>There are countless free and paid resources available:</p>
                        <ul>
                            <li><strong>Websites:</strong> freeCodeCamp, Codecademy, Udemy, Coursera</li>
                            <li><strong>Documentation:</strong> MDN Web Docs, W3Schools</li>
                            <li><strong>YouTube Channels:</strong> Traversy Media, The Net Ninja, Code with Harry</li>
                            <li><strong>Communities:</strong> Stack Overflow, Dev.to, Reddit's r/learnprogramming</li>
                        </ul>

                        <h3 class="fw-bold mt-5 mb-3">Common Mistakes to Avoid</h3>
                        <p>As you start your journey, avoid these common pitfalls:</p>
                        <ul>
                            <li>Trying to learn everything at once - focus on fundamentals first</li>
                            <li>Not building projects - hands-on experience is crucial</li>
                            <li>Copying code without understanding it - ensure you comprehend what you're learning</li>
                            <li>Neglecting practice - consistent practice is key to mastery</li>
                            <li>Giving up too early - learning to code takes time and persistence</li>
                        </ul>

                        <h3 class="fw-bold mt-5 mb-3">Conclusion</h3>
                        <p>Starting your web development journey is an exciting adventure. With dedication, consistent
                            practice, and a willingness to learn, you can develop the skills needed to build amazing web
                            applications. Remember, every expert was once a beginner. Start with the fundamentals, build
                            projects, and don't hesitate to ask for help from the community. Happy coding!</p>
                    </div>

                    <!-- Share & Actions -->
                    <div class="border-top border-bottom py-4 mb-5">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ri-thumb-up-line"></i> Like
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-bookmark-line"></i> Save
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-share-forward-line"></i> Share
                                </button>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="mb-5">
                        <h4 class="fw-bold mb-4">Comments (8)</h4>

                        <!-- Comment Form -->
                        <div class="mb-5 p-4 bg-light rounded">
                            <h6 class="fw-bold mb-3">Leave a Comment</h6>
                            <form>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3"
                                        placeholder="Share your thoughts..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>

                        <!-- Comments List -->
                        <div class="mb-4">
                            <div class="d-flex gap-3 mb-4">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=40&h=40&fit=crop"
                                    alt="Commenter" class="rounded-circle" width="40" height="40">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Jane Smith</h6>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                    <p class="text-muted mb-2">Great article! The step-by-step approach is really
                                        helpful for beginners. I'm starting my web development journey and this gave me
                                        a clear roadmap.</p>
                                    <button class="btn btn-sm btn-link p-0 text-primary">Reply</button>
                                </div>
                            </div>

                            <div class="d-flex gap-3 mb-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop"
                                    alt="Commenter" class="rounded-circle" width="40" height="40">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Michael Chen</h6>
                                        <small class="text-muted">5 hours ago</small>
                                    </div>
                                    <p class="text-muted mb-2">Thanks for breaking down the fundamentals so clearly.
                                        Would love to see a follow-up article on JavaScript best practices!</p>
                                    <button class="btn btn-sm btn-link p-0 text-primary">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Card -->
                    <div class="card shadow-sm border-0 mb-4 ">
                        <div class="card-body text-center">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop"
                                alt="Author" class="rounded-circle mb-3" width="100" height="100">
                            <h5 class="fw-bold">John Doe</h5>
                            <p class="text-muted small">Full Stack Developer | Tech Enthusiast | Coffee Lover</p>
                            <p class="small">John has been writing about web development for 3 years and loves helping
                                others learn to code.</p>
                            <button class="btn btn-primary btn-sm w-100">Follow Author</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </article>

   
        <?php require_once "./footer.php" ?>