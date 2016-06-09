<?php

namespace app\controllers;
use app\models\EmployeeDetail;

class EmployeeDetailController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
