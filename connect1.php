<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','csse2') or die("Connection Failed");

        if(isset($_POST['signup_username']) && isset($_POST['signup_email']) && isset($_POST['signup_password']))
        {
            $signup_username = $_POST['signup_username'];
            $signup_email = $_POST['signup_email'];
            $signup_password = $_POST['signup_password'];

            $sql = "INSERT INTO `signup` (`signup_username`, `signup_email`, `signup_password`)  VALUES ('$signup_username','$signup_email','$signup_password')";

          

            if(mysqli_query($conn,$sql))
            {
                //echo "Entry Successfull";
                header("Location: Mainpage.html");
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>