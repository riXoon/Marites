<?php
session_start();
//fetch_post.php

$connect = new PDO('mysql:host=localhost;dbname=user_db', 'root', '');

$username = '';

$query = "
SELECT * FROM tbl_post 
WHERE post_id = ".$_POST['post_id']." 
ORDER BY post_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '

    <div class="panel panel-default" id="newpost">
        <div class="panel-heading">  <img src="img/icon-23.svg" alt="" class="icon-8">  <b>m/'.$row["post_sender_name"].'</b>  <i>'.$row["date"].'</i></div>
        <div class="panel-body">'.$row["post"].'</div>
        <div class="panel-footer"> 
        <a href="#demo-modal" class"com-a1"><button class="com-btn1">Comment</button> </a> 
        <a href="comments.php?post_id='.$row["post_id"].'" class"com-a"><button class="com-btn" >Comment</button></a> 
        </div>
    </div>
 ';
 
}
echo $output;

?>