<?php
include 'db.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "user_db";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "select * from user_table where username =? and password =?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);

    if ( $stmt->execute() ) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedIn'] = true;
        $_SESSION['USER_ID'] = $row['id'];
        $_SESSION['USER_NAME'] = $row['username'];
        
        header("Location: ../post.php");
        exit();
    } else {
        header("Location: ../marites.php?invalidCredentials=true");
    }
    mysqli_close($conn);
} else {
    
    header("Location: ../marites.php");
    exit();
}
}
?>