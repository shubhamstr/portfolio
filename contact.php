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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="skills.php">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container h-75">
            <div class="row h-100">
                <div class="col-10 offset-1 d-flex align-items-center justify-content-center">
                    <form class="w-50" action="server/contact.php" id="form_contact" method="post">
                        <div class="text-center mt-4">
                            <h2>Contact Form</h2>
                            <p class="text-danger" id="Err"></p><br />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputMessage" class="form-label">Message</label>
                            <textarea name="" class="form-control"  id="exampleInputMessage" cols="30" rows="5"></textarea>
                        </div> 
                        <div class="text-center">
                            <input type="hidden" id="url" name="url" />
                            <button type="submit" name="submit_form" class="btn btn-primary" onclick="return validate()">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <?php include('includes/scripts.php') ?>
</body>

</html>