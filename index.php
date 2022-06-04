<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/navbar.css">
  <script src="https://kit.fontawesome.com/30c61fc9c6.js" crossorigin="anonymous"></script>

  <title>Basic Banking System</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">

    <!-- Home page section -->

    <div class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>Welcome to</h3>
          <h1>SPARKS BANKING</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md  mb-3">
        <img src="img/bank3.jpg" class="img-fluid pt-2 bankImage">
      </div>
    </div>

    <!-- Activity section -->
    <div class="row activity text-center">
      <div class="col-md act">
        <img src="img/user.jpg" class="img-fluid">
        <br>
        <a href="createuser.php"><button>Create a User</button></a>
      </div>
      <div class="col-md act">
        <img src="img/transfer.jpg" class="img-fluid">
        <br>
        <a href="transfermoney.php"><button>Make a Transaction</button></a>
      </div>
      <div class="col-md act">
        <img src="img/history.jpg" class="img-fluid">
        <br>
        <a href="transactionhistory.php"><button>Transaction History</button></a>
      </div>
    </div>
  </div>


  <footer class="d-flex flex-wrap justify-content-between  align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"></svg>
      </a>
      <span class="text-muted">
        2022 Ravindran, Inc
      </span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex m-3">
      <li class="ms-3">
        <a class="text-muted"><i class="fa-brands fa-instagram"></i></a>
      </li>
      <li class="ms-3">
        <a class="text-muted"><i class="fa-brands fa-facebook-f"></i></a>
      </li>
      <li class="ms-3">
        <a class="text-muted"><i class="fa-brands fa-github"></i></a>
      </li>
      <li class="ms-3">
        <a class="text-muted" href="https://www.linkedin.com/in/p-ravindran/" ><i class="fa-brands fa-linkedin-in"></i></a>
      </li>
      <li class="ms-3">
        <a class="text-muted"><i class="fa-solid fa-envelope"></i></a>
      </li>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>