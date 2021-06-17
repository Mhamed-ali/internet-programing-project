<?php
require_once 'connect.php';


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$error_message = "";
if (isset($_POST['submit'])) {
    $email = test_input($_POST["email"]);
    
    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (id,email,names, passwords) VALUES ('','$email','$name', '$hash_pass')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION["name"] = $name;
    //    echo '<script>alert("New record created successfully")</script>';
        echo "<script> window.location = 'home.php'</script>";
    } else {
        $error_message = "Email is already taken";
    
    }
}





?>

<!DOCTYPE html>

<html>

<head>
    <title>Netflix login Watch TV Shows Online, Watch Movies Online</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
<?php
if($error_message != ""){
    echo(".error_message{color:red;margin-top: -20px;");

}

?>

</style>

<body>



    <div class="logo">
        <a href="#">
            <img src="logo.PNG" alt="netflix-logo">
        </a>
    </div>
    <div id="container">
        <form id="log-in-form" name="loginForm" method="post" action="#">
            <div class="label-container">
                <h2 id="sign-in-text"> Sign UP</h2>
            </div>
            <div class="box-container" id="name-container">
                <!--<label class="label" id="name-label" for="name-field">Email or phone number</label><br>-->
                <input class="field" id="name-field" name="name" type="text" placeholder="Your Name" onchange="validateName()" required>
                <!-- <p id="errorNail">Please enter a valid name or phone number.</p> -->
            </div>
            <!--<div class="inputError" id="name-inputError"></div>-->
            <?php
                 echo("<p  class=\"error_message \">" . $error_message."</p>");
                ?>
            <div class="box-container" id="email-container">
                <!--<label class="label" id="email-label" for="email-field">Email or phone number</label><br>-->
             
                <input class="field" id="email-field" name="email" type="text" placeholder="Email or phone number" onchange="validateEmail()" required>
             
                <!-- <p id="errorEmail">Please enter a valid email address or phone number.</p> -->
            </div>


            <div class="box-container" id="pwd-container">
                <!--  <label class="label" id="pwd-label" for="pwd-field">password</label><br>-->
                <input class="field" id="pwd-field" name="password" type="password" placeholder="Password" onchange="validatePassword()" required>
                <!-- <p id="errorPassword">Your password must contain a letter at first character and be between 7 and 14 characters.</p> -->

            </div>
            <div class="box-container" id="login-button-container">

                <button type="submit" id="signInButton" name="submit">
                    Sign UP
                </button>
            </div>
           
        </form>
    
        <!-- <div class="sign-up">
            <span class="new-netflix"> Already a member in Netflix?</span>
            <a href="login.php">
                <span class="sign-now">
                    Log in
                </span>
            </a>
        </div> -->

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
            var re = /\S+@\S+\.\S+/;
            var result = re.test(email);

            if (result) {
                document.getElementById('errorEmail').style.display = "none";
                document.getElementById('signInButton').disabled = false;
                // document.getElementById("email-form").submit();
            } else {
                document.getElementById('errorEmail').style.display = "block";
                document.getElementById('signInButton').disabled = true;

            }
        }

        function validateName() {
            var email = document.getElementById('name-field').value;
            var re = /\S+@\S+\.\S+/;
            var result = re.test(name);

            if (result) {
                document.getElementById('errorname').style.display = "none";
                document.getElementById('signInButton').disabled = false;
                // document.getElementById("email-form").submit();
            } else {
                document.getElementById('errorname').style.display = "block";
                document.getElementById('signInButton').disabled = true;

            }
        }

        function validatePassword() {
            var password = document.getElementById('pwd-field').value;
            var re = /^[A-Za-z]\w{7,14}$/;
            var result = re.test(password);

            if (result) {
                document.getElementById('errorPassword').style.display = "none";
                document.getElementById('signInButton').disabled = false;
                document.getElementById("email-form").submit();
            } else {
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