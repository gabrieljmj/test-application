<?php
    namespace Application\Persistence\EntityManager;
    
    use Doctrine\ORM\EntityManager;

    class EntityManagerCreator{
        public function __construct( array $dbParams, $config ){
            $this->dbParams = $dbParams;
            $this->config = $config;
        }
        
        public function create(){
            $entityManager = EntityManager::create( $this->dbParams, $this->config );
            return $entityManager;
        }
    }