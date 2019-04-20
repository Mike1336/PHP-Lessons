<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model
{
  public $username;
  public $email;
  public $password;
  public $password_repeat;
  public $verifyCode;

  private $_user = false;


  public function rules()
  {
    return [
      ['username', 'trim'],
      ['username', 'required', 'message' => 'Имя пользователя не может быть пустым'],
      ['username', 'string', 'min' => 3, 'message' => 'Имя пользователя не должно быть короче 3 символов'],
      ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот логин уже занят'],

      ['email', 'trim'],
      ['email', 'required', 'message' => 'E-mail пользователя не может быть пустым'],
      ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'На данный e-mail адрес уже существует аккаунт'],
      ['email', 'email', 'message' => 'Некорректный e-mail адрес'],

      ['password', 'trim'],
      ['password', 'required', 'message' => 'Пароль не может быть пустым'],
      ['password', 'string', 'min' => 6, 'message' => 'Пароль не должнен быть короче 6 символов'],
      ['password_repeat', 'required', 'message' => 'Повторите придуманный пароль'],
      ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли не совпадают'],

      ['verifyCode', 'captcha', 'message' => 'Некорректный код'],
    ];
  }
  public function attributeLabels()
  {
    return [
      'username' => 'Придумайте логин',
      'password' => 'Придумайте пароль',
      'email' => 'Введите E-mail',
      'password_repeat' => 'Повторите пароль',
      'verifyCode' => 'Введите код с картинки',
    ];
  }
  public function signup()
  {
      if ($this->validate()) {
        $user = new User();

        $user->username = $this->username;
        $user->password = Yii::$app->security->generatePasswordHash($this->password);
        $user->email = $this->email;

        $user->save();
        return Yii::$app->user->login($this->getUser(), true ? 3600*24*30 : 0);
    }
    return false;
  }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
