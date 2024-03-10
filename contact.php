<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>

<body>
    <div class="container">
        <header-ele data-page="contact.php"></header-ele>
        <section class="contact_section">
            <div class="contact_form">
                <form action="server/contact.php" id="form_contact" method="post">
                    <!-- <form action="mailto:" id="form_contact" method="post"> -->
                    <h2>Contact Me</h2>
                    <input type="text" placeholder="Name" name="name" id="name" />

                    <input type="text" placeholder="Email" id="email" name="email" />

                    <textarea placeholder="Message" rows="5" id="msg" name="msg"></textarea>
                    <small id="Err"></small><br />
                    <input type="hidden" id="url" name="url" />
                    <input type="submit" name="submit_form" value="SEND" onclick="return validate()" />
                </form>
            </div>
        </section>
    </div>
    <?php include('includes/scripts.php') ?>
</body>

</html>