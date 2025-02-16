<?php

error_reporting(E_ALL ^ E_WARNING); 

include 'partials/_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email_id = $_POST["emailid"];
    $mobile_number = $_POST["mobile_number"];
    $college= $_POST["college"];
    echo $mobile_number;
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
            $sql = "INSERT INTO users (email,user_name, password,date_time, mobile,college)
            VALUES ('$email_id','$username', '$password',current_timestamp(), '$mobile_number','$college')";
            
            function redirect($url) {
              ob_start();
              header('Location: '.$url);
              ob_end_flush();
              die();
          }

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            //redirect("signin.php");
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
}
    }
    else{
        echo "Passwords do not match";
    }
}

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'clarketnsut@gmail.com';
$mail->Password = 'clarket@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('clarketnsut@gmail.com', 'Clarket');
$mail->addAddress($_POST["emailid"], $_POST["username"]);
$mail->isHTML(true);
$mail->Subject = 'Welcome to Clarket!';
$mail->Body    = $mail->msgHTML(file_get_contents('template.html'));

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>

<html>
<head>
  <meta charset="utf-8">
  <title>Clarket-Sign Up</title>
  <link rel="stylesheet" type="text/css" href="signin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="box-root padding-top--48 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--10 padding-bottom--24 flex-flex flex-justifyContent--center">
          <a class="navbar-brand home-heading " href="index.php">Clarket</a>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign up to your account</span>
              <form id="stripe-login" action="signup.php" method="post">
                <div class="field padding-bottom--24">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                  </div>
                  <div class="field padding-bottom--24">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="text" name="mobile_number">
                  </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="emailid">
                </div>
                <div class="field padding-bottom--24">
                    <label for="college">College</label>
                    <select id="college" name="college" style="color: #444444; border-radius: 4px; height: 45px; border: 1.3px solid #DEDEDE; width: 100%;" >
                    <option value="Netaji Subhas University of Technology" style="color: #666666;">Netaji Subhas University of Technology</option>
                    <option value="Delhi Technological University" style="color: #666666;">Delhi Technological University</option>
                    <option value="Indraprastha Institute of Information Technology Delhi" style="color: #666666;">Indraprastha Institute of Information Technology Delhi</option>
                    
                    </option></select>
                  </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Set Password</label>
                  </div>
                  <input type="password" name="password">
                </div>
                <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                      <label for="cpassword">Confirm Password</label>
                    </div>
                    <input type="password" name="cpassword">
                  </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Sign up">
                </div>
                <!-- <div class="field">
                  <a class="ssolink" href="#">Sign up with Google instead</a>
                </div> -->
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Already have an account? <a href="signin.php">Sign in</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© Clarket</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
            </div>
          </div>
        </div>
      </div>
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>