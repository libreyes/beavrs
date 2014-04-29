<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        // Attempt to retrieve the entered username from the user table
        $user = User::model()->findByAttributes(array('username'=>$this->username));
        if ($user === null) {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            return false;
        }
        // Either a string or a boolean
        $matches = $user->matchMaybeUpgrade($this->password, $user->password);
        if ($matches === false) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
            return false;
        }
        if ($matches !== true) {
            // Upgrade the user's password hash to a more secure one
            $user->password = $matches;
            $user->save();
        }
        $this->_id = $user->id;
        $this->setState('role', $user->role); 
        $this->errorCode=self::ERROR_NONE;
        return true;
    }
    
    /**
     * Class returns username by default, so ensure userId is returned instead
     */
    public function getId()
    {
        return $this->_id;
    }
}