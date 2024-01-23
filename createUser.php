<?php
   include('sessions.php');
?>
<html>
  <head>
     <title>E-learning</title>
	 <style> 
		a {
		  color: black;
		  text-decoration: none !important;
		} 
	 </style>
  </head>
  
  <body>
  <table  class="menu" width="100%">
    <tr>
	   <td colspan="5" style="text-align:right; color:green;"> 
	   <a href="profile.php">Profile</a>
	   <br/>
	   <?php echo $login_session; ?></td>
	</tr>
  </table> 
	  <table border=0 height="80%" width="100%">
	    <tr><td><a href="home.php">Dashboard</a></td><td width="80%"rowspan="7" valign="top">
		   <h2><a href="users.php"> <img src="images/arrow.png" width="40" height="40"> </a> Add User </h2> 
		   <hr/> 
	  <form action="" method="post" style="margin-left: 20px;"> 
	     <input type="text" name="fname" placeholder="Enter your first name" size="40"/> <br/><br/>
	     <input type="text" name="lname" placeholder="Enter your last name"size="40"/> <br/> <br/>
		 <input type="text" name="email" placeholder="Enter your email" size="40"/> <br/>
	     <br/>
		 <select name = "gender">
		    <option value= 0>Select gender </option>
		    <option value=1>Male </option>
			<option value=2>Female </option>
		 </select>
		 <br/><br/>
		 <select name = "role">
		    <option value= 0>Select role </option>
		    <option value=1>User </option>
			<option value=2>Manager </option>
		 </select>
		 <br/> 
		 <br/>
		 <input type="submit" value="Bika" name="sub"/>  
	  </form> 
		   
		<?php
          if(isset($_POST['sub'])){	
		    $fname = $_POST['fname'];
            $lname = $_POST['lname']; 
			$email = $_POST['email']; 
            $gender = $_POST['gender'];	
            $role = $_POST['role'];			
			 
		    $q = "INSERT INTO userttb(id, fname, lname, email, gender, role, status)
			      VALUES('','$fname','$lname','$email','$gender','$role', 2)"; 
			$results = mysqli_query($con,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($con));
			} 
			   echo '<meta http-equiv="refresh" content="0; url=users.php">';
			}  
		   ?> 
		
		</td></tr>		
	    <tr><td  bgcolor="green"><a href="users.php"><b style="color:white; margin-left:10px;">Users</b></a></td></tr>
		<tr><td><a href="lecturers.php">Lecturers</a></td></tr>
		<tr><td><a href="categories.php">Categories</a></td></tr>
		<tr><td><a href="courses.php">Courses</a></td></tr>
		<tr><td><a href="Tests.php">Tests</a></td></tr>
		<tr><td><a href="messages.php">Manage messages</a></td></tr>
		<tr><td><a href="logout.php">Logout</a></td></tr>  
       </table>	
       <table border=0 width="100%">	   
        <tr>
	      <td colspan="5"><p style="text-align:center; background-color:green; color:white">Copyright@allright reserved</p></td>
	   </tr>
  </table>
  </body>
</html> 