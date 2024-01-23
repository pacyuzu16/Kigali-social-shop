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
               <td width="10%"><a href="liked.php"><h3>Liked Products</h3></a></td>
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
<br><br> 
<div class="image-container">
    <img src="images/light_bulb.jpg" alt="Your Image">
    <div class="text-overlay">
    <h2>Fashion and <br>smart-look is our priority</h2>
    </div>
  </div>
 
  <div class="text-center"><h1>World Class Products</h1></div>
  <div class="products">
   <table border="0"width="100%">
    <tr><td><img src="images/png5.png"height="250px"width="auto"></img></td>
    <td><img src="images/png6.png"height="250px"width="auto"></img></td>
    <td><img src="images/png7.png"height="250px"width="auto"></img></td>
    <td><img src="images/png8.png"height="250px"width="auto"></img></td></tr><!-- end of row 1-->
    <tr><td>Discover our eclusive T-shirts</td>
    <td>Black Hoodies available</td>
    <td>A variety types of sweaters</td>
    <td>Men's shoes are avaible</td></tr>
    <tr><td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Umucuruzi Mubiryogo</a></td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Gasyata shop</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>gisozi house fashion</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Umucuri Downtown</td></tr>
    <tr><td><s>$50 </s>&nbsp; $45 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$40 </s>&nbsp; $20 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$60 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$89 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td></tr><!--end of First row 2-->

    <tr><td><img src="images/png1.png"height="250px"width="auto"></img></td>
    <td><img src="images/png2.png"height="250px"width="auto"></img></td>
    <td><img src="images/png3.png"height="250px"width="auto"></img></td>
    <td><img src="images/png4.png"height="250px"width="auto"></img></td></tr><!-- end of row 1-->
    
    <tr><td>women's coat</td>
    <td>children's sweater</td>
    <td>christmas's presents clothes</td>
    <td>winter coat</td></tr>
    <tr><td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Moses imyenda Downtown</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Keza imyenda Downtown</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Patrick udupira Downtown</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>patience amashati Downtown</td></tr>
    <tr><td><s>$50 </s>&nbsp; $45 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$40 </s>&nbsp; $20 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$60 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td><!--&nbsp; is for adding a-->
    <td><s>$89 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td></tr><!--end of  row 2-->
        
    <tr><td><img src="images/im2.jpg"height="250px"width="auto"></img></td>
    <td><img src="images/im6.jpg"height="250px"width="auto"></img></td>
    <td><img src="images/im4.jpg"height="250px"width="auto"></img></td>
    <td><img src="images/im5.jpg"height="250px"width="auto"></img></td></tr><!-- end of row 1-->
    <tr><td>New T-shirts</td>
    <td>Children's wear</td>
    <td>both genders pilover</td>
    <td>other men clothings</td></tr>
    <tr><td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Mwiza inkweto gisozi</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>gentielle imyenda kigali</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Pazzo ushitura muri Congo</td>
    <td><a href="seller.php"><img src="images/ppp3.png"style="width:27px;"></img>Fils ucuruza caguwa</td></tr>
    <tr><td><s>$50 </s>&nbsp; $45 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$40 </s>&nbsp; $20 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td>
    <td><s>$60 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td><!--&nbsp; is for adding a-->
    <td><s>$89 </s>&nbsp; $50 &nbsp; <input type="submit"value="Add to cart"name="submit"id="myButton"></td></tr><!--end of row 3-->
    
   </table><!-- end of the products section-->
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
							<li><a href="liked.php">View Cart</a></li>
							<li><a href="liked.php">My Wishlist</a></li>
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