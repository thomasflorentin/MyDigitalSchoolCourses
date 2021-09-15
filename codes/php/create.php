<?php
    if(isset($_POST['submit'])) {
        $title = $_POST['todoTitle'];
        $description = $_POST['todoDescription'];
        echo "you filled title " . $title . "<br> and description " . $description;
    }

    require_once("db_connect.php");

    if(isset($_POST['submit'])) {

        $title = $_POST['todoTitle'];
        $description = $_POST['todoDescription'];
        
        //connect to database
        $db = db();
        
        $sql = "INSERT INTO todo(todoTitle, todoDescription, date) VALUES ('$title', '$description', now() )";

        $db->exec($sql);
        echo "New record created successfully";
        

        $conn = null;
    }

?>

<a href="index.php">retourner à la liste</a>