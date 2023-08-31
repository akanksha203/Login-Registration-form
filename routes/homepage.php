<?php

   session_start();
   if(!isset($_SESSION['username'])){
         header("location:../harry.html");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="../css/homepagecss.css">
  </head>
<body>
<div class="i"><img style="width:1048px;margin-left:0px;margin-top:1px;height:1450px;opacity:0.09"src="../images/sunset.jpg"></div>
  <div id="loginsection">
    <h1 class="nothing"><?php echo $_SESSION['username'] ?>!</h1>
    <h2 class="nothing">no</h2>
    <div class="first">
      <img class="imgstyle1" src="../images/<?php echo $_SESSION['image'] ?>"><br><br>
      <h2 style="background-color:transparent;color:white"><?php echo $_SESSION['username'] ?></h2>
      <div style="background-color:transparent;color:rgb(229, 181, 24)"><?php echo $_SESSION['short'] ?></div>
    </div><br><br>
      <div class="second">
        <br><br><div style="margin-left:1rem;background-color:transparent;color:white">Age: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION['age'] ?></div><br>
        <div style="margin-left:1rem;background-color:transparent;color:white">City: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION['city'] ?></div><br>
        <div style="margin-left:1rem;background-color:transparent;color:white">Email: &emsp;&emsp;<?php echo $_SESSION['email'] ?></div><br>
        <div style="margin-left:1rem;background-color:transparent;color:white">Contact: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<?php echo $_SESSION['mobile'] ?></div><br><br><hr><br><br>
        <div class="c1" role="progressbar" aria-valuenow="<?php echo $_SESSION['english']?>" aria-valueadmin="0" aria-valuemax="100" style="--value:<?php echo $_SESSION['english']?>"></div>
        <div class="c1" role="progressbar" aria-valuenow="<?php echo $_SESSION['foreignl']?>" aria-valueadmin="0" aria-valuemax="100" style="--value:<?php echo $_SESSION['foreignl']?>"></div><br><br><br><br>
        <p class="eng">English &emsp;&emsp;&emsp;&emsp;&emsp; Foreign</p><br><br><br>
        <div class="style1">Html  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION['html']."%"?></div>
        <progress style="background-color: transparent;" max="100" value="<?php echo $_SESSION['html'] ?>" ><?php echo $_SESSION['html']."%" ?></progress><br><br><br>
        <div class="style1">Css  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['css']."%"?></div>
        <progress style="background-color: transparent;" max="100" value="<?php echo $_SESSION['css'] ?>" ><?php echo $_SESSION['css']."%" ?></progress><br><br><br>
        <div class="style1">Javascript  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION['javascript']."%"?></div>
        <progress  style="background-color: transparent;" max="100" value="<?php echo $_SESSION['javascript'] ?>" ><?php echo $_SESSION['javascript']."%" ?></progress><br>
      </div>
      
    <div class="third">
        <!-- <img class="imgstyle2" src="../images/<?php echo $_SESSION['image'] ?>"> -->
    </div> 
        <div class="style3" ><?php echo $_SESSION['years']."+" ?><span style="color:white;font-size:x-large;background-color:transparent">&nbsp; Years Of Experience </span></div>
        <div class="style4"><?php echo $_SESSION['projects'] ?><span style="color:white;font-size:x-large;background-color:transparent">&nbsp; Completed Projects</span></div>
        <div class="style5"><?php echo $_SESSION['customer'] ?><span style="color:white;font-size:x-large;background-color:transparent">&nbsp; Happy Customers </span></div>
        <h2 style ="margin-top:50px;margin-left:440px;text-align:left;width:20%;background-color:transparent;color:white">My Services</h2>
        
  </div>
  <div class="desc1" ><br> Service 1<br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo  $_SESSION['desc1'] ?></span></div>
  <div class="desc2"><br>Service 2<br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo  $_SESSION['desc2'] ?></span></div>
   <div class="desc3"><br>Service 3<br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo $_SESSION['desc3'] ?></span></div>
   <h2 style ="margin-top:50px;margin-left:440px;text-align:left;width:20%;background-color:transparent;color:white;position: relative;z-index: 5">Education</h2>
   <h2 style ="margin-top:-29px;margin-left:1010px;text-align:left;width:20%;background-color:transparent;color:white;position: relative;z-index: 5">Work Experience</h2>
     <div class="e1" ><br> Education <br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo  $_SESSION['e1'] ?></span></div>
  <div class="e2"><br>Work Experience<br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo  $_SESSION['wh1'] ?></span></div>
  <div class="e1" ><br> Education <br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo  $_SESSION['e2'] ?></span></div>
  <div class="e2"><br>Work Experience<br><br><span style="font-size:15px;color:white;background-color:transparent"><?php echo  $_SESSION['wh2'] ?></span></div>
   <div class="circle1"></div>
   <div class="circle2"></div>
   <div class="circle3"></div>
   <h1 class="hello">Welcome Back <span style="color:white;background-color:transparent"><?php echo $_SESSION['username'] ?></span>!</h1>
   <h1 class="hello2">Discover my Amazing Art Space!</h1>
   <div class="hello3"><span style="color:white;background-color:transparent"><</span><span style="color:rgb(229, 181, 24);background-color:transparent">code</span><span style="color: white;background-color:transparent">></span><span style="color:white;background-color:transparent"> This is My Profile. <<span style="color:white;background-color:transparent">/</span></span><span style="color:rgb(229, 181, 24);background-color:transparent">code</span><span style="color:white;background-color:transparent">></span></div>
   <button id="explore">Explore Now</button>
   <form action="../api/api.php" method="post">
      <button id="logoutbtn" type="submit" name="logoutbtn">logout</button>
   </form>
   
    <div class="vl"></div> 
    <div class="v2"></div> 
    <div id="slideshow">
		<div class="slide-wrapper">
			<div class="slide">
				<h1 class="slide-number">
				     <img src="../images/<?php echo $_SESSION['cer1'] ?>" >
				</h1>
			</div>
			<div class="slide">
				<h1 class="slide-number">
					<img src="../images/<?php echo $_SESSION['cer2'] ?>" >
				</h1>
			</div>
			<div class="slide">
				<h1 class="slide-number">
					<img src="../images/<?php echo $_SESSION['cer3'] ?>">
				</h1>
			</div>
			<div class="slide">
				<h1 class="slide-number">
					<img src="../images/<?php echo $_SESSION['cer4'] ?>" >
				</h1>
			</div>
		</div>
	</div>
  <h1 style="margin-top:-100px;margin-left:145px;background-color:transparent;width:50%;color:white">Thank You!</h1>
   <div class="ci1"></div>
   <div class="border"></div>
</body>
</html>