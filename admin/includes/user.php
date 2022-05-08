<?php

/**
 * User class
 */

class User
{
    public $user_id;
    public $username;
    public $f_name;
    public $l_name;
    public $password;

    /**
     * get all users
     */
    public static function findUsers()
    {
        return  self::findThisQuery('SELECT * FROM users');
    }



    /**
     * get user by id
     */

    public static function findUserById($user_id)
    {
        $result = self::findThisQuery("SELECT * FROM users WHERE user_id = $user_id LIMIT 1");

        return !empty($result) ? array_shift($result) : false;
    }


    /**
     * Universal query method
     */

    public static function findThisQuery($sql)
    {
        global $gallery_database;

        $result = $gallery_database->runQuery($sql);
        $obj_array = [];

        while ($row = mysqli_fetch_array($result)) {
            $obj_array[] = self::instantObj($row);
        }
        return $obj_array;
    }

    /**
     * verify user after login
     */

    public static function verifyUser($username, $password)
    {

        global $gallery_database;
        $uname = $gallery_database->escapeString($username);
        $pw = $gallery_database->escapeString($password);

        $sql = "SELECT * FROM users WHERE ";
        $sql .= "username = '{$uname}'";
        $sql .= "AND password = '{$pw}'";
        $sql .= "LIMIT 1";

        $result = self::findThisQuery($sql);
        return !empty($result) ? array_shift($result) : false;
    }


    /**
     * instantiation method to add data to properties
     */

    public static function instantObj($user)
    {
        $user_obj = new self;
        foreach ($user as $key => $value) {
            if ($user_obj->hasTheAttribute($key)) {
                $user_obj->$key = $value;
            }
        }

        return $user_obj;
    }

    /**
     * check for attribute
     */

    private function hasTheAttribute($attr)
    {
        $obj_props =  get_object_vars($this);
        return array_key_exists($attr, $obj_props);
    }
}
