<?php
   include('sessions.php');
include("Connection.php");
			  if(isset($_REQUEST["submit"])){
				$Email = $_POST["email"];
                $Name=$_POST["name"];
                $Gender=$_POST["gender"];
				$Password = $_POST["password"];
                $Role = $_POST["role"]; 
				
                $qer = "INSERT INTO user (names,email, gender , password, role, status)
				VALUES
				('$Name','$Email','$Gender', '$Password', '$Role', 1)";
				$result = mysqli_query($con, $qer);
				
				if(!$result){
					die("Something went wrong in the query".mysqli_error($con));
				}
                echo "Data Received";
            }
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
  </style>
</head>
<body>
   <div class="hello">
  <table border="0"bgcolor="#c4aa3a">
  <tr><th width="1000px">   
    <div class="header">
      <h1>Kigali Shop Online Admin System</h1>
      <nav>
        <a href="users.php">Dashboard</a>
        <a href="users.php">All Users</a>
        <a href="buyers.php">Registered clients</a>
       
        <a href="products.php">Products List</a>
        <a href="#">In_carts</a>
        <a href="messages.php">Messages</a>
        <a href="logout.php">Logout</a>
      </nav>
    </div>
  </th><th>
    <div class="profile-section">
    <a href="profile.php"><img src="images/ppp.jpg" alt="Profile"style="width: 35%;border-radius: 50%;"></img></a>	   <br/>
	   <?php echo $login_session; ?>
    </div>
  </th></tr> 
    </table></div>

 
  <h2>Add User</h2>
        <form action="adduser.php" method="post">
          <label for="full-name">Full Name:</label>
          <input type="text" id="full-name" name="name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="gender">Gender:</label>
          <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>

          <label for="role">Role:</label>
          <select id="role" name="role">
            <option value="seller">Admin</option>
            <option value="Admin">Assistant</option>
            <option value="client">Client</option>
          </select>

          <button type="submit" name="submit">Add User</button>
        </form>
      </section>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 Kigali Social Shop  online. All rights reserved.</p>
      <ul>
        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
        <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
        <!-- Add more social media links as needed -->
      </ul>
    </div>
  </footer>



</body>
</html>
