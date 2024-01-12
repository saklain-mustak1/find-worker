<!-- ManyMoni project start date 11 july2020 by Saklain Mustak-->
<?php
session_start();
include("connection.php");
error_reporting(0);

$cntrycode = $_POST['phonecode'];
$phnno = $_POST['idNumber'];
$name = $_POST['idname'];
$pass = $_POST['password'];
$gender = $_POST['Gender'];
$age = $_POST['idage'];
$designation = $_POST['designation'];
$postcode = $_POST['idcode'];
$experience = $_POST['idexperiance'];
$query = "INSERT INTO saklain VALUES ('','$cntrycode','$phnno','$name','$pass','$gender','$age','$designation','$postcode')";
$data = mysqli_query($conn,$query);
if($data){

}else{
    echo "<font color='red'>didnot connect try again";
    header("refresh: 1; url=signup.php");
}
?>
<!DOCTYPE html>
    <head>
        <title class="preprofile">Sign Up</title>
        <link rel="stylesheet" href="css\index.css">
        <script src="js\index.js">
        </script>
        <meta name="author" content="Saklain Mustak">
    </head>

    <body>
        <header style="width:auto; height:100px;margin: 0px auto; background-color:green;border: solid thin;">
            <div style="width:150px;height: 100;float: left;background-color: white;">
                <a href="manymoni.com" target="_blank">
                    <img src="img\logo.png" title="ManyMoni" class="logo">
                </a>
            </div>
            <div style="width:fit;height: 100px;margin-left: 150px;">
                <div style="text-align: center; color: white; height: 90px;">
                    <marquee behavior="" direction="left">
                        <h1>For people know about you , your some additional information </h1>
                    </marquee>
                </div>
            </div>
        </header>
       
        <div class="hero">
            <div class="form" style="font-family:arial black;">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="phnw" value="<?php echo $phnno; ?>">
                    <input class="photou" type="file" value="" title="upload your profile photo" name="imgi" accept="image/*">
                   <br><br>Experiance<input type="" name="idexperiance" placeholder="in year" value="" pattern="[0-9]{1,2,3}" size="2px" maxlength="2">Year
                    <br><br> Date of birth<input type="date" name="date" value="">
                    <br><br> Adress<textarea  placeholder="Write you adress" value="" name="idadress" rows="3" cols="50"></textarea>
                    <br><br>Email<input type="email" placeholder="if you have email/ optional" value="" name="email" title="not compolsary">
                    <br><br><input class="ssbtn" name="submited" type="submit" title="Submit you form" value="SUBMIT">
                </form>
                <?php 
                if(isset($_POST['submited'])){  
                    include("connection.php");
                    $phn = $_POST['phnw'];
                    $exprnc = $_POST['idexperiance'];
                    $dob = $_POST['date'];
                    $addrs = $_POST['idadress'];
                    $email =$_POST['email'];
                    $filename = $_FILES["imgi"]["name"];
                    if($filename==null){
                        $tempname = $_FILES["imgi"]["tmp_name"];
                        $folder = "profile/".$filename;
                        move_uploaded_file($tempname,$folder);
                    }else{
                    $tempname = $_FILES["imgi"]["tmp_name"];
                    $folder = "profile/".time().$phn.$filename;
                    move_uploaded_file($tempname,$folder);
                    }
                    $queryw = "INSERT INTO mustak VALUES ('','$phn','$folder','$exprnc','$dob','$addrs','$email')";
                    $pdata = mysqli_query($conn,$queryw);

                    if($pdata){
                        $_SESSION['userno']=$phn;
                        header('location:mainpage.php');
                    }else{
                        echo "<font color='red'>please re-enter your details";
                    }
                    }
                    ?>
            </div>
        </div>
 </body>

</html>