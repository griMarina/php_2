<?php

trait TestTrait 
{
    private static $instance;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton;
        }
        return self::$instance;
    }
}

class Singleton
{
    use TestTrait;

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}
}