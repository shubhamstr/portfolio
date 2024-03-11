<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>

<body class="vh-100">
    <div class="container-fluid px-0 h-100">
        <?php include 'includes/navbar.php'?>


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