<?php
    session_start();
    include 'db.php';
    
    if (isset($_POST['submit'])) {
        $adminUsername = $_POST['username'];
        $adminPassword = $_POST['password'];
        $adminUserQuery = "SELECT * FROM user_table WHERE username = '$adminUsername'";
        $adminUserResult = mysqli_query($conn, $adminUserQuery);

        if (mysqli_num_rows($adminUserResult) > 0) {
            $adminData = mysqli_fetch_assoc($adminUserResult);
            
            echo '<div class="alert alert-warning alert-dismissible slide-in-left fade show" role="alert">
            The username already <strong>exists, </strong>';
        } else {
            $insertAdmin = "INSERT INTO user_table (username, password) VALUES ('$adminUsername', '$adminPassword')";

            if (mysqli_query($conn, $insertAdmin)) {
                echo '<div class="alert alert-success alert-dismissible slide-in-left fade show" role="alert">
                The account is successfully <strong>inserted</strong>.' . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            } else {
                echo "<h3 style='color: red;'>ERROR: Sorry, an error occurred while storing the data.</h3>" . mysqli_error($conn);
            }
        }

    mysqli_close($conn);
}
?>