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
<br><br> <br><br> <br><br> 
<!--contents here-->
<table border="1" cellpadding="1">
<tr><td><img src="images/ppp3.png"style="width:140px;float:left;"></img>
</td><td><h4>👔 Welcome to Patrick Inkweto Downtown! Your Trendy Hub for Fashion Bliss! 👗

Discover curated styles for men, women, and children, along with the perfect pair of shoes
 to strut your stuff. Unleash your style at Kigali/Downtown Market/Room 2412
 - where fashion meets affordability! 👞✨</h4></td></tr>
<tr><td>Patrick Inkweto Downtown</td><td>Message me inbox if you've got any question I am here to answer<img src="images/inbox.png"style="width:50px; float: right;"></img><br></td></tr>

</table>

<h4>about me</h4>


<p>
👔 Welcome to Patrick Inkweto Downtown! Your Trendy Hub for Fashion Bliss! 👗<br>

Discover curated styles for men, women, and children, along with the perfect pair of shoes to strut your stuff. <br>Unleash your style at Kigali/Downtown market- where fashion meets affordability! 👞✨<br>

🛍️ Dive into style: Kigali Downtown Market 🌟 #PatrickInkwetoDowntown
</p>
<div class="text-center"><h1>Discover my Products</h1></div>
<div class="products">
   <table border="0"width="100%">
    <tr><td><img src="images/shoe1.png"height="250px"width="auto"></img></td>
    <td><img src="images/shoe2.png"height="250px"width="auto"></img></td>
    <td><img src="images/shoe3.png"height="250px"width="auto"></img></td>
    <td><img src="images/shoe4.png"height="250px"width="auto"></img></td></tr><!-- end of row 1-->
    <tr><td>Discover our eclusive T-shirts</td>
    <td>Black Hoodies available</td>
    <td>A variety types of sweaters</td>
    <td>Men's shoes are avaible</td></tr>
    <tr><td>All sizes available to both men and women</td>
    <td>Get yourself or your lovely one a hoodie of your choice</td>
    <td>Never get cold with this exlusive sweaters</td>
    <td>Stay smart with hand made shoes from Kigali city</td></tr>
    <tr><td><s>$50 </s>&nbsp; $45 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$40 </s>&nbsp; $20 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$60 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$89 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td></tr><!--end of First row 2-->

    <tr><td><img src="images/shoe5.png"height="250px"width="auto"></img></td>
    <td><img src="images/shoe6.png"height="250px"width="auto"></img></td>
    <td><img src="images/shoe7.png"height="250px"width="auto"></img></td>
    <td><img src="images/shoe8.png"height="250px"width="auto"></img></td></tr><!-- end of row 1-->
    
    <tr><td>Discover our eclusive T-shirts</td>
    <td>Adorn your little ones with our charming children's collection.</td>
    <td>A variety types of sweaters</td>
    <td>Elevate your style with our exclusive range of men's clothing.</td></tr>
    <tr><td>All sizes available to both men and women</td>
    <td>Get yourself or your lovely one a hoodie of your choice</td>
    <td>Never get cold with this exlusive sweaters</td>
    <td>Stay smart with hand made shoes from Kigali city</td></tr>
    <tr><td><s>$50 </s>&nbsp; $45 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$40 </s>&nbsp; $20 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$60 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td><!--&nbsp; is for adding a-->
    <td><s>$89 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td></tr><!--end of First row 2-->
    
   </table><!-- end of the products section-->
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