<?php 



if(isset($_POST['usersearch']))
$usersearch = $_POST['usersearch'];

try {
    require_once "database/db.php";

    if (!empty($usersearch)){
        $query = "SELECT * FROM tbl_post WHERE post_sender_name LIKE ?";
        
        $statement = $conn->prepare($query);
        $usersearchParam = "%$usersearch%";
        $statement->bind_param("s", $usersearchParam); 
        $statement->execute();

        $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
        $result = []; 
    }
    
    $conn->close();

} catch (mysqli_sql_exception $e) {
    die ("Query Failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (empty($result)){
        echo "<p>No Result Found</p>";
    } else {
        foreach ($result as $row){
            echo     '  <div class="panel panel-default" id="newpost">
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
            </div>' ;
        }
    }
    ?>
</body>
</html>