<?php

  $firstName = filter_input(INPUT_POST,'firstName');
  $lastName = filter_input(INPUT_POST, 'lastName');
  $mobile =filter_input(INPUT_POST,'mobile');
  $email = filter_input(INPUT_POST, 'email');
  $subject = filter_input(INPUT_POST,'subject');
   if(!empty ($firstName)){
   if(!empty ($lastName)){
   	if(!empty ($mobile)){
   	if(!empty ($email)){
   	 if(!empty ($subject)){
      $host ="localhost";
      $dbusername="root";
      $dbpassword="";
      $dbname="registration";


      // Create Connection
      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

      if (mysqli_connect_error()){
      	die('Connct Error ('. mysqli_connect_errno() .') '
      		. mysqli_connect_error());
      }
      else{
      	$sql ="INSERT INTO registration (first name, last name, mobile, email, subject)
      	         values('$firstName','$LastName', '$mobile', '$email', '$subject')";
      	         if ($conn->query($sql)){
      	         	echo "new record is inserted sucessfully";
      	         }
      	         else{
      	         	echo "Error:" .$sql ."<br>" .$conn->error;
      	         }
      	         $conn->close();
      }

   	 }
   	 else{
   	 	echo "subject should not be empty";
   	 	die();
   	 }
   	}
   	 else{
   	 	echo "email should not be empty";
   	 	die();
   	 }
   	}
   	 else{
   	 	echo "mobile should not be empty";
   	 	die();
   	 }

   	}
   	else{
   		echo "lastName should not be empty";
   		die();
   	}
   }
   	else{
   		echo "firstName should not be empty";
   		die();
   	}


  ?>