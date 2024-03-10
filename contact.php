<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/lappe.ico" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/fontawsome.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/contact.css" />
    <title>Contact Form</title>
    <script defer src="assets/js/Header.js"></script>
  </head>
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

            <textarea
              placeholder="Message"
              rows="5"
              id="msg"
              name="msg"
            ></textarea>
            <small id="Err"></small><br />
            <input type="hidden" id="url" name="url" />
            <input
              type="submit"
              name="submit_form"
              value="SEND"
              onclick="return validate()"
            />
          </form>
        </div>
      </section>
    </div>
    <script src="assets/js/contact.js"></script>
  </body>
</html>
