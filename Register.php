<?php
include("Connection.php");
			  if(isset($_REQUEST['submit'])){
				$Email = $_POST['email'];
                $name=$_POST['full_name'];
                $Gender=$_POST['gender'];
				$Password = $_POST['password'];
				
                $qer = "INSERT INTO user (names,email, gender , password, status,role)
				VALUES
				('$name','$Email','$Gender', '$Password', 1,'Client')";
				
				$result = mysqli_query($con, $qer);
				
				if(!$result){
					die("Something went wrong in the query".mysqli_error($con));
				}
				header("Location: login.php");
exit; 
            }
            ?>
