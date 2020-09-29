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
        db();
        global $link;
        
        $query = "INSERT INTO todo(todoTitle, todoDescription, date) VALUES ('$title', '$description', now() )";
        $insertTodo = mysqli_query($link, $query);
        
        if($insertTodo){
            echo "successfully";
        }
        else{
            echo mysqli_error($link);
        }
        mysqli_close($link); 
    }

?>

<a href="index.php">retourner à la liste</a>