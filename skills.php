<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>

<body class="vh-100">
    <div class="container-fluid px-0 h-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index2.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="skills2.php">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="projects2.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact2.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container h-75">
            <div class="row h-100">
                <div class="col-10 offset-1 d-flex align-items-center justify-content-center">

                <div class="main" id="main"></div>
                </div>

            </div>
        </div>
    </div>
    <?php include('includes/scripts.php') ?>
</body>

</html>