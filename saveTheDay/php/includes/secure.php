<?php

    require_once('FileMaker.php');

    session_start();
    if( !isset($_SESSION['account']) ){
        header("Location: login.php?error=".urlencode("You must be logged in to view this page."));
        exit;
    }

    //If the user is authenticated, create the fm object for use in your scripts.
    $fm = new FileMaker();
    $fm->setProperty('database', 'OnTrack');
    $fm->setProperty('username', $_SESSION['account']['username']);
    $fm->setProperty('password', $_SESSION['account']['password']);

?>
