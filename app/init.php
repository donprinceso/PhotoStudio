<?php

    require_once 'config/config.php';
    require_once 'database/Database.php';
    require_once 'helper/functions.php';
    require_once 'helper/Redirect.php';
    require_once 'helper/session.php';
    // require_once 'core/Controller.php';
    // require_once 'core/Router.php';
    spl_autoload_register(function ($className){
        require_once 'core/'.$className.'.php';
    });