<?php
/**
 * Created by PhpStorm.
 * User: zeol
 * Date: 24.03.16
 * Time: 20:39
 */
namespace app\models;

use yii\base\Model;
use Yii;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $rememberMe = true;
    public $status;

    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'on' => 'default'],
            ['email', 'email'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword']
        ];
    }

    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()):
            if ($this->password != '1234'):
                $this->addError($attribute, 'Неправильное имя пользователя или пароль');
            endif;
        endif;
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'password' => 'Пароль',
            'rememberMe' => 'Запомнить меня'
        ];

    }

    public function login()
    {
        if($this->validate()):
            return true;
        else:
            return false;
        endif;
    }
}