<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\MyLoginForm;
use app\models\Mylogin;

class LoginController extends Controller
{
    public function actionLogin(){
       // $validate = new Mylogin();
        
        //Yii::info("Username: ");
        $model = new Mylogin();
       // Yii::info(Yii::$app->request->post('Mylogin'));
       // $user = Yii::$app->request->post('MyLoginForm');
        //Yii::info($user);
        if(isset($_POST['Mylogin']))
        {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        //Yii::app()->end();
        //die();
        }
         return $this->render('login', array('model'=>$model));
        /*$m = Mylogin::find()->where(['username' => $user["username"], 'password' => $user["password"]]);

        Yii::info($m->count());

        if ($m->count() > 0){
            Yii::info("I am here");
            // do something
            $model->username = $m->one()->username;
            $model->password = $m->one()->password;
            return $this->render('login-confirm', ['form' => $model]);
        } else {
            $
           
        }*/
    }     
}
