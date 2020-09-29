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

    db();
    global $link;
    $query = "SELECT id, todoTitle, todoDescription, date FROM todo";
    $result = mysqli_query($link, $query);
    //check if there’s any data inside the table
    if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $title = $row['todoTitle'];
    $date = $row['date'];?><ul>
    <li><a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a></li> <?php echo "[[ $date ]]";?>
    </ul>
    <?php
    }
    }?>
</body>
</html>
