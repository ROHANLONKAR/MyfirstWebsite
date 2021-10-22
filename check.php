<?php

$db=mysqli_connect("localhost","root","","test2");
if (!$db) echo "Failed to connect<br>";
else echo "Connected<br>";

if(isset($_POST['login']))
{
    
    if(isset($_POST['username'])) $username=$_POST['username'];
    else header("Location:login.php?username=Enter UserName");
    
    if(isset($_POST['password'])) $password=$_POST['password'];
    else header("Location:login.php?password=Enter Password");
    
    if(isset($username) and isset($password))
    {
        $query="Select * from userlogindetails where UserName='$username' AND  Password='$password';";
        $result=mysqli_query($db,$query);
        $temp=mysqli_num_rows($result);
        if($temp==1)
        {
            $query1="SELECT * FROM userdata WHERE Email='$username';";
            $result1=mysqli_query($db,$query1);
            if($result1==true)
            {
                while($rows=mysqli_fetch_array($result1))
                {
                    $fullname=$rows["Full Name"];
                    header("Location:Practical-32.php?fullname=".$fullname);
                }
            }
            else echo "Error in Login.Please try again.";
        }
        else header("Location:login.php?error=error");
    }
}

else if(isset($_POST['signup'])) header("Location:signup.php");

else if(isset($_POST['contact']))
{
    if(isset($_POST['name'])) $name=$_POST['name'];
    if(isset($_POST['email'])) $email=$_POST['email'];
    if(isset($_POST['message'])) $message=$_POST['message'];

    $query2="INSERT INTO contactdetails VALUES ('$name','$email','$message');";
    $result2=mysqli_query($db,$query2);
    
    if($result2==true) header("Location:Practical-32.php?message=sent");
}

?>