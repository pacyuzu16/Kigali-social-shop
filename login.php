
<?php /* codes in new form mine one*/?>
<?php
   include("connection.php");
   session_start();
   $error = "";
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypassword'";
      
      $result = mysqli_query($con,$sql);
      
	  if(!$result){
		  die("Wrong.".mysqli_error($con));
	  }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $status = $row['role'];
      
      $count = mysqli_num_rows($result);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_start("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: logedin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }}
?>
<!--start-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kigali Social Shop </title>

</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style3.css">
<body>
  <div id="aka">
<div class="head">
    <table border="0"width="99%">
        <tr><td width="50%"><h1><img src="images/logo.png" height="30px"> Kigali Social Shop  </img></h1></td>
        <td id="r"width="10%">
               <a href="index.php"><h3>Home</h3>   </a></td>
                <td width="10%"><a href="AboutUs.php"><h3>About us</h3></a></td>
                <td width="10%"><a href="ContactUs.php"><h3>Contact us</h3></a></td>
                <td width="10%"> <a href="Login.php"><h3>login</h3></a></td>
        </tr>
    </table>


</div></div><br>
<!--contents here-->

<div class="fanmade">
<br><br><br>
<body>
     <form action="login.php" method="post">

        <h1>LOGIN</h1><br>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label1>E-Mail</label1>

        <input type="email" name="email" placeholder="Email"required><br>

        <label1>Password</label1>

        <input type="password" name="password" placeholder="Password"required><br> 

        <button type="submit"name="login">Login</button>
        <h3 id="hg">Dont have an account? <a href="signup.php">Register Now</a></h3>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

     </form>
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
    <label class="y">E-mail:<input type="email"name="email"placeholder="Enter your email">
    <input type="submit"value="send"name="submit"id="myButton"></label>
    </td></tr>

   </table>

  </div>

  <div class="last">
  <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<div class="after-last">Copyright &copy; Kigalishop.com 2023 </div>
  </div>

</body>

</html>

<!--end -->

