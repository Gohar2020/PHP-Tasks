<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <title>Home</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="container">
    <div class="pricing-header p-3 pb-md-4 text-center">
      <h3 class="display-4 fw-normal">Our Articles</h3> 
    </div>
    <div class="d-flex flex-wrap block">
      <?php
        for($i = 0; $i < 5; $i++):
      ?>
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Header</h4>
          </div>
          <div class="card-body">
           <img src="img/<?php echo $i+1 ?>.jpg" class="image-thumbnail" alt="">
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
        <?php endfor; ?>
    </div>
    <div class="todo mt-5">
      <h3>To Do List</h3><br>
      <form action="/add.php" method="post">
          <input type="text" name="task" id="task" placeholder="Need to do.." class="form-control"><br>
          <button type="submit" name="sendTask" class="btn btn-success">Add</button>
      </form>
      <br>
      <br>
      <?php
        require 'configDB.php';

        echo '<ul>';
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
          echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
        }
        echo '</ul>';

      ?>
    </div>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>