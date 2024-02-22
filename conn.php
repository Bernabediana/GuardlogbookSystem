<?php 
try {
    $host = "localhost";
    $dbname = "id21909923_logbook";
    $user = "id21909923_logbook";
    $password = "2@Logbook";
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn){
    //     echo 'Connected to DB';
    // }
} catch (PDOException $err) {
    echo $err->getMessage();
}

?>