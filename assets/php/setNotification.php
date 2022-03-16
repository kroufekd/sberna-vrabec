<?php 
    include "db.php";

    session_start();

    


    $checked = 0;
    if(isset($_POST["enabled"])){
        $checked = 1;
    } else{
        $checked = 0;
    }

    $sql = "
        UPDATE notifications
        SET
        header = '".$_POST["heading"]."',
        content = '".$_POST["content"]."',
        enabled = '".$checked."'
        WHERE id_notification = 1
    ";
/*
    if(!$conn->query($sql)){
        echo "Error " . $conn->error;
    }
*/
  //echo $sql;
    $result = $conn->query($sql);  
    //echo $result;
    header("Location: http://vykupna-benesovnpl.cz/index.html");


?>