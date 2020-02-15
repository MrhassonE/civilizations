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

    <title>map</title>
</head>

<body>

  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">Civilization</a>
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

  <!-- The slideshow images -->
  <div class="container mt-3">
    <div id="myCarousel" class="carousel slide">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
      </ul>
      
      <div class="container mt-3">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/banner.jpg" alt="Los Angeles" width="1100" height="auto">
            </div>
            <div class="carousel-item">
              <img src="assets/images/bg1.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
              <img src="assets/images/bg2.png" alt="New York" width="1100" height="500">
            </div>
        </div>
          
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
    
    <script>
      $(document).ready(function(){
        // Activate Carousel
        $("#myCarousel").carousel();
          
        // Enable Carousel Indicators
        $(".item1").click(function(){
          $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
          $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
          $("#myCarousel").carousel(2);
        });
          
        // Enable Carousel Controls
        $(".carousel-control-prev").click(function(){
          $("#myCarousel").carousel("prev");
        });
        $(".carousel-control-next").click(function(){
          $("#myCarousel").carousel("next");
        });
      });
    </script>

    <div>


    <?php
    /*
      include 'assets/config/config.php';

      $sql = "SELECT name, title, text FROM iraq_civils";
      $result = $conn-> query($sql);
      
      if($result-> num_rows > 0){
          while($row = $result->fetch_assoc()){
              
              echo '<center><h4>' . $row["title"]. '</h4></center>';
              echo '<p>' . $row["text"]. '</p>';
        }
      }
      else{
          echo "0 result";
      }
      $conn->close();
    */
    ?>

      <article>
        <center><h4>Babelyon city</h4></center>
    
        <p>Google Chrome is a free, open-source web browser developed by Google, released in 2008.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quod corrupti expedita
            perspiciatis, laborum natus sint voluptas non. Voluptate sit, nemo sed harum doloribus non.
              Earum, ab similique! Dolore, libero!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis modi maxime nemo
            iste enim recusandae suscipit quo perspiciatis natus totam non error earum facil
            is, eos eius accusamus sed accusantium! Ad.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores officiis quod v
            oluptates error blanditiis molestias, eaque consequatur fuga. Esse, ullam! Animi sunt 
            dolorem autem reprehenderit debitis. Dignissimos dolorum minima animi?
        </p>
      </article>
    </div>
  </div>

  <!-- footer -->
  <?php
  include 'footer.php';
  ?>


</body>
</html>