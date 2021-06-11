<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netflix";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, href, src, alt, category FROM films";
$result = $conn->query($sql);
// $result = $conn -> query("SELECT email, passwords FROM users WHERE email = '".$email."' AND  passwords = '".$password."'");

// $sql1 = "SELECT names FROM films";

// $copy = new ArrayObject($result_popular) ; 
// $result_trending =$copy->getArrayCopy();



?>


<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="home.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Netflix clone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

  <script src="main.js"></script>

</head>
<body>

  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="img\logo.png" alt="Logo Image"></a>
      </div>
      <nav class="main-nav">
        <a href="#home">Home</a>
        <a href="#tvShows">TV Shows</a>
        <a href="#movies">Movies</a>
        <a href="#newpopular">New & Popular</a>
        <a href="#mylist">My List</a>

      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <?php
        if ($_SESSION["name"]) {
        ?>
          <a href="#"><?php echo $_SESSION["name"]; ?></a>
        <?php
        } else echo "Please login first ";
        ?>
      </nav>      
    </header>
    <!-- END OF HEADER -->

    <!-- MAIN CONTAINER -->
    <section class="main-container">
      <div class="location" id="home">
        <!-- useless -->
        <h1 id="home">Popular on Netflix</h1>
        <div class="box">
          <?php
          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              // only popular category
              if (($row["category"] == "popular")) {
                echo ("<a href=\"" . $row["href"] . " \" > <img src=\" " . $row["src"] . " \" alt=\" " . $row["alt"] . "\"></a>");
              }
            }
          }
          ?>
          <!-- <a href=""><img src="img\p1.PNG" alt=""></a>
            <a href=""><img src="img\p2.PNG" alt=""></a>
            <a href=""><img src="img\p3.PNG" alt=""></a>
            <a href=""><img src="img\p4.PNG" alt=""></a>
            <a href=""><img src="img\p5.PNG" alt=""></a>
            <a href=""><img src="img\p6.PNG" alt=""></a>
    
            <a href=""><img src="img\p7.PNG" alt=""></a>
            <a href=""><img src="img\p8.PNG" alt=""></a>
            <a href=""><img src="img\p9.PNG" alt=""></a>
            <a href=""><img src="img\p10.PNG" alt=""></a>
            <a href=""><img src="img\p11.PNG" alt=""></a>
            <a href=""><img src="img\p12.PNG" alt=""></a>         -->

        </div>
      </div>


      <h1 id="myList">Trending Now</h1>
      <div class="box">
        <?php
        $result->data_seek(0);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            // only popular category
            if (($row["category"] == "trending")) {
              echo ("<a href=\"" . $row["href"] . " \" > <img src=\" " . $row["src"] . " \" alt=\" " . $row["alt"] . "\"></a>");
            }
          }
        }
        ?>
        <!-- <a href=""><img src="img\t1.PNG" alt=""></a>
        <a href=""><img src="img\t2.PNG" alt=""></a>
        <a href=""><img src="img\t3.PNG" alt=""></a>
        <a href=""><img src="img\t4.PNG" alt=""></a>
        <a href=""><img src="img\t5.PNG" alt=""></a>
        <a href=""><img src="img\t6.PNG" alt=""></a>                   -->
      </div>

      <h1 id="tvShows">TV Shows</h1>
      <div class="box">
        <?php
        $result->data_seek(0);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            // only popular category
            if (($row["category"] == "tv")) {
              echo ("<a href=\"" . $row["href"] . " \" > <img src=\" " . $row["src"] . " \" alt=\" " . $row["alt"] . "\"></a>");
            }
          }
        }
        ?>
        <!-- <a href=""><img src="img\tv1.PNG" alt=""></a>
        <a href=""><img src="img\tv2.PNG" alt=""></a>
        <a href=""><img src="img\tv3.PNG" alt=""></a>
        <a href=""><img src="img\tv4.PNG" alt=""></a>
        <a href=""><img src="img\tv5.PNG" alt=""></a>
        <a href=""><img src="img\tv6.PNG" alt=""></a>

        <a href=""><img src="img\tv7.PNG" alt=""></a>
        <a href=""><img src="img\tv8.PNG" alt=""></a>
        <a href=""><img src="img\tv9.PNG" alt=""></a>
        <a href=""><img src="img\tv10.PNG" alt=""></a>
        <a href=""><img src="img\tv11.PNG" alt=""></a>
        <a href=""><img src="img\tv12.PNG" alt=""></a>               -->
      </div>


      <h1 id="movies">Blockbuster Action & Adventure</h1>
      <div class="box">
        <?php
        $result->data_seek(0);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            // only popular category
            if (($row["category"] == "action")) {
              echo ("<a href=\"" . $row["href"] . " \" > <img src=\" " . $row["src"] . " \" alt=\" " . $row["alt"] . "\"></a>");
            }
          }
        }
        ?>
        <!-- <a href=""><img src="img\m1.PNG" alt=""></a>
        <a href=""><img src="img\m2.PNG" alt=""></a>
        <a href=""><img src="img\m3.PNG" alt=""></a>
        <a href=""><img src="img\m4.PNG" alt=""></a>
        <a href=""><img src="img\m5.PNG" alt=""></a>
        <a href=""><img src="img\m6.PNG" alt=""></a>                 -->
      </div>

      <h1 id="newpopular"> New & Popular</h1>
      <div class="box">
        <?php
        $result->data_seek(0);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            // only popular category
            if (($row["category"] == "new&popular")) {
              echo ("<a href=\"" . $row["href"] . " \" > <img src=\" " . $row["src"] . " \" alt=\" " . $row["alt"] . "\"></a>");
            }
          }
        }
        ?>
        <!-- <a href=""><img src="img\o1.PNG" alt=""></a>
        <a href=""><img src="img\o2.PNG" alt=""></a>
        <a href=""><img src="img\o3.PNG" alt=""></a>
        <a href=""><img src="img\o4.PNG" alt=""></a>
        <a href=""><img src="img\o5.PNG" alt=""></a>
        <a href=""><img src="img\o6.PNG" alt=""></a>                 -->
      </div>

      <!-- END OF MAIN CONTAINER -->

      <!-- LINKS -->
      <section class="link">
        <div class="logos">
          <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
        </div>
        <div class="sub-links">
          <ul>
            <li><a href="#">Audio and Subtitles</a></li>
            <li><a href="#">Audio Description</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Legal Notices</a></li>
            <li><a href="#">Corporate Information</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </section>
      <!-- END OF LINKS -->

      <!-- FOOTER -->
      <footer>
        <p>&copy 1997-2018 Netflix, Inc.</p>
        <p>MMSS &copy 2021</p>
      </footer>
  </div>
</body>

</html>

<?php
$conn->close();
?>