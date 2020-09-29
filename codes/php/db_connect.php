<?php

    function db() {
        global $link;
        $link = mysqli_connect("localhost", "root", "root", "mds_todo_app") or die("couldn’t connect to database");
        return $link;
    }

    if(db()){
        echo "wawu !!! I’m connected";
    }

?>