<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
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
		$username = $this->username;
		$password = $this->password;

		$user1 = User::model()->find(array('condition'=>"username = '$username'"));

		
		

		if(!empty($user1)){
			$mdpassword =md5($password);
			if($mdpassword == $user1->password){
				$this->errorCode=self::ERROR_NONE;
				return !$this->errorCode;
			}else{
				//$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
		}else{
			//$this->errorCode=self::ERROR_USERNAME_INVALID;
		}



	}
}