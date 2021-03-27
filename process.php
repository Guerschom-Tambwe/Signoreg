<?php

include_once 'config/config.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	{	 
		$name = test_input($_POST['name']);
		$email_id = test_input($_POST['email_id']);
		$phone=test_input($_POST['phone']);
		$password = md5($_POST['confirmPassword']);


	function validateName() {
		if (empty($_POST['name'])) {
	    echo "Name is required<br/>";
	    return;
	  }

	  if (strlen($_POST['name']) < 6){
	  	echo "Full Name should be at least than 6 characters<br/>" . $name;
	  	return;
	  }

	  else if(strlen($_POST['name']) > 30){
		echo "Full Name should be shorter than 30 characters<br/>". $name;
		return;
		}
	}

	function validateEmail(){
		if (empty($_POST['email_id'])) {
	    echo "Email is required<br/>";
	    return;
	  }

	  if (strlen($_POST['email_id']) < 6){
	  	echo "Email should be at least 6 characters long<br/>".$email_id;
	  	return;
	  }

	  else if(strlen($_POST['email_id']) > 30){
		echo "Email should be shorter than 30 characters<br/>".$email_id;
		return;
		}
	}


	function validatePhone(){
	  if (empty($_POST['phone'])) {
	    echo "Phone is required<br/>";
	    return;
	  }

	  if (strlen($_POST['phone']) < 10){
	  	echo "Phone should be at least 10 characters long<br/>";
	  	return;
	  }

	  else if(strlen($_POST['phone']) > 10){
		echo "Phone should be no more than 30 characters long<br/>";
		return;
		}
	}

	function validatePassword() {

	  if(empty($_POST['confirmPassword'])) {
	    echo "Password is required<br/>";
	    return;
	  }

	  if (strlen($_POST['confirmPassword']) < 6){
	  	echo "Password should be at least 10 characters long<br/>";
	  	return;
	  }

	  else if(strlen($_POST['confirmPassword']) > 30){
		echo "Password should be no more than 30 characters long<br/>";
		return;
		}
	}


	validateName();
	validateEmail();
	validatePhone();
	validatePassword();


		$duplicate=mysqli_query($conn,"select * from user where email_id='$email_id' or phone='$phone'");

		if (mysqli_num_rows($duplicate)>0)
		{
			header("Location: signup.php?status=201");
			exit();
		}
		
		$sql = "INSERT INTO user (name,email_id,phone,password)
		VALUES ('$name','$email_id','$phone','$password')";
		if (mysqli_query($conn, $sql)) {
			header("Location: index.php?status=200");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		 mysqli_close($conn);
		}
	}

	else {
		header("Location: index.php?status=501");
	}
?>