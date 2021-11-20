

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
   <link rel="stylesheet" href="style.css">
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
           <li><a href="Grievance.html">Grievance</a></li>
           <li><a href="Contact.html">CONTACT</a></li>
           <li>Logout</li>
       </ul>
       </div>
       <i class="fa fa-bars"></i>
   </nav>
<h1>Faculty Data</h1>
</section>

<!-------------------  Welcome -------------------------->
<section class="Facultydata">
    <div class="mainbox">
    <style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<table style="width:100%">
  <tr>
    <th>Sr.No</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Grievance Details</th>
    <th>Date & Time</th>
  </tr>
<?php

$conn = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM test5";
$result = $conn->query($sql);

if($result-> num_rows > 0)
{
    while($row = $result-> fetch_assoc())
    {
        echo "<tr><td>" . $row["sno"] . "</td><td>" . $row["name"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["email"] . "</td><td>". $row["detail"] . "</td><td>". $row["dt"] . "</td></tr>";
     
    }
}
else{
    echo "No results Found";
}
$conn->close();

?>
</table>

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