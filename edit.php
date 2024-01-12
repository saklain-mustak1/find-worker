<!DOCTYPE html>
<html>
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
    <head>
        <title>edit profile of <?php echo $result['name']; ?></title>
        <link rel="stylesheet" href="css\index.css">
        <meta name="author" content="Saklain Mustak">
        <meta name="description" content="it is an sign up page for mannymoni.com">
    </head>
    <body>
        <header class="logobar">
            <div  style=" width: 80px; position:absolute; margin:4px; ">
            <a href="mainpage.php"><button type="button" value="HOME"> HOME </button></a>
            </div>
            <div style="text-align: right;position:reletive; ">
                <a href="logout.php">
                <button type="button" formmethod="POST">LOG OUT</button></a>
            </div>
            <div style="width:fit;height: 130px;">
                <div style="text-align: center;height: 90px; ">
                    <div class="editphoto" style="background-image:url(<?php if($presult['image']=='profile/'){ echo 'img/add-user.png';}else{echo $presult['image'];} ?>); background-size:150px 125px; background-repeat: no-repeat;">
                        <input style="height: 125px; width:150px;" type="file" value="" title="upload your profile photo" name="eimgi" accept="eimage/*" form="editform">
                    </div>    
                </div>
                <div>
                    <?php 
                    echo" <a href='uprofile.php'>
                        <button type='button' style='margin: 3px;' formmethod='POST'> BACK </button></a>" ?>
                </div>
            </div>
        </header> 
        <div><br>
            <div style="margin-left: 20px;">
                <form id="editform" action="" method="POST">
                    Phone Number <input type="tel" value="<?php echo $result['cntrycode']; ?>" size="1px" readonly><input type="text" value="<?php echo $result['phone']; ?>" readonly>
                    <br><br>
                    Name <input type="text" value="<?php echo $result['name']; ?>" placeholder="Enter your full Name" name="upname" pattern="^[a-z A-Z]+$" required>
                    <br><br>
                    Designation:<input list="designa" type="text" value="<?php echo $result['designation']; ?>" name="updesignation" placeholder="Type your Designation" required>
                        <datalist id="designa" name="updesignation">
                            <option value="Teacher">Teacher</option>
                            <option value="Housebuilder">Housebuilder</option>
                            <option value="Sweeper">Sweeper</option>
                            <option value="Electrician">Electrician</option>
                            <option value="Student">
                        </datalist><br><br>
                    Date of birth<input type="date" name="updob" value="<?php echo $presult['dob']; ?>"><br><br>
                    Experiance<input type="" name="upexperiance" placeholder="in year" value="<?php echo $presult['experience']; ?>" pattern="[0-9]{1,2,3}" maxlength="3" size="2px">Year <br><br>
                    POST CODE<input  value="<?php echo $result['postcode']; ?>" type="text" name="upcode" placeholder=" enter your local postal code" size="10px" pattern="[0-9]{6}" maxlength="6" required><br><br>
                    Adress<textarea  placeholder="fill your adress" value="<?php echo $presult['adress']; ?>" name="upadress" rows="3" cols="50"><?php echo $presult['adress']; ?></textarea><br><br>
                    Gender: <br>
                    <span class="gndr">
                        Male<input type="radio" title="your sex" value="MALE" name="Gender"required <?php if($result['gender'] == 'MALE'){ echo "checked";} ?>>  
                        Female<input type="radio" title="your sex" value="FEMALE" name="Gender"required <?php if($result['gender'] == 'FEMALE'){ echo "checked";} ?>>  
                        Other<input type="radio" title="your sex" value="OTHER" name="Gender"required <?php if($result['gender'] == 'OTHER'){ echo "checked";} ?>> 
                    </span><br><br>
                    Email<input type="email" placeholder="if you have email/ optional" value="<?php echo $presult['email']; ?>" name="upemail" title="not compolsary"><br><br>
                    Age<input type="datetime" value="<?php echo $result['age']; ?>" placeholder="age" name="upage" size="2px" pattern="[0-9]{1,2,3}" maxlength="3" required><br><br>
                    <input class="ssbtn" name="updated" type="submit" title="update you form" value="UPDATE">
                </form>
            </div>
            <?php
            error_reporting(0);
            include("connection.php");
            if($_POST['updated']){
                $name = $_POST['upname'];
                $gendr = $_POST['Gender'];
                $age = $_POST['upage'];
                $designation = $_POST['updesignation'];
                $postcode = $_POST['upcode'];
                $experience = $_POST['upexperiance'];
                $dob = $_POST['updob'];
                $adress = $_POST['upadress'];
                $email = $_POST['upemail'];
                $filename = $_FILES["eimgi"]["name"];
                if($filename==null){
                    $folder = $presult['image'];
                    move_uploaded_file($tempname,$folder);
                }else{
                $tempname = $_FILES["eimgi"]["tmp_name"];
                $folder = "profile/".time().$userprofile.$filename;
                move_uploaded_file($tempname,$folder);
                }
                $updquery="UPDATE saklain, mustak SET saklain.name='$name',mustak.dob='$dob', mustak.image='$folder', mustak.experience='$experience',mustak.adress='$adress', saklain.gender ='$gendr',mustak.email='$email',saklain.age='$age', saklain.designation='$designation',saklain.postcode='$postcode' WHERE saklain.phone=$userprofile AND saklain.phone=mustak.phone";
                $updateis = mysqli_query($conn, $updquery);
                    if($updateis){
                        echo "<font color='green'>Update successfully, refresh to see your change";
                    }
            }else{
                echo "<font color='blue'>Click on Update button to save your edit profile";
            }
            ?>
        </div>
    </body>

</html>