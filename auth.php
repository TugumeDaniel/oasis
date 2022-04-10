<?php
    session_start();
    if(isset($_POST['regBtn'])){
        $conn=mysqli_connect("localhost","dan","dan","oasis");
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $github=$_POST['github'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];
        $descr=$_POST['descr'];
        $query="INSERT INTO auth (fname,lname,email,github,pass,phone,descr) VALUES ('{$fname}',
                '{$lname}','{$email}','{$github}','{$pass}','{$phone}','{$descr}')";
        $result=mysqli_query($conn,$query);
        mysqli_commit($conn);
        $query2="SELECT uid FROM auth WHERE email='{$email}'";
        $result2=mysqli_query($conn,$query2);
        while($row=mysqli_fetch_row($result2)){
            $_SESSION['uid']=$row[0];
            header("location:blogs.php");
        };
        mysqli_close($conn);
        
    }
    if(isset($_POST['loginBtn'])){
        $conn=mysqli_connect("localhost","dan","dan","oasis");
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $query="SELECT pass,uid FROM auth WHERE email='{$email}'";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_row($result)){
            if($row[0]==$pass){
                $_SESSION['uid']=$row[1];
                header("location:blogs.php");
            }
            else{
                echo "Login Failed";
            }
        };
        mysqli_close($conn);
    }
    $conn=mysqli_connect("localhost","dan","dan","oasis");
    $query="SELECT * FROM auth";
    $result=mysqli_query($conn,$query);
    echo "<table border=5 cellspacing=0>";
    while($row=mysqli_fetch_row($result)){
        echo "<tr>";
        foreach($row as $val){
            echo "<td>".$val.'</td>';
        }
        echo "</tr>";
    }
    echo "</table>";
?>