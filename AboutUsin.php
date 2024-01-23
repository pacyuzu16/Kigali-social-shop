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

</div></div><br>
<!--contents here-->
<br> <br> <br> <br> <br><br>

<div class="last">

<h1><u>About us</u></h1>
<p class="left-align">
"Step into Kigali Social Shop , where fashion and resilience converge in the heart of Kigali City.  
From chic bracelets to stylish clothing, our collections tell a story of triumph,
making every purchase a statement of strength and style."
</p>
<h1><u>Who we are</u></h1>
<p class="left-align">
Welcome to Kigali Social Shop online market place,  where fashion meets resilience in the heart of Kigali City.<
 Born in the face of challenges, our journey has been marked by passion, dedication,
  and an unwavering commitment to quality. As we proudly offer a diverse selection of parcels, 
  bracelets, and clothing for children, men, and women, our growth has mirrored the vibrancy  
  and diversity of our customers. From our humble beginnings to becoming a thriving destination, 
   we have evolved into more than just a shop; we are a community where fashion flourishes and
    individuality reigns. At Kigali Social Shop , every piece tells a story of triumph over adversity.
     Join us on this journey as we continue to grow, delivering fashion-forward choices and timeless
      pieces to our expanding family. Experience the fusion of style and resilience at 
      Kigali Social Shop  —your trusted destination for all your fashion needs in Kigali City.
</p>
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