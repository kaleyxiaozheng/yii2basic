<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\MyLoginForm;
use app\models\Mylogin;

class LoginController extends Controller
{
    public function actionLogin(){

        Yii::info("Username: ");
        $model = new Mylogin();
        Yii::info(Yii::$app->request->post('Mylogin'));
        $user = Yii::$app->request->post('Mylogin');
        Yii::info($user);
        $m = Mylogin::find()->where(['username' => $user["username"], 'password' => $user["password"]]);

        Yii::info($m->count());

        if ($m->count() > 0){
            Yii::info("I am here");
            // do something
            $model->username = $m->one()->username;
            $model->password = $m->one()->password;
            return $this->render('login-confirm', ['form' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('login', ['model' => $model]);
        }
    }     
}
