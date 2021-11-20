<?php
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password );

    if(!$con)
    {
        die("connection to this database failed due to" .
        mysqli_connect_error());
    }
    /*else{
        echo"Success connection";
    }*/
    
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $detail = $_POST['detail'];
    $id = uniqid(rand(), true);
    $sql = "INSERT INTO `test`.`test5` (`id`, `name`, `contact`, `email`, `detail`, `dt`) 
    VALUES ('$id', '$name', '$contact', '$email', '$detail', current_timestamp());";
    

    if($con->query($sql) == true){
        //echo "Successfully Inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Redressal Program</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href= "grievance.css">

    <script src="https://kit.fontawesome.com/ff14115f99.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="Sub-header">
    <nav>
        <a href="Home Page.html"><img src="images/logo (1).png"></a>
        <div class="nav-links">
        <i class="fa fa-times" ></i>
        <ul>
            <li><a href="Home Page.html">HOME</a></li>
            <li><a href="About.html">ABOUT</a></li>
            <li><a href="index3.php">Grievance</a></li>
            <li><a href="Contact.html">CONTACT</a></li>
        </ul>
        </div>
        <i class="fa fa-bars"></i>
    </nav>
<h1>You Say, We Help</h1>
</section>

<!---- FORM ----->
<section class="Faculty-login">
    <div class="container">
        <div class="cover">
          <div class="front">
            <div class="text">
              <span class="text-1">Welcome!<br></span>
              <span class="text-2">Please enter your grievance</span>
            </div>
          </div>
        </div>
        
        <div class="forms">
            <form action="index3.php" method="POST">
            <div class="input-box">
            
            <div class="form-content">
              <div class="login-form">
                <div class="title">Your Grievance</div>
             

                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="input-box">
                    	<i class="fa fa-mobile"></i>
                        <input type="text" name="contact" id="contact" placeholder="Enter Your Contact No">
                </div>
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="contact-col">
                <textarea name="detail" id="detail" cols="30" rows="10" placeholder="Enter Your Query Here"></textarea>
                </div>
                <button class="hero-btn red-btn">SUBMIT</button>
            </div>
          </form>
         </div>
    </div>
</div>
</section>
<!------- Footer ------------>
<section class="footer">
    <h4>About Us</h4>
    <p>A Grievance is any discontent or dissatisfaction, whether expressed or not, 
        whether valid or not, arising out of anything that is <br>directly connected to the institute, 
        and which a student thinks, believes, or even feels, is unfair, unjust or inequitable.</p>
        
        <div class="icons">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-linkedin-square"></i>
            <i class="fa fa-instagram"></i>
        </div>
        <p>Made with<i class="fa fa-heart"></i><br>by Team</p>
        <p>COPYRIGHT 2021</p>
</section>

<!-----JavaScript for Toggle Menu----->
<script>
      var navLinks = document.getElementById("navLinks");

      function showMenu(){
          navLinks.style.right = "0";
      }
      function hideMenu(){
          navLinks.style.right = "-200";
      }
    </script>

</body>
</html>

