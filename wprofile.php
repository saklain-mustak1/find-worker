<!DOCTYPE html>
<?php
error_reporting(0);
include("connection.php");
$wprof = $_GET['wno'];
$query ="SELECT * FROM saklain WHERE phone='$wprof'";
$data = mysqli_query($conn, $query);
$cool = mysqli_fetch_assoc($data);

$pquery ="SELECT * FROM mustak WHERE phone='$wprof'";
$pdata = mysqli_query($conn, $pquery);
$pcool = mysqli_fetch_assoc($pdata);
?>

<head>
    <title><?php echo $cool['name'];?> Profile</title>
    <link rel="stylesheet" href="css\index.css">
    <meta charset="UTF-8">
    <meta name="author" content="Saklain Mustak">
    <meta name="description" content="it is an worker profile page mannymoni.com">
</head>

<body  style="background: linear-gradient(to right, green, yellow);">
    <header class="logobar">
        <div  style=" width: 80px; position:absolute; margin:4px; ">
        <a href="mainpage.php"><button type="button" value="HOME"> HOME </button></a>
        </div>
        <div style="width:fit;height: 130px;">
            <div style="text-align: center;height: 90px;  ">
                <a href="<?php if($pcool['image']=='profile/'){}else{echo $pcool['image'];} ?>" >
                    <img src="<?php if($pcool['image']=='profile/'){ echo 'img/add-user.png';}else{echo $pcool['image'];} ?>" title="<?php if($pcool['image']=='profile/'){ echo 'no photo uploaded';}else{echo "photo of ".$cool['name'];} ?>" class="logo" >
                </a>
            </div>
        </div>
    </header> 
    <div class="wdetails">
        <div>
            <style>
                li{
                    color: darkblue;
                padding: 5px;}
            </style>
            <ul><b><i>
            <?php echo  "<li>USER NAME: ".$cool['name']."</li><li> PHONE NO: ".$cool['phone']."</li>
            <li> DESIGNATION: ".$cool['designation']."</li><li> EXPERIENCE: ".$pcool['experience']." Year</li>
            <li>DATE OF BIRTH: ".$pcool['dob']."</li>
            <li> POST CODE: ".$cool['postcode']."</li><li> ADRESS: ".$pcool['adress']."</li>
            <li> GENDER: ".$cool['gender']."</li><li> EMAIL: ".$pcool['email']."</li>";
            ?></i></b></ul> 
        </div>
        <form class="wcmntbtn" action="comment.php">
            <input type="hidden" name="commentall" value="<?php echo $cool['phone'] ?>">
            <input type='submit' value='COMMENT'>
        </form>
    </div>
</body>

</html>