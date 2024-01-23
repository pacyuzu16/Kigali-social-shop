<?php
   include('sessions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    
  section {
    margin-bottom: 20px;
  }
     footer p {
    margin: 0;
  }
  
  footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  footer ul li {
    display: inline;
    margin-right: 10px;
  }
  
  footer a {
    text-decoration: none;
    color: #fff;
  }
    footer {
    background-color:  #c4aa3a;
   
    color: #fff;
    padding: 10px 0;
    text-align: center;
    position:relative;
  }
    form {
    display: flex;
    flex-direction: column;
    width: 300px;
  }
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      background-color: #c4aa3a;
      color: #fff;
      padding: 0px;
      text-align: center;
    }

    .container {
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }

    .main-content {
      width: 70%;
      background-color: #c4aa3a;
      padding: 20px;
      box-sizing: border-box;
    }

    .profile-section {
      width: 100%;
      background-color: #c4aa3a;
      padding: 0px;
   
      height: 100%
    }

    /* Add additional styling as needed */
    .header a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
    }

    .header a:hover {
      border-bottom: 2px solid #fff;
    }
    .hello{
        background-color: #c4aa3a;
    }
    #middle{
      width: 100%;
      height: 200px;
     
           
            background-color: white;
            text-align: center;
            line-height: 20px;
    }
  </style>
</head>
<body>
<script type="text/javascript"> function message() { alert("Admin, Welcome"); } </script> </head> <body onload="message()">
   <div class="hello">
  <table border="0"bgcolor="#c4aa3a">
  <tr><th width="1000px">   
    <div class="header">
      <h1>Kigali Social Shop Online Admin System</h1>
      <nav>
        <a href="users.php">Dashboard</a>
        <a href="users.php">All Users</a>
        <a href="buyers.php">Registered clients</a>
       
        <a href="products.php">Products List</a>
        <a href="in_carts.php">In_carts</a>
        <a href="messages.php">Messages</a>
        <a href="logout.php">Logout</a>
      </nav>
    </div>
  </th><th>
    <div class="profile-section">
      <a href="profile.php"><img src="images/ppp.jpg" alt="Profile"style="width: 35%;border-radius: 50%;"></img></a>
	   <br/>
	   <?php echo $login_session; ?>
    </div>
  </th></tr> 
    </table></div>
    <div id="middle">
    <br><br>
    There is <?php
    $q = "SELECT * FROM user"; 
 $results = mysqli_query($con,$q); 
 if($results){ 
    echo $rowcount=mysqli_num_rows($results); 
 }else{
   echo "0";
 }
  ?>
  users<br> 
  <?php
    $q1 = "SELECT * FROM clothes"; 
 $results1 = mysqli_query($con,$q1); 
 if($results1){ 
    echo $rowcount1=mysqli_num_rows($results1); 
 }else{
   echo "0";
 }
  ?>
  clothes  <br>
  <?php
    $q2 = "SELECT * FROM customers"; 
 $results2 = mysqli_query($con,$q2); 
 if($results2){ 
    echo $rowcount2=mysqli_num_rows($results2); 
 }else{
   echo "0";
 }
  ?>
  registered clients <br>
  <?php
    $q3 = "SELECT * FROM online_sellers"; 
 $results3 = mysqli_query($con,$q3); 
 if($results3){ 
    echo $rowcount3=mysqli_num_rows($results3); 
 }else{
   echo "0";
 }
  ?>
  Sellers  <br>
  <?php
    $q4 = "SELECT * FROM news_letter"; 
 $results4 = mysqli_query($con,$q4); 
 if($results4){ 
    echo $rowcount4=mysqli_num_rows($results4); 
 }else{
   echo "0";
 }
  ?>
 People in news letter<br>
  <?php
    $q5 = "SELECT * FROM contact"; 
 $results5 = mysqli_query($con,$q5); 
 if($results5){ 
    echo $rowcount5=mysqli_num_rows($results5); 
 }else{
   echo "0";
 }
  ?>
  New messages<br>
  
</div>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 Kigali Social Shop online. All rights reserved.</p>
      <ul>
        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
        <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
        <!-- Add more social media links as needed -->
      </ul>
    </div>
  </footer>



</body>
</html>
