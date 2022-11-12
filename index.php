<?php
    session_start();

    if(!($_SESSION['logado'] == 'sim')){
        header("dirname(__FILE__)/login.php");
    }
    else{
        header("Location: dirname(__FILE__)/main/main.php");
    }