<?php
    namespace Application\Entity;
    
    class User{
        private $name;

        public function setName( $name ){
            if( !is_string( $name ) ){
                throw new \InvalidArgumentException( '\'name\' must be a string' );
            }
            $this->name = $name;
            return $this;
        }
    }