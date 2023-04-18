<?php

namespace app\controllers;



use Yii;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionTest(): string
    {
    $names = ['Ivanov','Petrov','Sidorov'];
//    var_dump(Yii::$app);
//    $this->debug(Yii::$app);
        return $this->render('test');
}
    public function actionShow(): string
    {
//        $this->layout = 'basic';
        return $this->render('show');
}
}