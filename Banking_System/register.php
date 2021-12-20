<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Customer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

</head>

<body style=background-color:#d9e6f2;>
  <?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $acc = $_POST['acc_no'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    
    $sqlq = "ALTER TABLE users AUTO_INCREMENT = 1;";
    $resultq = mysqli_query($con, $sqlq);
    

    $sql = "insert into users(acc_no,name,email,balance) values('{$acc}','{$name}','{$email}','{$balance}')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
    }
  }

  ?>

  <?php
  include 'navbar.php';
  ?>

  <h2 class="text-center pt-4">Add a Customer</h2>
  <br>

  <div class="background">
    <div class="container">
      <div class="screen">
       <div class="screen-header">
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div> 
        <div class="screen-body">
          <div class="screen-body-item left">
            <img class="img-fluid" src="img/user1.jpg" style="border: none; border-radius: 50%;">
          </div>
          <div class="screen-body-item">
            <form class="app-form" method="post">
            <div class="app-form-group">
                <input class="app-form-control" placeholder="ACC NUMBER" type="number" name="acc_no" autocomplete="off" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" type="text" name="name" autocomplete="off" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL" type="email" name="email" autocomplete="off" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" min="100" max="10000000" autocomplete="off" required>
              </div>
              <br>
              <div class="app-form-group button">
                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>