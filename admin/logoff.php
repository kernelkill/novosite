<?php

session_start();

    require ('../config/config.php');

    unset($_SESSION["PCML"]);
        echo "<script type='text/javascript'> location.href='".URL_ADMIN."login.php"."' </script>";
