<?php
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