<?php

/**
 * User class
 */

class User
{
    public function findUsers()
    {
        global $gallery_database;

        $result = $gallery_database->runQuery("SELECT * FROM users");
        return $result;
    }
}
