<?php
// we check if the user has clicked the finish button
if(isset($_POST['submit'])){
// Then we include the database connection
include_once 'db.connect.php';
$user_firstname = mysqli_real_escape_string($conn,$_POST['user_firstname']);
$user_lastname = mysqli_real_escape_string($conn,$_POST['user_lastname']);
$user_email = mysqli_real_escape_string($conn,$_POST['user_email']);
$user_address = mysqli_real_escape_string($conn,$_POST['user_address']);
  if($conn->connect_error){
    die("Error:Unable to connect:".$conn->connect_error);
  }
  //query to database.
  $sql = "INSERT INTO INFORLOGIN (firstname,lastname,email,address) VALUES(?,?,?,?);";
 //create prepared statement.
  $stmt =  mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "Sql error";
  }else{
    //Bind parameters to placeholder
    mysqli_stmt_bind_param($stmt,"ssss",$user_firstname,$user_lastname,$user_email,$user_address);
    //Run parameters inside database.
    mysqli_stmt_execute($stmt);
  }
    if(empty($user_firstname) || empty($user_lastname) || empty($user_email) || empty($user_address)){
      header("Location:../errorhandlerexample.php?signup=empty");
      exit();
    }else{
        //Check if input character are valid.
        if(!preg_match("/^[a-zA-Z]*$/",$user_firstname) || !preg_match("/^[a-zA-Z]*$/",$user_lastname)){
            header("Location:../errorhandlerexample.php?signup=char");
            exit();
        }else{
             //Check if email is valid.
            if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
                header("Location:../errorhandlerexample.php?signup=email&user_firstname=$user_firstname&user_lastname=$user_lastname");
                exit();
            }else{
                //Check if address is valid.
                if(!preg_match("/^[a-zA-Z]*$/",$user_address)){
                    header("Location:../errorhandlerexample.php?signup=address&user_firstname=$user_firstname&user_lastname=$user_lastname&user_email=$user_email");
                    exit();
                }else{
                    header("Location:../errorhandlerexample.php?signup=success");
                    exit();
                }
                        

            }
                   
        }

               


               
    }
            
 
