<?php

$con= new mysqli("localhost:3306","logic","lrl2002","messenger");
    if ($con->connect_error)
    {
        die("Connection failed: " . $con->connect_error);
    }

?>