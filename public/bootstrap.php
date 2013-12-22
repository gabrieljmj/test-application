<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'APP_ROOT', realpath( __DIR__ . DS . '..' ) );
    
    $composer_autoload = APP_ROOT . DS . 'vendor' . DS . 'autoload.php';

    if( !file_exists( $composer_autoload ) ){
        die( 'Install composer' );
    }

    require $composer_autoload;