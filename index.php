<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'?>

<body class="vh-100">
    <div class="container-fluid px-0 h-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="skills.php">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container h-75">
            <div class="row h-100">
                <div class="col-10 offset-1 d-flex align-items-center justify-content-center">
                    <div class="row px-5">
                        <div class="col-9">
                            <h2 class="fw-bold">Hello,<br />My name is Shubham Sutar</h2>
                            <p>
                                I'm a Full Stack Web Developer lives in Pune, India.<br />
                                I make Website, usually with JavaScript, PHP, React Js,<br /> Bootstrap. Feel free
                                to take a look at my latest
                                <a href="project2.php" class="text-decoration-none">projects.</a><br />connect me at:
                            </p>
                            <div class="my-3 social">
                                <a href="https://github.com/shubhamstr" target="_blank" class="p-1 text-decoration-none">
                                    <i class="fab fa-github p-2 rounded-circle bg-red"></i>
                                </a>
                                <a href="https://codepen.io/shubhamstr" target="_blank" class="p-1 text-decoration-none">
                                    <i class="fab fa-codepen p-2 rounded-circle"></i>
                                </a>
                                <a href="https://twitter.com/shubhamstr_" target="_blank" class="p-1 text-decoration-none">
                                    <i class="fab fa-twitter p-2 rounded-circle"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/shubhamstr" target="_blank" class="p-1 text-decoration-none">
                                    <i class="fab fa-linkedin-in p-2 rounded-circle"></i>
                                </a>
                            </div>
                            <a class="text-decoration-none btn btn-primary btn-sm"
                                href="https://drive.google.com/uc?export=download&id=1NQKhFxoJMWBMQonjX0fG4qZktYwjvNtZ7GZQWpIb0-4">Download
                                My Resume</a>
                        </div>
                        <div class="col-3">
                            <img src="assets/images/lapee.jpg" alt="lapee" class="w-100 lapee_img" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'includes/scripts.php'?>
</body>

</html>