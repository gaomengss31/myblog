<?php
namespace backend\controllers;
use backend\models\Category;
use yii\web\Controller;
use yii\web\Request;

class CategoryController extends Controller{
    public $layout = 'admin';
    //添加分类
    public function actionIndex(){
        $models = Category::find()->all();
        return $this->render('index',['models'=>$models]);
    }
    public function actionAdd(){
       //1.实例化一个表单模型
        $model = new Category();
        //
        $request =new Request();
        if($request->isPost){
            $model->load($request->post());
            if($model->validate()){
                $model->save();
                return $this->redirect(['category/index']);
            }else{
                var_dump($model->getErrors());exit;
            }
        }
        return $this->render('add',['model'=>$model]);


    }
}