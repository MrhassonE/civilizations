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

    <title>Civilization</title>
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
<!--
<table class="table">
 
<?php
/*
include 'assets/config/config.php';

$sql = "SELECT * FROM iraq_civils";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<a class="civils" href= "civil_page.php" ><div> ' . $row["name"]. '</br></br></div></a>';
        echo '<h4>' . $row["id"]. '</h4>';
    }
    echo "</table>";
}
else{
    echo "0 result";
}
*/
?>
</table>
-->
<h1>Google Map Api</h1>
<!-- google map api key of selected country-->
<div id="googleMap" style="width:100%;height:450px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


  <!-- footer -->
  <?php
  include 'footer.php';
  ?>