<?php

namespace Api;
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08-Feb-22
 * Time: 11:41 AM
 */
class App
{
    private static $connection;

    public function __construct(Config $config)
    {
        static::$connection = new Connection($config->db ?? []);
    }

    public static function db(): Connection{
        return static::$connection;
    }

    public function run(\Slim\App $app){
        $app->run();
    }
}