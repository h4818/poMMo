<?php

require 'classes/Pommo_Setup.php';

class Pommo_Setup_Test extends PHPUnit_Framework_Testcase
{
    private $_instance;

    public function setUp()
    {
        $this->_instance = new Pommo_Setup();
    }

    public function testIfBouncesAddressNotGivenReturnErrorMessage()
    {
        $this->_instance->saveBouncesForm(array());

        $this->assertTrue(
            isset($this->_instance->error['message']['bounces_address'])
        );
    }
}
