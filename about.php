<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>About</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="container mt-5">
    <form action="check.php" method="post">
      <h3>Contact Form</h3><br>
      <input type="email" name="email" placeholder="Email" class="form-control"><br>
      <textarea name="message" placeholder="Message" class="form-control"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Send</button>
    </form>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>