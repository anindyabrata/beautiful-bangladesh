<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sea Shore </title>
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
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/images/1.jpg" alt="SYLHET">
          <div class="carousel-caption">
            <h3>SYLHET</h3>
            <p>"The land of two leaves and a bud". It is also called camellia, green carpet or Tea Mountain.</p>
          </div>
        </div>

        <div class="item">
          <img src="assets/images/2.jpg" alt="Chania">
          <div class="carousel-caption">
            <h3>BEAUTIFUL RURAL VILLAGE</h3>
            <p>The School Of Adventure.</p>
          </div>
        </div>

        <div class="item">
          <img src="assets/images/3.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>BANDARBANS</h3>
            <p>Boga Lake is the most beautiful natural lake in Bandarban, Bangladesh. It is also known as Bagakain Lake or Baga Lake. Boga lake is 18 kilometer away from Ruma Sadar Upozilla in Bandarban, Bangladesh</p>
          </div>
        </div>

        <div class="item">
          <img src="assets/images/4.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>SUNDARBANS</h3>
            <p>The Sundarbans mangrove forest, one of the largest such forests in the world</p>
          </div>
        </div>
    
        
        
        <div class="item">
          <img src="assets/images/5.jpg" alt="Flower">
          <div class="carousel-caption">
            <h3>COX_BAZAR</h3>
            <p>World Largest and Longest Sea-Beach In The World  </p>
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
                $my_sql_query = "SELECT * FROM seashore";
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
                }
                
            }
?>
    
    
<div class="container">
 <h2 style="color:red;">TEKNAF Sea Beach</h2>
 <img src="assets/images/teknaf.jpg" width="800px" height="400px" /> <br> <br>
  <h3 style="color:green;">Description</h3>
 <p align="justify">Teknaf Peninsula or Teknaf Sea Beach is one of the longest sandy beach ecosystems (80 km) in the world. It represents a transitional ground for the fauna of the Indo-Himalayan and Indo-Malayan ecological sub-regions. Important habitats at the site include mangrove, mudflats, beaches and sand dunes, canals and lagoons and marine habitat. Mangrove forest occurs in Teknaf peninsula both as natural forest with planted stands and mostly distributed in the intertidal zone. the Teknaf peninsula mangroves supports the habitat of 161 different fisheries species.
  
 <h3 style="color:green;">How to Go</h3>
  <p align="justify">Teknaf, a romantic old-world border township in the southern tip of Bangladesh territory looking up to the Myanmar high hill ranges across the river Naf. Teknaf is 85 km from Cox’s Bazar by road and 120 km by the beach along the sea. After reaching in Cox’s Bazar, take local transport to reach there.
</p>

<br>
<br>
<br>
        
        
        

 <h2 style="color:red;">Kuakata Sea Beach</h2>
 <img src="assets/images/kuakata.jpg" width="800px" height="400px" /> <br> <br>
  <h3 style="color:green;">Description</h3>
 <p align="justify">Kuakata is known for its picturesque landscape beauty of panoramic beach, clear blue sky, the tides of the bay bashing on the shore and its mangrove forest. The beach is about 30 kilometers in length, 6 kilometers in breadth and situated at the Lotachapli Union, Kolapara Thana, Patuakhali District. It’s unique as there are no other beaches in Bangladesh where you can witness both sunrise and sunset. Jhaubon (Jhau forest) is an exquisite place in Kuakata which is close to the beach.

Jhau forest is established as a result of initiative taken by government. You can reach Jhaubon by walking from the beach. Jhaubon is covered by Jhau and coconut trees. It’s a wonderful place for observing the sunrise. An Eco Park exists at Jhaubon area which is a fascinating place for picnic or junket. To the east of Jhau forest, there is Gangamati Reserved Forest. So you should visit both Jhaubon and Gangamati Reserved Forest at the same time. Jhaubon is a wonderful place to calm down & very well-acquainted for visitors. Each year, many tourists come here for pleasure.


  
 <h3 style="color:green;">How to Go</h3>
  <p align="justify">From Patuakhali launch Ghat, you can easily get local transport (bus) to reach Kuakata. BRTC bus reaches Kuakata from Dhaka, departing from Saidabad bus terminal. It usually takes about 12 hours to reach there. The BRTC buses are comparatively good. The most prominent bus named “Sakura” costs around 450 Taka, departing every night.
</p>

<br>
<br>
<br>

        
 <h2 style="color:red;">Patenga Sea Beach</h2>
 <img src="assets/images/patenga.jpg" width="800px" height="400px" /> <br> <br>
  <h3 style="color:green;">Description</h3>
 <p align="justify">Patenga Beach is one of the renowned beaches in Bangladesh. For watching sunset, Patenga is a beautiful sea beach close to Chittagong city. It is near the beginning of the Karnaphuli River. Nature lovers come here to enjoy the beautiful scenario of the Bay of Bengal and get away from busy city life. Patenga is a popular tourist spot. The beach is very close to Bangladesh Naval Academy of Bangladesh Navy, and Shah Amanat International Airport. The width of the beach is narrow and swimming is not recommended in the seas here.

As part of the sea shore a concrete walls can be seen along the shore. Also large blocks of stones have been laid out to prevent erosion. During 1990s lots of restaurants and kiosks have been developed around the beach area. Lighting of the beach area has enhanced the security aspect of night visit. People visiting this beautiful place usually wake up early to witness the stunning sunrise.
  
 <h3 style="color:green;">How to Go</h3>
  <p align="justify">Patenga is a sea beach located 14 kilometers to south of Chittagong, Bangladesh. It will take about an hour from the center of Chittagong city by auto rickshaw, Bus or Tempu to reach Patenga Beach.
</p>

<br>
<br>
<br>
        
 </div>
        
    

    
</body>

</html>