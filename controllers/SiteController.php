<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\SignupIndividual;
use app\models\SignupEntity;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionSignup()
    {
        return $this->render('signup');
    }
    
    public function actionSignupIndividual()
    {
        $model = new SignupIndividual();
        if(isset($_POST['SignupIndividual']))
        {
            $model->attributes = Yii::$app->request->post('SignupIndividual');
            if($model->validate() && $model->signup())
            {
                return $this->redirect(['index']);
            }
        }
        return $this->render('signup-individual',['model'=>$model]);
    }
    
    public function actionSignupEntity()
    {
        $model = new SignupEntity();
        if(isset($_POST['SignupEntity']))
        {
            $model->attributes = Yii::$app->request->post('SignupEntity');
            if($model->validate() && $model->signup())
            {
                return $this->redirect(['index']);
            }
        }
        return $this->render('signup-entity',['model'=>$model]);
    }
}