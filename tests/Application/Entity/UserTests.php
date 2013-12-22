<?php
    namespace Application\Entity;

    class UserTests extends \PHPUnit_Framework_TestCase{
        public function assertPreConditions(){
            $userEntityClass = 'Application\Entity\User';
            $this->assertTrue(
                class_exists( $userEntityClass ), 'Class not found: ' . $userEntityClass
            );
        }

        /*
         * @expectedException \InvalidArgumentException
         * @expectedExceptionMessage 'aname' must be a string
        */
        public function testShouldExistsSetterForName(){
            $instance = new User;
            $return = $instance->setName( 1 );
            
            $this->assertEquals(
                $instance,
                $return,
                'Return must be an instance of User'
            );
            
            $this->assertAttributeEquals(
                'User\'s name',
                'name',
                $instance,
                'Attribute '
            );
        }
    }