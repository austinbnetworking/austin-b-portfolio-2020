<?php 

    $userName = 'root';

    $password = '';

    $serverName = 'localhost';

    $databaseName = 'wdv341';

    try {

        $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $conn -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 

        //echo "Connected to the DB successfully!";

    } catch(PDOException $e) {

        echo "Problems...";
        
        error_log($e->getMessage());
        error_log( var_dump(debug_backtrace()) );

    }

?>

