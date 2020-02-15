<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    <title>Civilizations</title>
</head>

<body>
 <!--header-->
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="login.php">Civilization</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <h4>Let's Learn about all the civilization in the world</h4>
<!--Animation earth-->
<div class="earth"></div>



 <!-- buttons of continent -->
<div class="container">
  <div class="row">
    <div class="col-12"><h4>choose a language:</h4></div>
    <div class="col-6 col-lg-4"><a href="index.php" type="button" class="btn btn2 btn-outline-primary">English</a></div>
    <div class="col-6 col-lg-4"><a href="index2.php" type="button" class="btn btn2 btn-outline-primary">العربية</a></div>
  </div>
</div>


  <!-- footer -->
  <?php
    include 'footer.php';
  ?>