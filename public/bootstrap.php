<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'APP_ROOT', realpath( __DIR__ . DS . '..' ) );
    
    $composer_autoload = APP_ROOT . DS . 'vendor' . DS . 'autoload.php';

    if( !file_exists( $composer_autoload ) ){
        die( 'Install composer' );
    }

    require_once $composer_autoload;
    
    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;
     
    $entities = array( 'src/', 'tests/' );
    $isDevMode = true;
     
    $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => '',
        'dbname'   => 'test_application',
    );

    $config = Setup::createAnnotationMetadataConfiguration( $entities, $isDevMode );
    $entityManager = EntityManager::create( $dbParams, $config );