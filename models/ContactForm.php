<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $city;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'city'], 'required'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'verifyCode' => 'Код подтверждения',
        ];
    }

    /**
     * @param $email
     * @return bool
     * @throws \yii\base\InvalidArgumentException
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom($email)
                ->setSubject('Обратная связь www.geco.uz')
                ->setTextBody(
                    'Имя: ' . $this->name . PHP_EOL .
                    'Город: ' . $this->city . PHP_EOL .
                    'Телефон: ' . $this->phone . PHP_EOL .
                    'Email: ' . $this->email
                )
                ->send();

            return true;
        }
        return false;
    }
}
