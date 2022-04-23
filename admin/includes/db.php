<?php

require_once('config.php');
class Gallery_Databse
{
    public $connect;

    function __construct()
    {
        $this->startConnection();
    }

    /**
     * Start database connection
     */
    public function startConnection()
    {
        $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            die('Database conncetion failed' . mysqli_connect_error());
        }
    }
    /**
     * run query function
     */
    public function runQuery($query)
    {
        $output = mysqli_query($this->connect, $query);

        return $output;
    }


    /**
     *Confirm query output 
     */

    private function queryConfirm($output)
    {
        if (!$output) {
            die('Query Failed');
        }
    }

    /**
     * Escape string before db query
     */

    public function escapeString($string)
    {
        return mysqli_real_escape_string($this->connect, $string);
    }
}

$gallery_database = new Gallery_Databse();
