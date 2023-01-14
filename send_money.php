<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">

    <title>Send money - Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color:#ffffff;">




    <?php include 'spin.php'; ?>
    <style>
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">

   

    <!-- Brand -->
    <a class="navbar-brand" href="#">
          <img src="img/spark.png" alt="Bootstrap" width="80" height="70">
        </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarCollapse">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <i class="fe fe-x"></i> -->
      </button>

      <!-- Navigation -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <li><a href="index.php">Home</a></li>
      
</li>
        <li class="nav-item dropdown">
          <!-- <a class=" " id="navbarPages" data-bs-toggle="dropdown" href="history.html" aria-haspopup="true" aria-expanded="false">
            View All Customers
          </a> -->
          <li><a href="history.php">View All Customers</a></li>
    
         
         
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarAccount" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
            Transfer Money
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarAccount">
            <li class="dropdown-item dropend">
              <a href="customers.php">
                Transaction History
              </a>
              <div class="dropdown-menu">
                
                
              </div>
            </li>
            <!-- <li class="dropdown-item dropend">
              <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                Sign In
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./signin-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="./signin-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="./signin.html">
                  Basic
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninHorizontal">
                  Modal Horizontal
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninVertical">
                  Modal Vertical
                </a>
              </div>
            </li>
            <li class="dropdown-item dropend">
              <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                Sign Up
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./signup-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="./signup-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="./signup.html">
                  Basic
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupHorizontal">
                  Modal Horizontal
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupVertical">
                  Modal Vertical
                </a>
              </div>
            </li> -->
            <li class="dropdown-item dropend">
              <!-- <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                Password Reset
              </a> -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./password-reset-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="./password-reset-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="./password-reset.html">
                  Basic
                </a>
              </div>
            </li>
            <li class="dropdown-item dropend">
              <!-- <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                Error
              </a> -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./error-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="./error-illustration.html">
                  Illustration
                </a>
              
              </div>
            </li>
          </ul>
        </li>
        <li><a href="about.php">About</a></li>
        <li class="nav-item dropdown">

    <li><a href="send_money.php"></a></li>
    
          <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
            <div class="list-group list-group-flush">
              <a class="list-group-item" href="./docs/index.html">

                <!-- Icon -->
                <!-- <div class="icon icon-sm text-primary">
                  <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M8 3v.5A1.5 1.5 0 009.5 5h5A1.5 1.5 0 0016 3.5V3h2a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h2z" fill="#335EEA" opacity=".3"></path><path d="M11 2a1 1 0 012 0h1.5a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-5a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H11z" fill="#335EEA"></path><rect fill="#335EEA" opacity=".3" x="7" y="10" width="5" height="2" rx="1"></rect><rect fill="#335EEA" opacity=".3" x="7" y="14" width="9" height="2" rx="1"></rect></g></svg>                </div>
 -->
              

              </a>
             

                <!-- Badge -->
                <span class="badge rounded-pill bg-primary-soft ms-auto">
                  2.2.0
                </span>

              </a>
            </div>
          </div>
        </li>
      </ul>

      <!-- Button -->
      <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="send_money.php" target="_blank">
        Send Money
      </a>

    </div>
   

  </div>
</nav>


    <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px rgb(0, 0, 0);
            

            font-weight: bold;
            color: rgb(227, 16, 16);
        }

        .mybtn:active {
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
        }

        td {
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

    <center>

        <div class="container" ">
            <div
                style="width:80%; background-color:rgba(255, 255, 255, 0.5); padding:5px 5px 5px 5px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:rgb(0, 0, 0);">Transfer Money</h1>
            </div>
            <br><br>
            <div class="" style=" backdrop-filter: blur(5px);  border-radius:5px;  ">
                <form action="send_money.php" method="post">
                    <table>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno1" id=""
                                    placeholder="Sender's Account Number"
                                    value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>"></td>
                        <tr>
                        <tr>
                            <td><input type="number" class="formin form-control" name="amount" id=""
                                    placeholder="Amount to Transfer"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno2" id=""
                                    placeholder="Reciever's Account Number"></td>
                        </tr>
                    </table>
                    <br><input class="btn mybtn btn-outline-light" type="submit" value="Transfer"><br><br>
                    <p style="">Want to check your balance? check <a style="color:blue;" href="history.php">here</a></p>
                </form>
            </div>
        </div>


        <?php 

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){

    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
   
    
    $checkblcquery = "SELECT blc FROM users where accno='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

    if($ava_blc >= $amount){
    $sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
    $sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>
    </center>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<footer class="container-footer footer full-width">
<div class="grid-child">
<!-- Menu footer mobile -->
<div class="d-flex justify-content-around mx-auto text-center mb-4 d-block d-sm-none small">
<div class="mx-2">
<a class="-" href="/en/about">About</a>
</div>
<div class="mx-3">
<a class="-" href="/en/blog">Blog</a>
</div>
<div class="mx-3">
<a class="-" href="/en/sitemap">Sitemap</a>
</div>
<div class="mx-2">
<a class="-" href="/mentions-legales-vie-privee">Legal notice</a>
</div>
</div>
<!-- Copyright desktop -->
<div class="small text-center mx-auto">
<div class="d-none d-lg-block footer1">Copyright © 2023 web-eau.net. All Rights Reserved. - <a href="/mentions-legales-vie-privee">Legal notice</a></div>
<div class="d-block d-sm-none footer1">Copyright © 2023 web-eau.net. All Rights Reserved. </div>
<div class="fs-7 pt-2 footer2 d-sm-none d-md-block d-none d-sm-block"><a href="https://internship.thesparksfoundation.info/">Spark Foundation.</a> GRIP is The Graduate Rotational Internship Program is a unique offer for <br> students and recent graduates to experience and join The Sparks Foundation.<br> In addition to skills-specific tasks, we encourage interns to build a credible professional profile.

</div>
<!-- R&eacute;seaux sociaux mobile -->
<div class="mt-4 footer2 d-block d-sm-none d-flex justify-content-evenly">
<div><a class="social-facebook" target="_blank" rel="noopener" href="https://www.facebook.com/page.web.eau.net/" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></div>
<div><a class="social-twitter" target="_blank" rel="noopener" href="https://twitter.com/web_eau_net" aria-label="twitter"><i class="fab fa-twitter"></i></a></div>
<div><a class="social-jed" target="_blank" rel="noopener" href="https://volunteers.joomla.org/joomlers/290-daniel-dubois" aria-label="Joomla Volunteer Portal"><i class="fab fa-joomla"></i></a></div>
</div>
</div>
</div>
</footer>
</body>

</html>