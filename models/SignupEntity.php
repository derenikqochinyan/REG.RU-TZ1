<?php

namespace app\models;

use yii\base\Model;

class SignupEntity extends Model 
{
    public $email;
    public $password;
    public $surname;
    public $firstname;
    public $lastname;
    public $organisation;
    public $inn;
    
     public function rules()
    {
        return [
            [['email','password','surname','firstname','lastname','organisation','inn'],'required'],
            ['email','email'],
            ['email','unique','targetClass'=>'app\models\UserEntity'],
            ['password','string','min'=>4]
        ];
    }
    public function signup()
    {
        $user = new UserEntity();
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->surname = $this->surname;
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->organisation = $this->organisation;
        $user->inn = $this->inn;
        return $user->save();
    }
}
