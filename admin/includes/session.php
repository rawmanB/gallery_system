<?php

/**
 * Session Class
 */

class Session
{
    private $signed_in = false;
    public $user_id;

    /**
     * Constructer function to initiate session
     */
    function __construct()
    {
        session_start();
        $this->checkLogin();
    }

    /**
     * Getter function to get the signed in status of the user
     */
    public function is_signed_in()
    {
        return $this->signed_in;
    }

    /**
     * 
     *Login
     */

    public function login($user)
    {
        if ($user) {
            $this->user_id = $_SESSION['user_id'] = $user->user_id;
            $this->signed_in = true;
        }
    }

    /**
     * logout
     */

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;
    }


    /**
     * check login status by checking session and set properties value
     */

    private function checkLogin()
    {
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($this->user_id);
            $this->signed_in = false;
        }
    }
}

$session = new Session();
