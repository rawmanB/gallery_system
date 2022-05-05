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
        // $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->connect->errno) {
            die('Database conncetion failed' . $this->connect->connect_errno);
        }
    }


    /**
     * run query function
     */
    public function runQuery($query)
    {
        $output = $this->connect->query($query);
        $this->queryConfirm($output);
        return mysqli_fetch_array($output);
    }


    /**
     *Confirm query output 
     */

    private function queryConfirm($output)
    {
        if (!$output) {
            die('Query Failed' . $this->connect->error);
        }
    }

    /**
     * Escape string before db query
     */

    public function escapeString($string)
    {
        return $this->connect->real_escape_string($string);
    }
}

$gallery_database = new Gallery_Databse();
