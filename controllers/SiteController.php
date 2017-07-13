<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Mylogin;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
   
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        
        if (!Yii::$app->user->isGuest) {
        //return $this->goHome();
        }

        $model = new Mylogin();
        
           // die();    
        
        if (Yii::$app->request->post()) {
            //return $this->goBack();
            //var_dump($_POST);
            
            $username=$_POST['Mylogin']['username'];
            $pass=$_POST['Mylogin']['password'];
            //echo $username;
           // echo $pass;
            //$criteria=new CDbCriteria();
           // $criteria->addCondition("username=".$username);
           // $criteria->addCondition("password=".$pass);
            $check=$model->findOne(array(
                'username'=>$username,
                'password'=>$pass
                    ));
            //var_dump($check);
            //die();
            if($check)
                {
                echo "loggedin";
                die();
                }
             else
             {
                 return $this->render('login',array('model' =>$model));
//                 echo 'Wrong Username or Password';
//                 die();
             }
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
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
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
