<!DOCTYPE HTML>

<?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
        header("Location: index.php");
    }
?>


<html>
    <body>
        <h2>Oi cunt!</h2>
    </body>
</html>

