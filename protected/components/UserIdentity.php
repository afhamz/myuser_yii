<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    /**
     * @var integer id of logged user
     */

	private $_id;
	public $usertype;

	//Must need to add
    public function __construct($username, $password, $usertype)
    {
        $this->username = $username;
        $this->password = $password;
        $this->usertype = $usertype;
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
		if($this->usertype == 'A')
		{
		    $model = new Admin;
			$user  = $model->findByAttributes(array('admin_user'=>$this->username));
			
			if($user===null)
			{
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}
			elseif($user->admin_pass !== md5($this->password))
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{
	            $this->_id = $user->admin_id;
	            $this->username = $user->admin_user;
	            
	            $this->setState('userType', $this->usertype); //Store user type for sepration
	 
	            $this->errorCode = self::ERROR_NONE;
			}
			return !$this->errorCode;
		}

		elseif($this->usertype == 'M')
		{
		    $model = new Member;
			$user  = $model->findByAttributes(array('member_user'=>$this->username));

			if($user===null)
			{
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}
			elseif($user->member_pass !== md5($this->password))
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{
	            $this->_id = $user->member_id;
	            $this->username = $user->member_user;

	            $this->setState('userType', $this->usertype); //Store user type for sepration
	 
	            $this->errorCode = self::ERROR_NONE;
			}
			return !$this->errorCode;
		}

	}

	public function getId()
	{
		return $this->_id;
	}

}

