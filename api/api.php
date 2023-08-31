<?php
session_start();
    $connect = mysqli_connect('localhost','root','','login') or die('connection error!');
    if(isset($_POST['registerbtn'])){
        $username=$_POST['username'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $short = $_POST['short'];
        $english = $_POST['english'];
        $foreignl = $_POST['foreignl'];
        $html = $_POST['html'];
        $css = $_POST['css'];
        $javascript = $_POST['javascript'];
        $years = $_POST['years'];
        $projects = $_POST['projects'];
        $customer = $_POST['customer'];
        $desc1 = $_POST['desc1'];
        $desc2 = $_POST['desc2'];
        $desc3 = $_POST['desc3'];
        $e1 = $_POST['e1'];
        $e2 = $_POST['e2'];
        $wh1 = $_POST['wh1'];
        $wh2 = $_POST['wh2'];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../images/" .basename($filename);
        move_uploaded_file($tempname,$folder);


        $filename1 = $_FILES["cer1"]["name"];
        $tempname1 = $_FILES["cer1"]["tmp_name"];
        $folder1 = "../images/" .basename($filename1);
        move_uploaded_file($tempname1,$folder1);


        $filename2 = $_FILES["cer2"]["name"];
        $tempname2 = $_FILES["cer2"]["tmp_name"];
        $folder2 = "../images/" .basename($filename2);
        move_uploaded_file($tempname2,$folder2);


        $filename3 = $_FILES["cer3"]["name"];
        $tempname3 = $_FILES["cer3"]["tmp_name"];
        $folder3 = "../images/" .basename($filename3);
        move_uploaded_file($tempname3,$folder3);


        $filename4 = $_FILES["cer4"]["name"];
        $tempname4 = $_FILES["cer4"]["tmp_name"];
        $folder4 = "../images/" .basename($filename4);
        move_uploaded_file($tempname4,$folder4);
        $to_email = "$email";
        $subject="Email from xaamp server";
        $body = "You are registered successfully";
        $headers = "From: myprofile@gmail.com";
        mail($to_email, $subject, $body, $headers);
        $insert=mysqli_query($connect,"INSERT INTO user VALUES('$username','$mobile','$password','$email','$city','$age','$short','$english','$foreignl','$html','$css','$javascript','$years','$projects','$customer','$filename','$filename1','$filename2','$filename3','$filename4','$desc1','$desc2','$desc3','$e1','$e2','$wh1','$wh2')");
        if($insert){
            echo '<script> 
            alert("Registration Successfull!")
            window.location = "../harry.html";
            </script>';
            
        }
        else{
            echo '<script> alert("Registration Failed!")</script>';
        }
    }
    if(isset($_POST['loginbtn'])){
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
    $check = mysqli_query($connect, "SELECT * FROM user WHERE mobile = '$mobile' AND password = '$password'");
    if(mysqli_num_rows($check)>0){
        $fetch = mysqli_fetch_array($check);
        $username = $fetch['username'];
        $_SESSION['username'] = $username;
        $_SESSION['email']=$fetch['email'];
        $_SESSION['city']=$fetch['city'];
        $_SESSION['age']=$fetch['age'];
        $_SESSION['short']=$fetch['short'];
        $_SESSION['english']=$fetch['english'];
        $_SESSION['foreignl']=$fetch['foreignl'];
        $_SESSION['mobile']=$fetch['mobile'];
        $_SESSION['html']=$fetch['html'];
        $_SESSION['css']=$fetch['css'];
        $_SESSION['javascript']=$fetch['javascript'];
        $_SESSION['projects']=$fetch['projects'];
        $_SESSION['years']=$fetch['years'];
        $_SESSION['customer']=$fetch['customer'];
        $_SESSION['desc1']=$fetch['desc1'];
        $_SESSION['desc2']=$fetch['desc2'];
        $_SESSION['desc3']=$fetch['desc3'];
        $_SESSION['e1']=$fetch['e1'];
        $_SESSION['e2']=$fetch['e2'];
        $_SESSION['wh1']=$fetch['wh1'];
        $_SESSION['wh2']=$fetch['wh2'];
        // $data = mysqli_fetch_assoc($check); 
        $_SESSION['image']=$fetch['image'];
        $_SESSION['cer1'] = $fetch['c1'];
        $_SESSION['cer2'] = $fetch['c2'];
        $_SESSION['cer3'] = $fetch['c3'];
        $_SESSION['cer4'] = $fetch['c4'];
        header("location:../routes/homepage.php");
    }
    else{
        echo '<script> 
        alert("Login Failed!")
        window.location ="../harry.html";
        </script>';
    }
    }
    if(isset($_POST['logoutbtn'])){
        session_destroy();
        header("location:../harry.html");
        }
?>