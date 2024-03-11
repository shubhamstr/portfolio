<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" alt="" style="width:35px"> Portfolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
            $page = $_SERVER['PHP_SELF'];
            // print_r($page); 
            
            
            ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?=str_contains($page, 'index.php') ? 'active': ''?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=str_contains($page, 'skills.php') ? 'active': ''?>" aria-current="page" href="skills.php">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=str_contains($page, 'projects.php') ? 'active': ''?>" aria-current="page" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=str_contains($page, 'contact.php') ? 'active': ''?>" aria-current="page" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>