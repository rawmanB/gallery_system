<?php

require_once('config.php');
class Gallery_Databse
{
    public $connect;

    function __construct()
    {
        $this->startConnection();
    }


    public function startConnection()
    {
        $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            die('Database conncetion failed' . mysqli_connect_error());
        }
    }
}

$gallery_database = new Gallery_Databse();
