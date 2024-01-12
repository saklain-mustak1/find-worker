<?php
session_start();
error_reporting(0);
include("connection.php");
$userprofile = $_SESSION['userno'];
if($userprofile==true){
}
else{
    header('location:mainpage.php');
}
$query ="SELECT * FROM saklain WHERE phone='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

$pquery ="SELECT * FROM mustak WHERE phone='$userprofile'";
$pdata = mysqli_query($conn, $pquery);
$presult = mysqli_fetch_assoc($pdata);
?>
<!DOCTYPE html>

<head>
    <title><?php echo $result['name'];?> Profile</title>
    <link rel="stylesheet" href="css\index.css">
    <script src="js\index.js">
    </script>
    <meta charset="UTF-8">
    <meta name="author" content="Saklain Mustak">
    <meta name="description" content="it is an user profile page mannymoni.com">
</head>

<body  style="background: linear-gradient(to right, green, yellow);">
    <header class="logobar">
        <div  style=" width: 80px; position:absolute; ">
        <a href="mainpage.php"><button type="button" value="HOME"> HOME </button></a>
        </div>
        <div style="text-align: right;position:reletive; ">
            <a href="logout.php">
            <button type="button" formmethod="POST">LOG OUT</button></a>
        </div>
        <div style="width:fit;height: 100px;">
            <div style="text-align: center;height: 90px;  ">
                <a href="<?php if($presult['image']=='profile/'){ echo 'edit.php';}else{echo $presult['image'];} ?>" >
                    <img src="<?php if($presult['image']=='profile/'){ echo 'img/add-user.png';}else{echo $presult['image'];} ?>" title="<?php if($presult['image']=='profile/'){ echo 'please upload your image';}else{echo "hey ".$result['name']." your image";} ?>" class="logo" >
                </a>
            </div>
            <div>
                <a href="loutup.php"><button type="button">SIGN UP</button></a>
            </div>
        </div>
        <div style="text-align: right;position:reletive; ">
        <?php 
          echo" <a href='edit.php?$result[name]'>
            <button type='button' style='margin: 3px;' formmethod='POST'> EDIT PROFILE </button></a>" ?>
        </div>
    </header>
    <style>
        li{
            color: darkblue;
        padding: 5px;}
    </style>
        <div style="height:450px; width:auto; background-color:pink">
            <ul><b><i>
            <?php echo  "<li>USER NAME: ".$result['name']."</li><li> PHONE NO: ".$result['phone']."</li>
            <li> DESIGNATION: ".$result['designation']."</li><li> EXPERIENCE: ".$presult['experience']." Year</li>
            <li>DATE OF BIRTH: ".$presult['dob']."</li>
            <li> POST CODE: ".$result['postcode']."</li><li> ADRESS: ".$presult['adress']."</li>
            <li> GENDER: ".$result['gender']."</li><li> EMAIL: ".$presult['email']."</li>";
            ?></i></b></ul>
        </div>
</body>

</html>