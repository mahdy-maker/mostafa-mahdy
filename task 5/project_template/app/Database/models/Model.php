<?php

namespace app\Database\models;

use app\Database\config\connection;


class Model extends connection
{
    const table = '';
    public static function all()
    {
        echo $query = "SELECT * FROM " . static::table;
    }
    public function find(int $id)
    {
        $query = "SELECT * FROM " . static::table . "WHERE id = {$id}";
    }
}
