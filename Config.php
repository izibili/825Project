<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08-Feb-22
 * Time: 1:51 PM
 */

namespace Api;


class Config
{
    protected $config = [];

    public function __construct(array $env)
    {
        $this->config = [
            'db'=>[
                    'driver'        => $env["DB_DRIVER"] ?? 'mysql',
                    'host'          => $env["DB_HOST"],
                    'db_name'       => $env["DB_NAME"],
                    'db_username'   => $env["DB_USERNAME"],
                    'db_pwd'        => $env["DB_PWD"]
            ]
        ];
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->config[$name] ?? null;
    }
}
