<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Contact Form</title>
</head>
<body>
  <div class="container mt-5">
    <form id="mailForm">
        <h3>Contact Form</h3><br>
        <input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
        <input type="text" id="name" name="name" placeholder="Name" class="form-control"><br>
        <input type="phone" id="phone" name="phone" placeholder="Phone Number" class="form-control"><br>
        <textarea id="message" name="message" placeholder="Message" class="form-control"></textarea><br>
        <button type="button" id="sendMail" class="btn btn-success">Send</button>
    </form>
    <br>
    <div id="errorMess"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="JS/formMail.js"></script>
</body>
</html>