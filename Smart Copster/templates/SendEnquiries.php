<?php include "sidebar.php" ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title></title>
    <link href="assets/css/style3.css" rel="stylesheet" />
    <style>
.avatar {
  vertical-align: right;
  width: 400px;
  height: 400px;
  border-radius: 50%;
}
</style>
    
</head>
<body>

<div class="container">
<img src="assets/images/contact.jpg" alt="Avatar" class="avatar">
   <form onsubmit="sendEmail(); reset(); return false;" >
    <h3>Send Your Enquiries to Our Police Personnel</h3>
    <input type="text" id="name" placeholder="Your Name" required>
    <input type="email" id="email" placeholder="Email" required>
    <input type="text" id="phone" placeholder="Number" required>
    <textarea id="message" rows="4" placeholder="Send your inquireies"></textarea>
    <button type="submit">Send</button>
   </form>
</div>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail(){
        Email.send({
          Host : "smtp.elasticemail.com",
          Username : "gogul03dec2000@gmail.com",
          Password : "1242323EE909F6A7DD0EF59954A16897E3B9",
          To : 'gogul03dec2000@gmail.com',
          From : document.getElementById("email").value,
          Subject : "New Contact form inquriry",
          Body : "Name: " +document.getElementById("name").value
             + "<br> Email:" +document.getElementById("email").value
             + "<br> Phone no:" +document.getElementById("phone").value
             + "<br> Message:" +document.getElementById("message").value
}).then(
  message => alert("Message Sent Successfully")
);
    }
    </script>

</body>
</html>
<?php include "footer.php"?>