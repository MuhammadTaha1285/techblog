<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Blog Website</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
    <div class="container">

        <!-- Left Logo -->
        <a class="navbar-brand fw-bold fs-3" href="#">
            TechBlog
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Middle Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Blogs
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Blog/programming.php">Programming</a></li>
                        <li><a class="dropdown-item" href="Blog/ai.php">Artificial Intelligence</a></li>
                        <li><a class="dropdown-item" href="Blog/blockchain.php">Blockchain</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

            </ul>
        </div>

        <!-- Right Side -->
        <div class="d-flex align-items-center gap-3">

            <a href="#" class="btn btn-gradient">
                Get Started
            </a>

            <div class="social-icons d-none d-lg-flex">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

        </div>

    </div>
</nav>

<!-- ================= SLIDER ================= -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <div class=""></div>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4" class="d-block w-100 slider-img">
            <div class="carousel-caption">
                <h1>Programming Blogs</h1>
                <p>Explore coding tutorials and development tips.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995" class="d-block w-100 slider-img">
            <div class="carousel-caption">
                <h1>Artificial Intelligence</h1>
                <p>Latest AI trends and innovations.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0" class="d-block w-100 slider-img">
            <div class="carousel-caption">
                <h1>Blockchain Technology</h1>
                <p>Future of decentralization and crypto.</p>
            </div>
        </div>

    </div>

</div>

<!-- ================= FEATURED BLOGS ================= -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Featured Blogs</h2>
            <p>Latest technology insights and tutorials.</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4">
                    <div class="p-4">
                        <h4>Programming</h4>
                        <p>Learn modern programming concepts and best development practices.</p>
                        <a href="Blog/programming.php" class="btn btn-gradient">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995">
                    <div class="p-4">
                        <h4>Artificial Intelligence</h4>
                        <p>Discover AI tools, machine learning and future innovations.</p>
                        <a href="Blog/ai.php" class="btn btn-gradient">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0">
                    <div class="p-4">
                        <h4>Blockchain</h4>
                        <p>Understand blockchain networks and decentralized systems.</p>
                        <a href="Blog/blockchain.php" class="btn btn-gradient">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= BANNER ================= -->
<section class="banner-section">

    <div class="overlay"></div>

    <div class="banner-content">
        <h2>Explore The Future Of Technology</h2>

        <p>
            Stay updated with programming, AI, blockchain and emerging technologies.
        </p>

        <a href="#" class="btn btn-gradient btn-lg">
            Explore Now
        </a>
    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer class="footer-section">

    <div class="container text-center">

        <h3 class="mb-3">TechBlog</h3>

        <p>
            Professional technology blog sharing valuable insights and tutorials.
        </p>

        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <hr>

        <p class="mb-0">
            © 2026 | All Rights Reserved
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>