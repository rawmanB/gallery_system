<?php

/**
 * User class
 */

class User
{
    public static function findUsers()
    {
        global $gallery_database;

        $result = $gallery_database->runQuery("SELECT * FROM users");
        return $result;
    }

    /**
     * get user by id
     */

    public static function findUserById($user_id)
    {
        global $gallery_database;

        $result = $gallery_database->runQuery("SELECT * FROM users WHERE user_id = $user_id");

        $output = mysqli_fetch_array($result);

        return $output;
    }
}
