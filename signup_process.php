<?php 

include_once "connection.php";

      
$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$email = $_POST['email'];
$password = $_POST['password'];

         //verifying the unique email
         
         $verify_query = mysqli_query($conn,"SELECT email FROM users WHERE email='$email'");

         $query=mysqli_query($conn,"SELECT name FROM users WHERE name='$name';");

        if (mysqli_num_rows($query) != 0)
        {
            echo "name already exists";
            die;
        }

        $status=mysqli_query($conn,"insert into users(name,email,roll_no,password) values('$name','$email','$roll_no','$password')");
    if($status)
    {
        echo "Registration Successfull!";
        echo "<a href='login.html' >Continue to Login</a>";
        
    }
    else
    {
        echo "Error in Registartion";
        echo mysqli_error($conn);
    }
      

?>