<?php
	require('adduser.class.php');
	
	if(isset($_POST['submit'])){
		if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && isset($_POST["gender"])){
			$input = array(
						"firstname"=>$_POST["fname"],
						"lastname"=>$_POST["lname"],
						"email"=>$_POST["email"],
						"password"=>$_POST["password"],
						"gender"=>$_POST["gender"]
					);
					
			//create a new object of addUser class
			$obj = new addUser();
			if($obj->checkdb("user",$input["email"])){
				echo "Duplicate Entry";
				header("Location:../pages/login.php?dup=1");
				exit();
			}else{
				if($obj->add("user",$input)){
					$_SESSION["RegistrationCompleted"] = "true";
					echo "Data Inserted Successfully";
					header("Location:../pages/login.php");
				}else{
					echo "Data could not be inserted";
					header("Location:../pages/register.php");
					exit();
				}
			}
			
			
		}else{
			header("Location:../pages/register.php?empty=1");
			exit();
		}
	}else{
		header("Location:../pages/register.php");
		exit();
	}
?>