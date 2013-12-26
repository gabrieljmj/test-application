<?php
    namespace Application\Persistence;
    
    use Application\Persistence\EntityManager\EntityManagerCreator;
    use Application\Entity\User;
    
    class Users{
        private $entityManager;
        
        public function __construct( EntityManagerCreator $entityManager ){
            $this->entityManager = $entityManager->create();
        }
        
        public function save( User $user ){
            $this->entityManager->persist( $user );
            $this->entityManager->flush();
            return $user->id;
        }
    }