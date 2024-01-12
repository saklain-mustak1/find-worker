<!DOCTYPE html>
<?php
    session_start();
    include("connection.php");
    error_reporting(0);
    $cmntto = $_GET['commentall'];
    $wcquery ="SELECT * FROM saklain WHERE phone='$cmntto'";
    $wcdata = mysqli_query($conn, $wcquery);
    $wccool = mysqli_fetch_assoc($wcdata);

    $wcqueryp ="SELECT * FROM mustak WHERE phone='$cmntto'";
    $wcdatap = mysqli_query($conn, $wcqueryp);
    $wccoolp = mysqli_fetch_assoc($wcdatap);

    $userprofile = $_SESSION['userno'];
    if($userprofile==true){
    }
    else{
        header('location:mainpage.php');
    }
?>

<head>
    <title>
       <?php echo "Comment for ".$wccool['name'];?>
    </title>
    <link rel="stylesheet" href="css/comment.css">
    <meta charset="UTF-8">
    <meta name="author" content="Saklain Mustak">
    <meta name="description" content="it is an comment page for mannymoni.com">
</head>

<body style="background: linear-gradient(to right, green, yellow);">
    <div>
        <div>
            <div style="position: absolute;">
                <img src="<?php if($wccoolp['image']=='profile/'){ echo 'img/add-user.png';}else{echo $wccoolp['image'];} ?>" height="68px" width="75px">
            </div>
            <form method="POST" style="margin-left: 75px;">
                <input type="hidden" name="cmntrto" value="<?php echo $cmntto; ?>">
                <textarea name="cmnt" rows="3" cols="20" placeholder=" Writte Comment for <?php echo $wccool['name']; ?>" required></textarea>
                <input type="submit" name="submit_cmnt" id="cmnt_btn" value="COMMENT" formaction="">
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST['submit_cmnt'])){
    include("connection.php");
    $commenttono = $_POST['cmntrto'];
    $commentwr = $_POST['cmnt'];
    $cmntquery = "INSERT INTO comment VALUES ('', '$userprofile', '$commenttono', '$commentwr', current_timestamp())";
    $cmntdata = mysqli_query($conn, $cmntquery);
    if($cmntdata){
        header("location:comment.php?commentall=$commenttono");
    }
    }
    ?>
    <?php
    include("connection.php");
    $cmntdata = "SELECT * FROM comment c LEFT JOIN mustak m ON c.commentfrom = m.phone INNER JOIN saklain s ON m.phone = s.phone WHERE commentto= $cmntto";
    $cmntsql = mysqli_query($conn, $cmntdata);
    $cmntall = mysqli_num_rows($cmntsql);
        if($cmntall != 0)
        {
        while($cmntare = mysqli_fetch_assoc($cmntsql)){
          echo "<div class='people_cmnt'>
                <div class='cmnt_name'><i><b>$cmntare[name] </b></i>$cmntare[time]</div>
                <div class='cmnt_photos'>
                    <div class='cmnt_photo'><img src='$cmntare[image]' style='height: 40px; width: 40px;'> </div>
                    <div class='cmnt_post'> $cmntare[comments] </div>
                </div>
            </div>";}
         }else{
             echo " NO COMMENT HERE";
         } ?>
</body>
</html>