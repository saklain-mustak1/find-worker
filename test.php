<?php
error_reporting(0);
include("connection.php");
$rquery = "SELECT * FROM saklain s INNER JOIN mustak m ON s.phone = m.phone";
$rdata = mysqli_query($conn, $rquery);
$total = mysqli_num_rows($rdata);           
          

if($total != 0){
    while($rresult = mysqli_fetch_assoc($rdata))
    {
        "UPDATE saklain, mustak SET saklain.name='hatika batcha', mustak.experience='4', saklain.age=19, mustak.adress='nanarghr' WHERE saklain.phone=7896565153 AND saklain.phone=mustak.phone";
        echo $rresult['phone'];
        echo $rresult['image']."<br/>";
    }
}else{
    echo "result not found";
}
//this is for inserting comment
//INSERT INTO `comment` (`cid`, `comment-from`, `comment-to`, `comments`, `time`) VALUES (NULL, '1234567891', '7896565153', 'v6yuhythbfgbfsgysthshfssbb', current_timestamp());
?>
<?php if($presult['image']=='profile/'){ echo 'img/add-user.png';}else{echo $presult['image'];} ?>