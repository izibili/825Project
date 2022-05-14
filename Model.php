<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08-Feb-22
 * Time: 2:56 PM
 */

namespace Api;


abstract class Model
{
    private $db;

    public function __construct()
    {
        $this->db = App::db();
    }

}