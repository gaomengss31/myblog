<?php
namespace frontend\controllers;
use frontend\models\Student;
use yii\web\Controller;

class StudentController extends Controller{
    public function actionIndex(){
        $students = Student::find()->all();

        return $this->render('index',['students'=>$students]);
    }
}