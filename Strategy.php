<?php

/**
 * Strategy design pattern example
 * Refer to Readme for benefits of using Strategy pattern
 * @author Anil Kumar (https://github.com/anil-ajax)
 * This code follow PSR standards (https://github.com/anil-ajax/psr-standards)
 */

interface OutputInterface
{
    public function load();
}

class SerializedArrayOutput implements OutputInterface
{
    public function load()
    {
        return serialize($arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load()
    {
        return json_encode($arrayOfData);
    }
}
