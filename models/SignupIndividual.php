<?php

namespace app\models;

use yii\base\Model;

class SignupIndividual extends Model 
{
    public $email;
    public $password;
    public $surname;
    public $firstname;
    public $lastname;
    public $inn;
    
     public function rules()
    {
        return [
            [['email','password','surname','firstname','lastname'],'required'],
            ['email','email'],
            ['email','unique','targetClass'=>'app\models\UserIndividual'],
            ['password','string','min'=>4],
            ['inn','string']
        ];
    }
    public function signup()
    {
        $user = new UserIndividual();
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->surname = $this->surname;
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->inn = $this->inn;
        return $user->save();
    }
}
