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
    private $_user;

    public function authenticate(){
        if(strpos($this->email,'@wapwei')){
            $user=AgentUserModel::model()->find('LOWER(email)=?',array(strtolower($this->email)));
        }else if($this->email == 'ztfadmin'){
            $user=AdminUserModel::model()->find('LOWER(email)=?',array(strtolower($this->email)));
        }else{
            $user=UserModel::model()->find('LOWER(email)=?',array(strtolower($this->email)));
        }
        if($user === null){
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }elseif($user->password!==md5($this->password)){
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }else{
            $this->errorCode=self::ERROR_NONE;
            $this->_user = $user;
        }
        return !$this->errorCode;
    }

    public function getUser(){
        return $this->_user;
    }
}