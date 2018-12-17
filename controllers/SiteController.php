<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\LoginForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return string
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionIndex()
    {
        $success = false;
        $form = new ContactForm();
        if ($form->load(Yii::$app->request->post()) && $form->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            $success = true;
            return $this->refresh();
        }
        return $this->render('index',[
            'model' => $form,
            'success' => $success,
        ]);
    }


    /**
     * @return string|Response
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionProduct()
    {
        return $this->render('product');
    }

    public function actionAssortment()
    {
        return $this->render('assortment');
    }

    public function actionService()
    {
        return $this->render('service');
    }

    public function actionWarranty()
    {
        return $this->render('warranty');
    }

    public function actionPartners()
    {
        return $this->render('partners');
    }

    public function actionPhilosophy()
    {
        return $this->render('philosophy');
    }

}
