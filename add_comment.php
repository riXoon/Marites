<?php

//add_comment.php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=user_db', 'root', '');

$error = '';
$comment_name = ''; 
$comment_content = '';



if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{

 $query = "
 INSERT INTO tbl_comment
 (parent_comment_id, parent_post_id, comment, comment_sender_name) 
 VALUES (:parent_comment_id, :parent_post_id, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);    
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':parent_post_id' => $_POST["post_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $_SESSION['USER_NAME']
  )
 ); 
 $error = '<label class="text-success">Comment Added</label>';
}


$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
