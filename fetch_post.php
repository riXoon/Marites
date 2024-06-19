<?php
session_start();
//fetch_post.php

$connect = new PDO('mysql:host=localhost;dbname=user_db', 'root', '');

$username = '';

$query = "
SELECT * FROM tbl_post 
WHERE parent_post_id = '0'  
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
    <div class="react-container">
          <div class="quantity-counter">
        <button id="counter-increment" class="increment"><img src="img/icon-16.svg" alt=""></button>
        <input id="counter-value" class="value" type="number" value="0">
        <button id="counter-decrement" class="decrement"><img src="img/icon-17.svg" alt=""></button>

    </div>

      </div>
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

        <script>
       

       var counterValue = document.querySelector("#counter-value");
      var counterIncrement = document.querySelector("#counter-increment");
      var counterDecrement = document.querySelector("#counter-decrement");
      var count = 0;

      this.counterIncrement.addEventListener('click', () => {
        this.count++
        this.counterValue.setAttribute("value", count);
      });

        
        </script>