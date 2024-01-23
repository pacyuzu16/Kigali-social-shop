<?php
include("Connection.php");
			  if(isset($_REQUEST["submit"])){
				$Email = $_POST["email"];
				
                $qer = "INSERT INTO news_letter (email)
				VALUES
				('$Email')";
				$result = mysqli_query($con, $qer);
				
				if(!$result){
					die("Something went wrong in the query".mysqli_error($con));
				}
                echo "Data Received";
            }
            ?>