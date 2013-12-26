<?php
    namespace Application\Persistence;
    
    use Application\Entity\User;
    use Application\Persistence\Users;
    use Doctrine\ORM\Tools\Setup;
    use Application\Persistence\EntityManager\EntityManagerCreator;
    
    class UsersPersistenceTests extends \PHPUnit_Framework_TestCase{
        private $dbParams;
        private $config;
        
        public function assertPreConditions(){
            $this->assertTrue(
                class_exists( 'Application\Persistence\Users' ),
                'Class not found: "Application\Persistence\Users"'
            );
        }
        
        public function setUp(){
            $entities = array( 'src/', 'tests/' );
            $isDevMode = true;
             
            $this->dbParams = array(
                'driver'   => 'pdo_mysql',
                'user'     => 'root',
                'password' => '',
                'dbname'   => 'test_application',
            );
        
            $this->config = Setup::createAnnotationMetadataConfiguration( $entities, $isDevMode );
        }
        
        public function testInsertUser(){
            $userEntity = new User;
            $userEntity->setName( 'Gabriel' );
            $userEntity->setEmail( 'gamjj74@hotmail.com' );

            $persistence = new Users( new EntityManagerCreator( $this->dbParams, $this->config ) );
            
            $this->assertTrue( is_int( $persistence->save( $userEntity ) ) );
        }
    }