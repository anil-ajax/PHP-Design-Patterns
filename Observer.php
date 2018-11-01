<?php

/**
 * Observer design pattern example
 * Refer to Readme for benefits of using Observer pattern
 * @author Anil Kumar (https://github.com/anil-ajax)
 * This code follow PSR standards (https://github.com/anil-ajax/psr-standards)
 */

interface Observer 
{
    function onChanged($sender, $args);
}

interface Observable 
{
    function addObserver($observer);
}

class CustomerList implements Observable 
{
    private $_observers = array();

    public function addCustomer($name) 
    {
        foreach($this->_observers as $obs)
        {
            $obs->onChanged($this, $name);
  	    }
    }

    public function addObserver($observer) 
    {
        $this->_observers []= $observer;
    }
}

class CustomerListLogger implements Observer 
{
    public function onChanged($sender, $args) 
    {
        echo( "'$args' Customer has been added to the list \n" );
    }
}

$ul = new UserList();
$ul->addObserver( new CustomerListLogger() );
$ul->addCustomer( "ANIL" );