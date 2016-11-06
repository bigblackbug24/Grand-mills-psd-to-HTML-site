<html>
<head>
  <title></title>
 

</head>
<body>
<?php     
      $first_name  = $_POST['first_name'];
      $last_name  = $_POST['last_name'];
      $email = $_POST['email_address'];
      $mob   = $_POST['mobile'];
      $msg   = $_POST['message'];
      
         $to = $email;
         $name ="Application Form";

         $message  = "First Name :" .$first_name;
         $message .= "<br>  Last Name :" .$last_name;
         $message .= "<br>  Description :" .$msg;
         $message .= "<br>  Mobile :" .$mob;

         $header = "From:\r\n" .$email;
         $header = "Cc:csaddictive@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
                        
         $retval = mail ($to,$name,$message,$header);
        
         if( $retval == true) {
            //header("Location:contact-us.php");
            echo "<script>";
            echo "alert('Data Informationt send successfully');";
            echo "</script>";
            echo "Thanks for sharing details";
         }else {
            echo "<script>";
            echo "alert('Data Informationt not send successfully');";
            echo "</script>";
            exit;
         }
      ?>
      </body>
</html>