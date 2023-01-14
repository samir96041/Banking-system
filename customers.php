<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest"> -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <title>Transactoions</title>
</head>

<body style="background-color:#ffffff;">
  <?php include 'spin.php'; ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">



      <!-- Brand -->
      <!-- <a class="navbar-brand" href="#">
          <img src="img/spark.png" alt="Bootstrap" width="80" height="70">
        </a> -->


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
          <li><a href="send_money.html"></a></li>

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
    .nav-link:hover {
      text-decoration: underline;
    }
  </style>



  <style>
    th,
    td {
      text-align: center;
    }
  </style>

  <center>



    <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
      <div style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
        <h1 style=" color:white;">Transaction History</h1>
      </div>
      <?php

      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn) {
        die("Connection not established: " . mysqli_connect_error());
      } else {

        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
      ?>
        <table class="table table-dark" style="margin-top: 30px;">
          <thead>
            <tr>
              <th scope="col">Sender</th>
              <th scope="col">Reciever</th>
              <th scope="col">Amount</th>
              <th scope="col">Status</th>
            </tr>
          </thead>

          <style>
            .mybtn {

              box-shadow: 2px 2px 10px black;
              border-radius: 30px;
              font-weight: bold;
              background-color: lightgreen;
              color: green;
            }

            .mybtn:active {
              background-color: green;
              color: lightgreen;
            }
          </style>
          <?php
          echo "<tbody>";
          while ($row = mysqli_fetch_assoc($result)) {
            if (!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount']))) {
              echo    '
            <tr>
              <td>' . $row['sender'] . '</td>
              <td>' . $row['receiver'] . '</td>
              <td>' . $row['amount'] . '</td>
              <td>'; ?> <?php if ($row['status'] == "succeed") {
                          echo '<b><p style="color:green;">Succeed</p></b>';
                        } else {
                          echo '<b><p style="color:red;">Failed</p></b>';
                        } ?>
        <?php echo '</td>
              </tr>';
            }
          }
        }
        echo "</tbody>";
        ?>
    </div>
  </center>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>