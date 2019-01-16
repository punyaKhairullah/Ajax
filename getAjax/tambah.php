<?php

    if (isset($_POST['userId'],$_POST['title'],$_POST['completed'])) {
        echo "Your user ID is " . $_POST['userId'];echo "<br>";
        echo "Your title is " . $_POST['title'];echo "<br>";
        echo "Your completed is " . $_POST['completed'];echo "<br>";
        // print_r($_POST);
    }

?>