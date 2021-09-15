<?php

    function db() {
        global $link;
        $dbhost = 'sql2.freesqldatabase.com';
        $dbuser = 'sql2392149';
        $dbname = 'sql2392149';
        $dbpass = 'uG2%jB2%';

        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

        try 
        { 
            $db = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8", $dbuser, $dbpass, $options); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to connect to the database: " . $ex->getMessage()); 
        } 

        return $db;
    }

    if(db()){
        echo "wawu !!! I’m connected";
    }

?>