<?php
session_start();
//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=user_db', 'root', '');

$username = '';
$query = "
SELECT * FROM tbl_comment 
WHERE parent_post_id = ".$_POST['post_id']."
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel-2 panel-default" id="newcom">
  <div class="panel-heading-2">  <img src="img/icon-23.svg" alt="" class="icon-8">  <b>'.$row["comment_sender_name"].'</b>  <i>'.$row["date"].'</i></div>
  <div class="panel-body-2">'.$row["comment"].'</div>
  <div class="panel-footer-2"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'" ">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div id="newcom1">
   <div class="panel-3 panel-default"  style="margin-left:'.$marginleft.'px">
    <div class="panel-heading"> <img src="img/icon-23.svg" alt="" class="icon-8">  <b>'.$row["comment_sender_name"].'</b> <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    
    <div class="panel-footer" ><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'" >Reply</button></div>
   </div>
   </div>
   
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}





?>

     <!--    <script>
       

       function myFunction() {
        var x = document.getElementById("newpost1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        }
        </script> -->