<!DOCTYPE html>
<html lang="fr">

<head>
 <title>Create Todo list</title>
</head>

<body>
<!--
>> old : https://blog.devcenter.co/easy-way-to-php-todolist-app-crud-e1284265bb27 
>> mieux : https://phptherightway.com/#databases
-->

    <h1>Create Todo List</h1>

    <form method="post" action="create.php">
        <p>Todo title: </p>
        <input name="todoTitle" type="text">
        <p>Todo description: </p>
        <input name="todoDescription" type="text">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>



<h2>
 Next on my agenda
</h2>

<?php 
    require_once("db_connect.php");

    $db = db();
    $query = "SELECT id, todoTitle, todoDescription, date FROM todo";
    $result = $db->query($query, PDO::FETCH_ASSOC);

var_dump($result);


    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

    }
    } else {
    echo "0 results";
    }
    $conn->close();

 ?>


</body>
</html>
