<?php 
    session_start();
    include 'db.php';

    $sql = 'SELECT * FROM users WHERE email="' . $_POST["email"] . '"';
    $result = $conn -> query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if(password_verify($_POST["password"], $row["password"])){
            $_SESSION["id_user"] = $row["id_users"];
            //echo "prihlasen";
            header("Location: http://localhost/sberna-vrabec/modal-set.php?login=success");
        } else {
            header("Location: http://localhost/sberna-vrabec/admin.php?error=badpassword");
        }
    } else{
        header("Location: http://localhost/sberna-vrabec/admin.php?error=bademail");
    }
?>