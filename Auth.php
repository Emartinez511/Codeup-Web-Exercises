<?php
require_once 'Log.php';

Class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';



    public static function attempt($username, $password)
    {
        
        if ($username == 'guest' && (password_verify($password, self::$password))){
            $_SESSION['logged_in_user'] = $username;
            $log = new Log();
            $log->logInfo("User $username logged in.");
            return True;
        }   else {
                $logError = new Log();
                $logError->logError("User $username failed to log in!");
                return False;
            };
        
    }

    public static function check()
    {
        return $_SESSION['logged_in_user'];

        
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