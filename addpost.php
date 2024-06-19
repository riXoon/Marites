<?php

//addpost.php
session_start();

$connect = new PDO('mysql:host=localhost;dbname=user_db', 'root', '');

$error = '';
$post_name = ''; 
$post_content = '';

if(empty($_POST["post_content"]))
{
 $error .= '<p class="text-danger">Content is required</p>';
}
else
{
 $post_content = $_POST["post_content"];
}

if($error == '')
{

 $query = "
 INSERT INTO tbl_post
 (parent_post_id, post, post_sender_name) 
 VALUES (:parent_post_id, :post, :post_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
    ':parent_post_id' => $_POST["post_id"],
    ':post'    => $post_content,
    ':post_sender_name' => $_SESSION['USER_NAME']
  )
 );
 $error = '<label class="text-success">Post Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
