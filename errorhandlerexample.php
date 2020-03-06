<!DOCTYPE html>
<html>
 <head>
  <title></title>
 </head>
 <body>
  <form method="POST" action="includes1/signup.db1.php">
   <?php
     if(isset($_GET['user_firstname']))
     {
       $user_firstname = $_GET['user_firstname'];
       echo '<input type="text" name="user_firstname" placeholder="Enter first name" value="'.$user_firstname.'">';
     }
     else{
       echo '<input type="text" name="user_firstname" placeholder="Enter first name">';
     }
   ?>
  </br>
   <?php
     if(isset($_GET['user_lastname'])){
       $user_lastname = $_GET['user_lastname'];
       echo '<input type="text" name="user_lastname" placeholder="Enter last name" value="'.$user_lastname.'">';
     }
     else{
       echo '<input type="text" name="user_lastname" placeholder="Enter last name">';
     }
   ?>
  
  </br>
  <input type="text" name="user_email" placeholder="Enter email">
  </br>
   <?php
     if(isset($_GET['user_address'])){
       $user_address = $_GET['user_address'];
       echo '<input type="text" name="user_address" placeholder="Enter address" value="'.$user_address.'">';
     }
     else{
       echo '<input type="text" name="user_address" placeholder="Enter address">';
     }
   ?>
  </br>
  <button type="submit" name="submit">Finish</button>

  </form>
  <?php
    //$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(!isset($_GET['signup'])){
      exit();
    }else{
      $checksignup = $_GET['signup'];
      if($checksignup == "empty"){
        echo "You are not fill all field.";
        exit();
      }
      elseif($checksignup == "char"){
        echo "You used invalid name character.";
        exit();

      }
      elseif($checksignup == "email")
      {
        echo "You used invalid email.";
        exit();
      }
      elseif($checksignup == "address"){
        echo "You used invalid address character.";
        exit();
      }
      elseif($checksignup == "success"){
        echo "You have been signed up successfull.";
        exit();
      }
    }
  ?>
 </body>
</html>
