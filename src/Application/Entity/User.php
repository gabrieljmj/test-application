<?php
    namespace Application\Entity;

    /**
     * @User
     * @Entity
     * @Table(name="users")
    */
    class User{
        /**
         * @Id
         * @Column(type="integer", name="id")
         * @GeneratedValue(strategy="AUTO")
        */
        protected $id;
        
        /**
         * @Name
         * @Column(type="string", name="name")
        */
        protected $name;
        
        /**
         * @Email
         * @Column(type="string", name="email")
        */
        protected $email;

        public function setId( $id ){
            if( !is_int( $id ) ){
                throw new \InvalidArgumentException( '"id" attribute must be an integer' );
            }
            $this->id = $id;
            return $this;
        }

        public function setName( $name ){
            if( !is_string( $name ) ){
                throw new \InvalidArgumentException( '"name" attribute must be a string' );
            }
            $this->name = $name;
            return $this;
        }
        
        public function setEmail( $email ){
            if( !is_string( $email ) ){
                throw new \InvalidArgumentException( '"email" attribute must be a string' );
            }
            $this->email = $email;
            return $this;
        }
    }