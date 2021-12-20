<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">


    <title>Basic Banking System</title>
    <style type="text/css">
        button {
            position: relative;
            display: inline-block;
            padding: 10px 10px;
            margin-bottom: 15px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-image: linear-gradient(315deg, #2a2a72 0%, #4361ee 74%);
            border: none;
            border-radius: 12px;
            box-shadow: 6px 6px 6px #808080;
        }

        button:hover,
        :focus h1:hover {
            transform: scale(1.1);
        }

        h1 {
            background-color: #ffffff;
        }

        .sub {
            width: 250px;
        }
    </style>

</head>


<body style="background-color:white;">
    <?php
    include 'navbar.php';
    ?>
   
   <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col col-lg-2">
              
                 
                 </div>

                 <div class="col-sm-12 col-md">
                 <div class="heading text-center my-5">
                  
                 <h3>Step into a World of Benefits with</h3>
                   <h1>SPARKS BANK</h1>
                   </div>

                   <div class="heading text-center my-5">
                  
                 <h3>Avail the following Services at your Fingertips!</h3>
                   
                   </div>
               </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.jpg" class="img-fluid pt-2">
              </div>
            </div>

        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="img/userdet.jpg" class="img-fluid sub">
                <br><br>
                <a href="customers.php"><button>Customers Details</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transaction.jpg" class="img-fluid sub">
                <br><br>
                <a href="transfermoney.php"><button>Money Transfer</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transachistory.jpg" class="img-fluid sub">
                <br><br>
                <a href="transactionhistory.php"><button>Transaction History</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/adduser.jpg" class="img-fluid sub">
                <br><br>
                <a href="register.php"><button>Add Customer</button></a>
            </div>
        </div>
    </div>


  <!--Footer section -->
    <footer class="text-center mt-5 ">
        <span>&copy 2021. Made by <b>DIVYA HEGDE</b></span>
      </footer>
       
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>