<?php
// Initializing the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="background">
        <h1 style="color:white;"class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            <div className="container">
                <h1 id="subheading">About me</h1>
                <div className="subcontainer12">
                    <div className="content12">
                        <p id="selfIntroPara" style="color:white;font-size:20px;">
                            <img src="/assets/images/myimg.jpg" id="myImage">
                            I am Venkatagiriraju Udayakumar from<br />
                            Knowledge Institute Of Technology, Salem.<br />
                            Currently pursuing 3<sup>rd</sup>year Bachelor of Engineering
                            degree in Computer Science and Engineering.<br />
                            <br />
                            <br />
                            <br />
                            <h3 id="contactInfo">Contact Information</h3>
                            <p id="mail"><b><?php echo htmlspecialchars($_SESSION["username"]); ?>@gmail.com</b></p>
                            <button id="signoutbtn"onclick="document.location='logout.php'">Sign Out of Your Account</button>
                        </p>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>