<?php

namespace app\controllers;

class MyController extends AppController
{
public function actionIndex($id = null)
{
    $hi = 'Hello,World!';
    $names = ['Ivanov','Petrov','Sidorov'];
    return $this->render('index',compact('hi','names','id'));
}

}