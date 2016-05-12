<?php
require_once 'Log.php';

Class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    public static function attempt($username, $password)
    {
        
        $log = new Log();

        if ($username == 'guest' && (password_verify($password, self::$password))){
            $_SESSION['logged_in_user'] = $username;
            $log->logInfo("User $username logged in.");
            return true;
        }   else {
                $log->logError("User $username failed to log in!");
                return false;
            };
        
    }

    public static function check()
    {
        return (isset($_SESSION['logged_in_user']));
    }

    public static function user()
    {
        return $_SESSION['logged_in_user'];
    }

    public static function logout()
    {
        // clear $_SESSION array
        session_unset();

        // delete session data on the server and send the client a new cookie
        session_regenerate_id(true);
    }
};