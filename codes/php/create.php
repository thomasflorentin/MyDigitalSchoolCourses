<?php

    if(isset($_POST['submit'])) 
    {
        $title = $_POST['todoTitle'];
        $description = $_POST['todoDescription'];
        echo "you filled title " . $title . "<br> and description " . $description;

    }

    require_once("db_connect.php");

    if( isset($_POST['submit']) ) 
    {
        // Récupérer les données transmises en POST
        $title = $_POST['todoTitle'];
        $description = $_POST['todoDescription'];
        
        // Se connecter à la database
        $db = db();
        
        // Préparer la requête
        $sql = "INSERT INTO todo(todoTitle, todoDescription, date) VALUES ('$title', '$description', now() )";

        // Exéctuer la requête
        $db->exec($sql);

        // Afficher un message
        echo "New record created successfully";
        
        // Fermer la connexion
        $conn = null;
    }

?>

<a href="index.php">retourner à la liste</a>