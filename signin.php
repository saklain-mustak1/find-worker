<?php
session_start();
include("connection.php")
?>
<!DOCTYPE html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="css\index.css">
    <script src="js\signin.js"></script>

    <meta name="author" content="Saklain Mustak">
    <meta name="description" content="it is an sign in page for mannymoni.com">
</head>

<body>
    <!--header division for logo and sing in-->
    <header class="logobar">
        <!--logo with website click on logo to go new page-->
        <div class="logos">
            <a href="manymoni.com" target="_blank">
                <img src="img\logo.png" title="ManyMoni" class="logo">
            </a>
        </div>
        <!--sing in header-->
        <div style="width:fit;height: 100px;margin-left: 150px;">
            <br>
            <div style="text-align: center;height: 90px;">
                <form method="POST">
                    <input type="submit" title="SIGN UP" formaction="signup.php" value="SIGN UP" style="position: relative;">
                    <button type="button" class="btn" title="Sign in" size="500px" value="SIGN IN"> SIGN IN</button>
                </form>
            </div>
        </div>
    </header>
    <div class="hero">
        <div class="form" style="font-family:arial black;">
            <form  method="POST" autocomplete="on">
                Enter Phone Number<select name="phonecode">
                <option value="+91">+91</option>
                <option value="+1">+1</option>
                <option value="+2">+2</option></select><input type="tel" placeholder="10 digit number" name="idNumber" pattern="[0-9]{10}" autofocus required maxlength="10">
                <br> Password
                <input type="password" placeholder="Enter password" id="passin" name="password" required>
                <span class="eye" onclick="myFunctionin()">
                    <i ><img src="img\eyeon.png" id="hide5" class="eyeon"> </i>
                    <i > <img src="img\eyeslash.png" id="hide6" class="eyeslash"></i>
                </span>
                <br><br><input id="sbtn" type="submit" name="submitin" title="log in" value="LOG IN">
            </form>
        <?php
        if(isset($_POST['submitin'])){
            $userid = $_POST['idNumber'];
            $passwrd = $_POST['password'];
            $query ="SELECT * FROM saklain WHERE phone='$userid' && passwrd='$passwrd'";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total==1){
                $_SESSION['userno']=$userid;
                header('location:mainpage.php');
            }
            else{
                echo "<font color='red'>log in fail";
            }
        }
        ?>
            <div style="text-align: right">
                    <input type="submit"  value="Forgot Password">   
                </div>            
            <br>
        <a href="signup.php"> new user sign up</a>
            <div style="text-align: end">       
               <br> <a href="mainpage.php" text-align="left">Skip....</a>
            </div>
        </div>
        <footer class="footer">
            <header><u><b>Presented By:<b></b></u><br><i><b> ManyMoni</b></i></header>
        </footer>
    </div>
</body>
</html>