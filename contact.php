<?php
include 'connection.php';
?>
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
<!-- ================= CONTACT SECTION ================= -->
<section class="py-5 contact-section">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT SIDE CONTACT DETAILS -->
            <div class="col-lg-5">

                <h2 class="fw-bold mb-3">Get In Touch</h2>
                <p class="text-muted">
                    Have any questions about TechBlog, feedback, or suggestions?
                    Reach out to us anytime.
                </p>

                <div class="d-flex align-items-start mb-4 contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h5>Email</h5>
                        <p>support@techblog.com</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4 contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h5>Phone</h5>
                        <p>+92 300 1234567</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4 contact-item">
                    <i class="fas fa-location-dot"></i>
                    <div>
                        <h5>Address</h5>
                        <p>Aptech Gulshan-II, Karachi</p>
                    </div>
                </div>

            </div>


<?php
if (isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   $messg = $_POST['messg'];

$query = "INSERT INTO feedback (name, email, phone, messg)
VALUES ('$name', '$email', '$phone', '$messg')
";
if(mysqli_query($conn, $query)){
   echo" 
   <script>
   alert('Feedback submitted successfully! Thank you for your feedback.😍');d
   window.location.href = 'contact.php';
   </script>";
}
else{
    die(mysqli_error($conn));
}
mysqli_close($conn);
}
?>
            <!-- FEEDBACK FORM -->
            <div class="col-lg-7">

                <div class="form-box shadow-sm p-4">

                    <h3 class="fw-bold mb-4">Send Feedback</h3>

                    <form method="post">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                            </div>

                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" rows="6" placeholder="Message" name="messg" required></textarea>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary w-100 py-2" name="submit">
                                    Send Message
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</section>


<!-- ================= GOOGLE MAP ================= -->
<section class="map-section">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Our Location</h2>

        <iframe
            src="https://maps.google.com/maps?q=Aptech%20Gulshan%20II%20Karachi&t=&z=15&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
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