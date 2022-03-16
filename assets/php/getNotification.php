<?php 

    include "db.php";
    //$conn->query('SET NAMES "utf8";');
    $sql = '
        
        SELECT * FROM notifications where id_notification = 1
    ';

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo '
    {"id_notification":"1","header":"'.$row["header"].'","content":"'.$row["content"].'","date_added":"'.$row["date_added"].'","enabled":"'.$row["enabled"].'"}
    ';    
?>