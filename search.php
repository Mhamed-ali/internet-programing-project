<?php
require_once 'connect.php';


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
  <title>Search</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

  <script src="main.js"></script>
<style>



.search-box {
	margin-left:33%;
	margin-top:30px;
    position:absolute;
    transform:translate(10%, 10%);
    background:#2f3640;
    border-radius:40px;
    height:30px;
    padding:7px;
    box-shadow:0px 0px 10px 0px rbg(0,0,0,0.2);
}

.search-btn {
    border:none;
    background:red;
    border-radius:50%;
    float:right;
    display:flex;
    width:30px;
    height:30px;
    justify-content:center;
    align-items:center;
    outline:none;
    transition:0.6s;
    font-weight:bold;
    color:#FFFFFF;
    box-shadow:0px 0px 10px 0px red;
}

.search-txt {
    background:none;
    border:none;
    outline:none;
    float:left;
    padding:0 6px;
    font-size:16px;
    transition:0.6s;
    color:red;
    font-weight:bold;
    line-height:30px;
    width:240px;
}

.search-box:hover > .search-box {
}
.search-box:hover > .search-txt {
    width:240px;
    padding:0 6px;
}

.search-box:hover > .search-btn {
    background:red;
    color:#FFFFFF;
    box-shadow:0px 5px 20px 0px red;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="home.php"><img src="img\logo.png" alt="Logo Image"></a>
      </div>
      <nav class="main-nav" style="margin-left:37%;">
        <a href="home.php">Home</a>

      </nav>
           
    </header>
    <!-- END OF HEADER -->

    <!-- MAIN CONTAINER -->
    <section class="main-container">
			<div style="height:50px;width:200px;">
			<form name="search" method="post" action="">
        <div class="search-box">

            <input class="search-txt" name="mymovie" placeholder="Search for movies...">

            <button class="search-btn" name="search" type="submit" >

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>

            </button>

        </div>
		</form>
		</div>
      <div class="location" id="home">
        <!-- useless -->
        <h1 id="home">Your Search Results</h1>
        <div class="box">
          <?php
		  
            if(isset($_POST['search'])){
              $myvar=$_POST['mymovie'];
              $sql = "select * from films where name like '%$myvar%'";
                $result = $conn->query($sql);
              //echo "hello".$myvar;
              if ($result !== false && $result->num_rows > 0){
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                          // only popular category
                          
                          echo ("<a href=\"" . $row["href"] ."?filmname=".$row["name"]."&filmsrc=films/" . $row["video_path"] ." \" > <img src=\" " . $row["src"] . " \" alt=\" " . $row["alt"] . "\"></a>");
                          
                        }
                      }else {
                    echo "<h4>No Result found</h4>";
                  }
                  }
                }
          ?>


        </div>
      </div>

      </section>


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
  <script>
 
  </script>
</body>

</html>

