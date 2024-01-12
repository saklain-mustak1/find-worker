<!--ManyMony.com project start date 11 july 2020 by Saklain Mustak-->

<?php
session_start();
error_reporting(0);
include("connection.php");
$userprofile = $_SESSION['userno'];
$query ="SELECT * FROM saklain WHERE phone='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

$pquery ="SELECT * FROM mustak WHERE phone='$userprofile'";
$pdata = mysqli_query($conn, $pquery);
$presult = mysqli_fetch_assoc($pdata);
?>
    <!DOCTYPE html>

    <head>
        <script type="text/javascript">
            function redirect() {
                window.location = "uprofile.php";
            }
        </script>
        <title>ManyMoni</title>
        <link rel="stylesheet" href="css\index.css">
        <link rel="stylesheet" href="css\extra.css">
        <link rel="stylesheet" href="css\contactus.css">
        <link rel="stylesheet" href="css\popup.css">
        <script src="js\mainpage.js">
        </script>
        <meta charset="UTF-8">
        <meta name="author" content="Saklain Mustak">
        <meta name="description" content="it is an page for mannymoni.com">
    </head>

    <body style="background: linear-gradient(to right, green, yellow);">
        <!-- this division is only for pop up when user not sign in the page-->
        <div>
            <div id="signpop" style="display: none;">
                <div class="popdown">
                    <button class="popdown" onclick="hideopop()"><b>X</b></button>
                </div>
                <center>
                    <img src="img\logo.png" title="ManyMoni" style="height: 120px; width: 120px; margin: 5%; background-color: white; ">
                    <br>
                    <form>
                        <button id="popsignin" formaction="signin.php" title="LOG IN " type="submit "><b>SIGN IN</b></button>
                        <button id="popsignup" formaction="signup.php" title="LOG UP " type="submit "><b>SIGN UP</b></button>
                    </form>
                </center>
            </div>
        </div>
        <div id="mainpage_manymoni">
            <!--header division for logo and sing up-->
            <header style="border: solid thin; background-color: darkgreen;">
                <!--logo with website click on logo to go new page-->
                <div class="logos">
                    <a href="manymoni.com" target="_blank">
                        <img src="img/logo.png" title="ManyMoni" style="height: 125px;" class="logo">
                    </a>
                </div>
                <!--user profile on click if signin person then only open other wise a popup will be shown-->
                <div style="text-align: right;  float: right;  float: top;">
                    <button type="submit" id="uprofile" title="<?php if($userprofile==false){ echo "please Sign in first";} else{ if($presult['image']=='profile/'){ echo 'please upload your image';}else{echo "hey ".$result['name']." your image";}} ?>" value="profile" onclick="<?php if($userprofile==true){ echo " redirect() ";} else {echo "shwopop()
                        ";} ?>"><img src="<?php if($userprofile==true){ if($presult['image']=='profile/'){ echo 'img/add-user.png';}else{echo $presult['image'];}} else {echo "img\add-user.png";} ?>" id="profileph2" ></button>
                </div>
                <div style=" text-align: center; margin-left: 150px; margin-right: 150px; background-color: aquamarine; height: 35px;">
                    WELCOME TO MANYMONI
                </div>
                <div>
                    <input style="margin: 10px;" type="search" name="serchbox" placeholder="search">
                    <form>
                        <div style="text-align: right; margin-left: 150px; margin-right: 150px;">
                            <!--sign in or logout botton if already sign in then botton will show as logout-->
                            <button style="position: relative; margin-right: 20px;" formaction="<?php if($userprofile==true){echo " logout.php ";}else{echo "loutup.php ";}  ?>" type="submit">
                        <?php
                        if($userprofile==true){                           
                            echo "SIGN IN";}
                            else{
                                echo "SIGN UP";
                            }
                        ?></button>
                        </div>
                    </form>
                </div>
                <div style=" text-align: center; padding-left: 5px;">
                    POST CODE<input type="text" name="idcode" placeholder=" enter your local postal code" size="10px" pattern="[0-9]{6}"> Language
                    <select title="Designation show with this language">                               
                <option>English</option>
                <option>Hindi</option>
                <option>Assamese</option>
                <option>Bodo</option>
                <option>Bangla</option>               
            </select> Designation<input type="text" list="section" placeholder="search your helper"><datalist id="section">
            <option value="Teacher">Teacher</option>
            <option value="Housebuilder">Housebuilder</option>
            <option value="Sweeper">Sweeper</option>
            <option value="Electrician">Electrician</option>
            <option value="student"></option>
                </datalist>
                </div>
            </header>
            <!--this division is for manu bar-->
            <div>
                <nav id="navbar">
                    <div class="toggle-btn" onclick="tagmanu()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul>
                        <li onclick="tagmanu()">HOME</li>
                        <!-- here also change if sign in person open this then profile open other wise popup-->
                        <li onclick="<?php if($userprofile==true){echo " redirect() ";}else {echo "shwopop() ";}?>">PROFILE</li>
                        </a>
                        <li>ABOUT</li>
                        <!--logout or sign in-->
                        <a href="logout.php">
                            <li>
                                <?php
                    if($userprofile==true){
                        echo "LOG OUT";
                    }
                    else{
                        echo "SIGN IN";
                    }               
                        ?>
                            </li>
                        </a>
                        <li onclick="iconshw()">CONTACT US</li>
                    </ul>
                    <nav id="contactsocial" style="display: none;">
                        <a href="mailto:saklain5153@gmail.com " title="Email "><img class="cicon " src="img\email.png "></a>
                        <a href="https://www.instagram.com/invites/contact/?i=13grnwkw5nmz2&utm_content=1vlcekz " title="Instagram "><img class="cicon " src="img/instagram.png "></a>
                        <a href="https://www.facebook.com/manymoni0.5/photos/a.108770030806728/108770014140063/?type=3&app=fbl " title="facebook "><img class="cicon " src="img/facebook.png "></a>
                        <a href="https://wa.me/12056517356 " title="Whatsapp "><img class="cicon " src="img/whatsapp.png "></a>
                        <a href="https://twitter.com/Saklain_Mustak1?s=08 " title="twitter "><img class="cicon " src="img/twitter.png "></a>
                        <a href="https://www.youtube.com/channel/UCWrDrx9G0tO3wNY2sNxfIQw " title="youtube "><img class="cicon " src="img/youtube.png "></a>
                    </nav>
                </nav>
            </div>
            <?php 
            include("connection.php");
            $rquery = "SELECT * FROM saklain s INNER JOIN mustak m ON s.phone = m.phone ORDER BY rand()";
            $rdata = mysqli_query($conn, $rquery);
            $total = mysqli_num_rows($rdata);            
            
            if($total != 0)
            {
                while($rresult = mysqli_fetch_assoc($rdata))
                {
                    echo "<div class='wphoto'>
                        <div class='profilephoto'>
                           <a href='wprofile.php?wno=$rresult[phone]'><img src='$rresult[image]' title='image of ".$rresult['name']."' class='photow'></a>
                        </div>
                        <div class='wrecord'>
                            <p>".$rresult['phone']."</p>
                            <p>".$rresult['name']."</p>
                            <p>".$rresult['postcode']."</p>
                            <p>".$rresult['designation']."</p>
                            <form class='cmnttobtn' action='comment.php'>
                            <input type='hidden' name='commentall' value='$rresult[phone]'>
                            <input type='submit' value='COMMENT'></form>
                        </div>
                    </div>";
                }
            }else{
                echo "no result found";
            }
            ?>
        </div>
    </body>

    </html>