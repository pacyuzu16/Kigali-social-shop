<?php
   include('sessions.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kigali Social Shop </title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
  <div id="aka">
<div class="head">
<table border="0"width="99%">
        <tr><td width="50%"><h1><img src="images/logo.png" height="30px"> Kigali Social Shop  </img></h1></td>
        <td id="r"width="10%">
               <a href="logedin.php"><h3>Home</h3>   </a></td>
                <td width="10%"><a href="AboutUsin.php"><h3>About us</h3></a></td>
                <td width="10%"><a href="ContactUsin.php"><h3>Contact us</h3></a></td>
                <td width="10%"><a href="logout.php"><h3>Log out</h3></a></td>
                <td width="10%" style="align-items:center;"> 
                <div class="profile-section">
    <a href="userDetailsin.php"><img src="images/ppp2.png" alt="Profile"style="width: 35%;border-radius: 50%;"></img></a>	   <br/>
     
	   <?php echo $login_session; ?>
    </div>  
              </td>
        </tr>
    </table>


</div></div>
<br><br> <br><br><br><br><br><br><br><br><br>
<div class="today"><a href="adduser.php">+ Edit information</a></div>

<?php  	
            $id = $login_session;			
			 
		    $q = "SELECT * FROM user WHERE email= '$id'"; 
		     
			$results = mysqli_query($con,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($con));
			}
            if($row = mysqli_fetch_array($results)){
			 echo "<p style='margin-left:20px;'>";
			 echo "<b>First Name: </b>".$row['names'];
			 echo "<br/>";
			
			 echo "<b>Email: </b>".$row['email'];
			 echo "<br/>";
			 echo "<b>Gender: </b>";
			 if($row['gender']== 1){
				 echo "Male";
			 }else{
				 echo "Female";
			 } 
			 echo "<br/>";
			 echo "<b>Role: </b>";
			 if($row['role']== 1){
				 echo "Admin";
			 }else{
				 echo "client";
			 }
			 echo "<br/>";
			echo "</p>";
			}			
		   ?> 
  
 
 <br><br><br><br><br><br><div class="us">
   <table border="0"width="100%">
   <tr><td>
    <b>Information</b>
    <ul><li><a href="#">About Us</a></li>
							<li><a href="#">Customer Service</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Orders &amp; Returns</a></li></ul>

   </td>
    <td>
    <b>My account</b>
    <ul><li ><a href="http://localhost/Kigali%20Shop/login.php">Sign In</a></li>
							<li><a href="#">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="#">Help</a></li>
						</ul>	
    </td>
    <td>
    <b>News letter</b>
    <p class="y">Sign up for exclusive offers</p>
    <label class="y">
    <form action="news.php" method="post">
      E-mail:<input type="email"name="email"placeholder="Enter your email" required>
    <input type="submit"value="send"name="submit"id="myButton"></label>
</form>
    </td></tr>

   </table>

  </div>

  <div class="last">
  <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<div class="after-last">Copyright &copy; Kigalishop.com 2023 </div>
  </div>

</body>

</html>