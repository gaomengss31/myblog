<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29 0029
 * Time: 22:05
 */
namespace frontend\controllers;

use yii\web\Controller;

class IndexController extends Controller{
    public $layout = false;
    public function actionIndex()
    {
        return $this->render('index');
    }
}