<!DOCTYPE html>
<html lang="en">

<head>
	<title>HILL TRACKS</title>
	<!-- ONLINE -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- OFFLINE -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- FAVICON -->
	<link rel="icon" type="image/ico" href="assets/images/logo.ico"/>
</head>

<body>
	<!-- ONLINE -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- OFFLINE -->
	<script src="assets/bootstrap/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    
    <p>
        <img align="left" class="center-block img-rounded img-responsive" src="assets/images/logoMain.jpg" alt="BEAUTIFUL BANGLADESH">
        <?php
        echo "<p align=\"right\" style=\"color:green\">"."<br>"."BANGLADESH || ".date("h:i:sa") . "<br>"."</p>";
        echo "<p align=\"right\" style=\"color:red\">".date("l d/m/Y")."</p>";
        ?>
    </p>
    <br>

            <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">BANGLADESH</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="home.php">HOME</a></li>
          <li><a href="aboutbd.php">ABOUT BANGLADESH</a></li>
          <li><a href="#">TRAVEL ESSENTIAL</a></li>
          <li><a href="#">TRANSPORTS</a></li>
          <li><a href="#">VISA PROCESS</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="#">WHERE TO STAY?</a></li>
          <li><a href="nationalan.php">NATIONAL ANTHEM</a></li>
        </ul>
      </div>
    </nav>
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/images/1.jpg" alt="Chania">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="assets/images/2.jpg" alt="Chania">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="assets/images/3.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="assets/images/4.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <br>
    <br>
    <br>
        
    
    
<div class="container">
 <h1 style="color:red;">Bandarban</h1>
 <img src="assets/images/bandarban.jpg" width="800px" height="400px" /> <br> <br>
 <p align="justify">Bandarban is in Chittagong division and located in southeastern Bangladesh. It is one the most attractive travel destination in Bangladesh for its adventurous characteristics and heavenly scenic beauty. This eventually gets really hard to leave if anyone visits Bandarban. The scenic beauty will undoubtedly captivate your soul. Bandarban includes the three highest peak of Bangladesh — Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three god’s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.</p>

<br>
<br>
<br>
    
<?php
            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $database_name = "bangladesh";
            //Create connection
            $mysqli_database_connection = new mysqli($server_name, $user_name, $password, $database_name);
            //Check connection
            //connection failed
            if ($mysqli_database_connection->connect_error)
            {
                die("ERROR CONNECTING TO MySQL SERVER." . $mysqli_database_connection->connect_error);
            }
            //connection established
            else
            {
                $my_sql_query = "SELECT * FROM hilltrack";
                $result = $mysqli_database_connection->query($my_sql_query);
                if ($result->num_rows > 0)
                {
                        while ($row = $result->fetch_assoc())
                        {   
                            $newS1 = nl2br($row["description"]);
                            $newS2 = nl2br($row["howtogo"]);
                            //newL = "assets/images/".$row["image"];
                            echo "<br>";
                            echo "<h3>".$row["id"]." : ".$row["title"]."</h3>"."<br>";
                            echo "<img  class=\"center-block img-responsive img-rounded\"
                            src=\"assets/images/$row[image]\" alt=\"no image\">" . "<br>";
                            echo "<h4>"."DESCRIPTION : "."</h4>".$newS1."<br>";
                            echo "<h4>"."HOW TO GO : "."</h4>".$newS2."<br>";
                            //echo $row["description"]."<br>";
                            //echo $row["howtogo"]."<br>";
                        }
                }
                
            }
?>

    
    
</div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
</body>

</html>