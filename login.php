<?php
//session_start();
require_once 'connect.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){


        if (isset($_POST['submit'])) {

           $email 	= test_input($_POST['email']);
           $password = test_input($_POST["password"]);

        $query =  "SELECT * FROM `users`  WHERE email ='$email'
        AND passwords = '$password'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
         $rows = mysqli_num_rows($result);



       if ($rows==1) {
      // $_SESSION["id"] = $row['id'];
       //$_SESSION["name"] = $row['name'];
      
          header("location:home.php"); 
          exit();
                      }
      else{
          header("location: login.php?error=1&message=Incorrect email or password.");   
          exit();                  
          }
                  
        }                 
                      
  }

?>

<!DOCTYPE html>

<html>
<head>
    <title>Netflix login Watch TV Shows Online, Watch Movies Online</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  


<div class ="logo">
    <a href="https://www.netflix.com/">
    <img src="logo.PNG" alt = "netflix-logo">
</a>
</div>
<div id="container">
    <form id="log-in-form"name="loginForm" method="post" action="login.php">
        <div class="label-container">
            <h2 id="sign-in-text"> Sign in</h2>
        </div>

        <?php
require_once 'connect.php';

        
 if(isset($_REQUEST['error'])) {

if(isset($_REQUEST['message'])) {
 echo'<div class="ErrorEmail" style="color:white; background-color:hsl(32, 97%, 46%);">'.htmlspecialchars($_REQUEST['message']).'</div>';
}

      } 
      
      ?>

        <div class="box-container" id="email-container">
            <!--<label class="label" id="email-label" for="email-field">Email or phone number</label><br>-->
             <input class="field" id="email-field" name="email" type="text"  placeholder="Email or phone number" onchange="validateEmail()" required>
             <p id="errorEmail">Please enter a valid email address or phone number.</p>
        </div>
      <!--<div class="inputError" id="email-inputError"></div>-->

        <div class="box-container" id="pwd-container">
          <!--  <label class="label" id="pwd-label" for="pwd-field">password</label><br>-->
            <input class="field" id="pwd-field" name="password" type="password"placeholder="Password"onchange="validatePassword()"  required>
            <p id="errorPassword">Your password must contain a letter at first character and be between 7 and 14 characters.</p>
           
        </div>
        <!--<div class="inputError" id="pwd-inputError"></div>-->
        <div class="box-container" id="login-button-container">
        
                <button  type="submit" id="signInButton"disabled="disabled" name="submit">
                    Sign In
                </button>
        </div>
        <div class="checkbox-row">
            
                <input type="checkbox" id="remember-me-label" name="remember-me" value="remember-me">
                
            <label for="remember-me" id="remember-me-label"> Remember me ? </label>
            
            <a href="https://www.netflix.com/br/LoginHelp">
                <label id="help">Need help?</label>
            </a>
        </div>
    </form>
            <div class="fb-login">
                <img class="fb-icon" src="https://assets.nflxext.com/ffe/siteui/login/images/FB-f-Logo__blue_57.png">
            </div>
            <label class="fb-btn-text" id="fb-btn-text">Login with facebook</label>
            <div class="sign-up">
             <span class="new-netflix"> New to Netflix?</span>
             <a href= "#">
                <span class = "sign-now">
                    Sign up now
                </span>
            </a>
            </div>
            

            <div class= "capcha">
                <span id = "capcha">
                    This page is protected by Google reCAPTCHA to ensure you're not a bot.
                    <a class = "learn-more" href= "#">
                    Learn more.</a>
                </span>
            </div>
        </div>
        <footer class="footer text-dark">
            <p>Questions? contact us</p>
            <div class="footer-columns">
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">privacy</a></li>
                    <br>
                    <li><a href="#">cookies-prefrence</a></li>
                    <li><a href="#">corporate information</a></li>

                </ul>
               
            </div>
        </footer>

        <script>
            //function to validate email address on input text change and enable submit button if it's true
            document.getElementById('errorEmail').style.display = "none";
            document.getElementById('errorPassword').style.display = "none";
            function validateEmail() {
                var email = document.getElementById('email-field').value;
                var re =  /\S+@\S+\.\S+/;
                var result = re.test(email);
               
                if (result) {
                    document.getElementById('errorEmail').style.display = "none";
                    document.getElementById('signInButton').disabled = false;
                   // document.getElementById("email-form").submit();
                }
                else {
                    document.getElementById('errorEmail').style.display = "block";
                    document.getElementById('signInButton').disabled = true;
                  
                }
            }
            function validatePassword() {
                var password = document.getElementById('pwd-field').value;
                var re =  /^[A-Za-z]\w{7,14}$/;
                var result = re.test(password);
               
                if (result) {
                    document.getElementById('errorPassword').style.display = "none";
                    document.getElementById('signInButton').disabled = false;
                    document.getElementById("email-form").submit();
                }
                else {
                    document.getElementById('errorPassword').style.display = "block";
                    document.getElementById('signInButton').disabled = true;
                  
                }
            }
        </script>
        </body>
     

</html>
  

<?PHP
$conn->close();
?>


