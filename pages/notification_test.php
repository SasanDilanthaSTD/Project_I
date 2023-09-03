<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../assets/js/mail.js" type="text/javascript"></script>
</head>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
    (function () {
        emailjs.init("fYPcLvIPnNJkxzpZu");
    })();
</script>
<body>
<div class="container">
    <h1>Contact Us</h1>
        <p>
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" id="email_id" name="email_id" required>
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>
        <p>

            <button onclick="SendMail()">Send</button>
        </p>
</div>

</body>
</html>