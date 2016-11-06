<html>
<head>
  <title></title>
  <script>
  var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

  </script>
</head>
<body>
<?php      
      $first_name  = $_POST['first_name'];
      $last_name  = $_POST['last_name'];
      $email = $_POST['email_address'];
      $city   = $_POST['city'];
      $msg   = $_POST['message'];
      $mob   = $_POST['mobile'];
      $country   = $_POST['country'];
      $category   = $_POST['category'];
      
         $to = $email;
         $name ="Online Inquiry";

         $message  = "First Name :" .$first_name;
         $message .= "<br>  Last Name :" .$last_name;
         $message .= "<br>  Mobile :" .$mob;
         $message .= "<br>  Message :" .$msg;
         $message .= "<br>  City :" .$city;
         $message .= "<br>  Country :" .$country;
         $message .= "<br>  Category :" .$category;

         $header = "From:\r\n" .$email;
         $header = "Cc:csaddictive@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
            if($first_name && $last_name && $email && $msg && $city && $country && $mob && $category != "" ){
           $retval = mail ($to,$name,$message,$header);
          }
          else{
             echo "<script>";
            echo "alert('Please Enter Valid Data');";
            echo "</script>";
          }      
         if( $retval == true) {
            //header("Location:contact-us.php");
            echo "<script>";
            echo "alert('Data Informationt sent successfully');";
            echo "</script>";
            echo "Thanks for sharing details";
         }else {
            $retval == false;
            echo "<script>";
            echo "alert('Data Informationt not send successfully');";
            echo "</script>";
            exit;
         }
      ?>
      </body>
</html>