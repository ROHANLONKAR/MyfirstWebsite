<?php
if(isset($_POST['signup']))
{
    $db=mysqli_connect("localhost","root","","test2");
    if (!$db) echo "Failed to connect<br>";
    else echo "Connected<br>";
    if(isset($_POST['fullname']))
    {
        $fullname=$_POST['fullname'];
    }
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
    }
    if(isset($_POST['mobileno']))
    {
        $mobileno=$_POST['mobileno'];
    }
    if(isset($_POST['password']))
    {
        $password=$_POST['password'];
    }
    $query="INSERT INTO userdata VALUES ('$fullname','$email','$mobileno','$password');";
    $result=mysqli_query($db,$query);
    if($result==true)
    {
        $query1="INSERT INTO userlogindetails VALUES ('$email','$password');";
        $result1=mysqli_query($db,$query1);
        if($result1==true)
        {
            header("Location:login.php");
        }
        else
        {
            echo "error in storing.";
        }
    }
    else
    {
        echo "Unable to sign up.";
    }
}


?>