<?php
namespace blogtest\model;

class Manager
    {
   protected function dbConnect()
   {
        $db = 
            new \PDO('mysql:host=localhost;dbname=blogtest;charset=utf8', 'root', '');
        return $db;
   }
}
    