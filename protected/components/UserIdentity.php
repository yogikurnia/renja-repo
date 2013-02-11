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
	public function authenticate() {
              $username = strtolower($this->username);
              $user = User::model()->find('LOWER(username)=?', array($username));
              
              if ($user === null)
                     $this->errorCode = self::ERROR_USERNAME_INVALID;
              else if (!$user->validatePassword($this->password))
                     $this->errorCode = self::ERROR_PASSWORD_INVALID;
              else {
                     $this->_id = $user->id_user;
                     //$this->username = $user->username;
                     $role = Role::model()->findByPk($user->role);
                     $this->setState('roles', $user->role);
                     Yii::app()->session['user'] = $user;
                     Yii::app()->session['role'] = $role;
                     $this->errorCode = self::ERROR_NONE;
              }
              return $this->errorCode == self::ERROR_NONE;
       }
       
       public function getId()
	{
		return $this->_id;
	}
}