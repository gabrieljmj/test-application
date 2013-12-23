<?php
    namespace Application\Entity;
    
    use Application\Entity\User;
    
    class UserTests extends \PHPUnit_Framework_TestCase{
        public function assertPreConditions(){
            $this->assertTrue(
                class_exists( 'Application\Entity\User' ),
                'Class not found: "Application\Entity\User"'
            );
        }
        
        /*
         * @exceptedException \InvalidArgumentException
        */
        public function testSetterForName(){
            $this->assertTrue( method_exists( new User, 'setName' ), 'Method not found: "setName"' );
            
            $name = 'Gabriel';
            $instance = new User;
            $setName = $instance->setName( $name );
        
            $this->assertEquals( $setName, $instance, 'Method "setName" must return an instance od User' );
            $this->assertAttributeEquals( $name, 'name', $instance, 'Attribute was not correctly set' );
        }
    }