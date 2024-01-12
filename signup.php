<!--ManyMony.com project start date 11 july 2020 by Saklain Mustak-->
<!DOCTYPE html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css\index.css">
    <script src="js\index.js"></script>
    <meta name="author" content="Saklain Mustak">
    <meta name="description" content="it is an sign up page for mannymoni.com">
</head>

<body>
    <!--header division for logo and sing up-->
    <header class="logobar">
        <!--logo with website click on logo to go new page-->
        <div class="logos">
            <a href="manymoni.com" target="_blank">
                <img src="img\logo.png" title="ManyMoni" class="logo">
            </a>
        </div>
        <!--sing up header-->
        <div style="width:fit;height: 100px;margin-left: 150px;">
            <br>
            <div style="text-align: center;height: 90px;">
                <form method="POST">
                    <button type="button" class="btn" title="Sign Up" size="500px" value="SIGN UP"> SIGN UP</button>
                    <input type="submit" title="SIGN IN" formaction="signin.php" value="SIGN IN" style="position: relative;">
                </form>
            </div>
        </div>
    </header>
    <!--end of logo and sing up header division-->
    <div class="hero">
        <div class="form" style="font-family:arial black;">
            <form action="preprofil.php" method="POST" onsubmit="return password_match()" autocomplete="on">
                Enter Phone Number<select name="phonecode">
                <option value="+91">+91</option>
                <option value="+1">+1</option>
                <option value="+2">+2</option></select><input type="tel" placeholder="10 digit number" name="idNumber" pattern="[0-9]{10}" autofocus required maxlength="10">
                <br> Name <input type="text" placeholder="Enter your full Name" name="idname" pattern="^[a-z A-Z]+$" required>
                <br> Password
                <input type="password" placeholder="Enter password" id="passr" name="password" required>
                <span class="eye" onclick="myFunction1()">
                    <i ><img src="img\eyeon.png" id="hide3" class="eyeon"> </i>
                    <i > <img src="img\eyeslash.png" id="hide4" class="eyeslash"></i>
                </span>
                <br>Conform password<input type="password" onfocusout="password_match()" placeholder="Re-enter password" id="passw" required>
                <span class="eye" onclick="myFunction()">
                    <i ><img src="img\eyeon.png" id="hide1" class="eyeon"> </i>
                    <i > <img src="img\eyeslash.png" id="hide2" class="eyeslash"></i>
                </span>
                <div id="show-result" class="passs"> </div>
                Gender: <br>
                <span class="gndr">
                    Male<input type="radio" title="your sex" value="MALE" name="Gender"required>  
                    Female<input type="radio" title="your sex" value="FEMALE" name="Gender"required>  
                    Other<input type="radio" title="your sex" value="OTHER" name="Gender"required> 
                </span>
                <br>Age<input type="datetime" placeholder="age" name="idage" size="2px" pattern="[0-9]{1,2,3}" maxlength="3" required>
                <br>Language
                <select title="Designation show with this language">                               
                <option>English</option>
                <option>Hindi</option>
                <option>Assamese</option>
                <option>Bodo</option>
                <option>Bangla</option>               
            </select><br> Designation:<input list="designa" type="text" value="" name="designation" placeholder="Type your Designation" required>
                <datalist id="designa" name="designation">
                    <option value="Teacher">Teacher</option>
                    <option value="Housebuilder">Housebuilder</option>
                    <option value="Sweeper">Sweeper</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Student">
                </datalist>
                <br>POST CODE<input type="text" name="idcode" placeholder=" enter your local postal code" size="10px" pattern="[0-9]{6}" maxlength="6" required>
                <br><input id="sbtn" type="submit" title="NEXT" value="NEXT">
            </form>
        </div>
        <footer class="footer">
            <header><u><b>Presented By:<b></b></u><br><i><b> ManyMoni</b></i></header>
        </footer>
    </div>
</body>

</html>