

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passbook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">


    <style type="text/css">
        button {
            border: none;
            background: #40bf80;
            color: white;
        }

        button:hover {
            background-color: #40bf80;
            color: black;
        }

        th {
            background-color: #336699;
            color: white;
        }

        td {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body style=background-color:#d9e6f2>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    ?>

    <?php
    include 'navbar.php';
    ?>

<?php
$sender_acc=$_GET['acc_no'];
include 'config.php';

$sqlq = "select * from transaction where sender_acc=$sender_acc;";
$res = mysqli_query($con, $sqlq);

$sqlp = "select * from users where acc_no=$sender_acc;";
$detres = mysqli_query($con, $sqlp);


$det=$detres->fetch_row();
?>
 <div class="container">
    <div class="row ml-2">
    <h2><b>PROFILE</b></h2>
    </div>
    <div class="row mb-3">
    <div class="col-md-4">
    <div class="card"style="width: 27rem ;background-color:#FFFFFF">
        <div class="card-body">
        <h3 class="card-title"><b><?php echo $det[2] ?></b></h3>
    <p class="card-text"><h5><b>ID:</b> &nbsp<?php echo $det[0] ?></h5></p>
    <p class="card-text"><h5><b>ACCOUNT NUMBER:</b> &nbsp<?php echo $det[1] ?></h5></p>
    <p class="card-text"><h5><b>EMAIL:</b> &nbsp<?php echo $det[3] ?></h5></p>
    <p class="card-text"><h5><b>BALANCE:</b> &nbsp<?php echo $det[4] ?></h5></p>
        </div>
    </div>
  </div>  
    </div>
    </div>
    
    
<?php
if(mysqli_num_rows($res) !=0)
{
    ?>
   <div class="container text-center">
    <h2><b>TRANSACTION DETAILS</b></h2>
    <br>
    
    <div class="table-responsive mb-5">
    <table class='table table-bordered text-center'>
  
    <thead>
      <tr>
        <th scope="col" colspan="2">SENDER</th>
    
        <th scope="col" colspan="2">RECEIVER</th>
        
        <th scope="col" rowspan="2">TRANSACTION AMOUNT</th>
        <th scope="col" rowspan="2">DATE AND TIME</th>
        
      </tr>
    <tr>
    <th scope="col">ACCOUNT NUMBER</th>
      <th scope="col">NAME</th>
      
      <th scope="col">ACCOUNT NUMBER</th>
     
      <th scope="col">NAME</th>
      

      </tr> 
    </thead>
    <tbody>
    <?php
    while($row=$res->fetch_row())
    {   
    ?>
    
    
    <tr>
   
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[5] ?></td>
    <td><?php echo $row[6] ?></td>
    
    </tr>
   
           
    <?php
    }
    ?>
     </tbody>
    </table>
    </div>
    </div>
    <?php
}
else
{
    echo "<h3 class='text-center'><b>NO TRANSACTIONS YET</b></h3>";
}

?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>