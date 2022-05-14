<?php

namespace Api;

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08-Feb-22
 * Time: 3:34 AM
 */
class Connection
{
    private $pdo;

    public function __construct(array $config)
    {
        try{
            $this->pdo = new \PDO(
                $config['driver'].':host='. $config['host'].
                ';dbname='. $config['db_name'],
                $config['db_username'],
                $config['db_pwd'], [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC]);
        } catch (\PDOException $ex){
            throw new \PDOException($ex->getMessage(), (int)$ex->getCode());
        }
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return call_user_func_array([$this->pdo, $name], $arguments);
    }

}