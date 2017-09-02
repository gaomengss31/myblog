<?php
namespace backend\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class Category extends ActiveRecord{
    public function attributeLabels(){
        return [
          'name'=>'名称',
          'intro'=>'简介',
          'is_show'=>'是否显示',
        ];
    }
    public function rules(){
        return [
           [['name','intro','is_show'],'required'],
        ];
    }
}