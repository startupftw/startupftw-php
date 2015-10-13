<?php
class Auth_Example extends Auth
{
    protected function _login($username, $password, $remember)
    {
        // Do username/password check here
    }

    public function password($username)
    {
        // Return the password for the username
    }

    public function check_password($password)
    {
        // Check to see if the logged in user has the given password
    }

    public function logged_in($role = NULL)
    {
        // Check to see if the user is logged in, and if $role is set, has all roles
    }

    public function get_user($default = NULL)
    {
        // Get the logged in user, or return the $default if a user is not found
    }
}

?>