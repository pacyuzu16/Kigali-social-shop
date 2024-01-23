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
<link rel="stylesheet"href="css/style2.css">
<link rel="stylesheet" href="css/style.css">
<body>
  <div id="aka">
<div class="head">
<table border="0"width="99%">
        <tr><td width="50%"><h1><img src="images/logo.png" height="30px"> Kigali Social Shop </img></h1></td>
        <td id="r"width="10%">
               <a href="logedin.php"><h3>Home</h3>   </a></td>
               <td width="10%"><a href="AboutUsin.php"><h3>Liked Products</h3></a></td>
                <td width="10%"><a href="AboutUsin.php"><h3>About us</h3></a></td>
                <td width="10%"><a href="ContactUsin.php"><h3>Contact us</h3></a></td>
                <td width="10%"><a href="logout.php"><h3>Log out</h3></a></td>
                <td width="10%" style="align-items:center;"> 
                <div class="profile-section">
    <a href="userDetailsin.php"><img src="images/ppp2.png" alt="Profile"style="width: 30px;border-radius: 50%;float:right;"></img></a>	   <br/>
     <br>

	   <?php echo $login_session; ?>
    </div> 
              </td>
        </tr>
    </table>

</div></div>

<br><br><br>

  <div class="container">
    
    <h1>Contact Us</h1>

    <div class="contact-form">
      <form action="ContactUs.php" method="post">
        <label for="name">Names:</label>
        <input type="text" id="name" name="names" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit"name="submit">Submit</button>
      </form>
    </div>

    <div class="contact-info">
      <h2>Contact Information</h2>

      <p><strong>Address:</strong> 165 Main Street, Kigali City</p>
      <p><strong>Phone:</strong> (250) 788-4567</p>
      <p><strong>Email:</strong> info@kigalishop.com</p>

      <h2>Business Hours</h2>

      <p><strong>Monday - Friday:</strong> 9:00 AM - 5:00 PM</p>
      <p><strong>Saturday - Sunday:</strong> Closed</p>
    </div>
  </div>

  
  <div class="text-center"><h1><br>Unparalleled Service</h1><br>
   <img class="round-photo"src="images/im3.jpg">
</div>

  <div class="us">
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
    <form action="news.php" method="post">
      E-mail:<input type="email"name="email"placeholder="Enter your email" required>
    <input type="submit"value="send"name="submit"id="myButton"></label>
</form>

   </table>

  </div>

  <div class="last">
  <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<div class="after-last">Copyright &copy; Kigalishop.com 2023 </div>
  </div>

</body>
<?php
include("Connection.php");
			  if(isset($_REQUEST['submit'])){
				$name = $_POST['names'];
                $email=$_POST['email'];
                $subject=$_POST['subject'];
				$message = $_POST['message'];
				
                $qer = "INSERT INTO contact (names,email,subject,message)
				VALUES
				('$name','$email','$subject', '$message')";
				
				$result = mysqli_query($con, $qer);
				
				if(!$result){
					die("Something went wrong in the query".mysqli_error($con));
				}
        
				header("Location: ContactUs.php");
        
exit; 
            }
            ?>

</html>