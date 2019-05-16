<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new App\Models\User;

        $user = setFirstName('Adam');

        $this->assertEquals($user->getFirstname(), 'Adam');
    }
}