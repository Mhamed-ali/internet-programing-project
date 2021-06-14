<?php
require_once 'connect.php';

$sql = "SELECT id, href, src, alt, category FROM films";
$result = $conn->query($sql);

$film_name = $_GET["filmname"];
$film_src = $_GET["filmsrc"];

$result = $conn -> query("SELECT * FROM films WHERE [name] = '".$film_name."'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="film.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 
    <?php
        echo($film_name);
    ?>
    </title>
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
    <a href="home.php">Home</a>
    <a href="#tvShows">TV Shows</a>
    <a href="#movies">Movies</a>
    <a href="#newpopular">New & Popular</a>
    <a href="#mylist">My List</a>

  </nav>
  <nav class="sub-nav">
  <a href="search.php"><i class="fas fa-search sub-nav-logo"></i></a>
    <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
    
    <?php
      if(isset($_SESSION["name"])) {
    ?>
      <a href="#"><?php echo $_SESSION["name"]; ?></a>
    <?php
    } else echo " <a href=\"login.php\"></a> Please login first ";
    ?>
    <a href="logout.php" title="Exit"><i class="fas fa-sign-out-alt sub-nav-logo"></i></a>
  </nav>      
</header>
<!-- END OF HEADER -->

<!-- MAIN CONTAINER -->
<section class="main-container">

      <h1 id="myList"><?php echo ($film_name);?> </h1>
        <video width="100%" height="500" controls>
        <source src="<?php
        echo($film_src);
        ?>" type="video/mp4">
                Your browser does not support the video tag. Go Ask Your Mom for another
        </video>

     


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