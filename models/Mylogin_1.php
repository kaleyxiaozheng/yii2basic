<?php

namespace app\models;

use yii\db\ActiveRecord;

class Mylogin extends ActiveRecord
{
    public $username;
    public $password;
    
    /*public function tableName() {
        return 'mylogin';
    }*/
    
    
    
    public function rules()
    {
        return array(
            // username and password are both required
            array('username, password', 'required'),
            // password is validated by validatePassword()
           // ['password', 'validatePassword'],
        );
    }
    
    /*public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }*/
}