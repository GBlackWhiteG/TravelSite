<?php

namespace frm;

class App
{
    protected static ServiceContainer $container;

    public static function setContainer($container): void
    {
        static::$container = $container;
    }

    public static function getContainer(): ServiceContainer
    {
        return static::$container;
    }

    public static function get($service)
    {
        return static::getContainer()->getService($service);
    }

}