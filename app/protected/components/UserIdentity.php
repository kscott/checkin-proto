<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $campus_id;
	
	public function __construct($username, $password, $campus_id)
	{
		parent::__construct($username, $password);
		$this->campus_id = $campus_id;
	}
	
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
		$criteria = new CDbCriteria;
		$criteria->addCondition(array('checkin_login = :login', 'checkin_password = :password', 'id = :campus'));
		$criteria->params = array(':login' => $this->username, ':password' => $this->password, ':campus' => $this->campus_id);
		
		$user = CheckinUser::model()->find($criteria);

		if ($user) {
			$this->errorCode = self::ERROR_NONE;
		}
		else {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		
		return !$this->errorCode;
	}
}
