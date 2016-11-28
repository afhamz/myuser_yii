<?php

class LoginForm extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe;

    public function rules()
    {
        return array(
			array('username, password','required','message'=>'{attribute} harus diisi'), 
            array('rememberMe', 'boolean'),
            array('password', 'authenticate'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'username'=>'Username',
            'password'=>'Password',
            'rememberMe'=>'Ingat Saya',
        );
    }

    public function login()
    {
	    /*
	     * if identity property had no value, here we initialize 
	     * identity property
	     */
	    if ($this->identity === null) {
	        $this->identity = new UserIdentity($this->username, $this->password);
	        //authenticating
	        $this->identity->authenticate();
	    } else {
	        /*
	         * if error code was NONE, it means user has been successfully
	         * authenticated.
	         */
	        if ($this->identity->errorCode === UserIdentity::ERROR_NONE) {
	            Yii::app()->user->login($this->identity);
	            return true;
	        }
	    }
	}
}
 