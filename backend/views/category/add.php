
<div class="note">
    <h4>分类添加</h4>

<?php
/*//$form = \yii\bootstrap\ActiveForm::begin();
//<table class="news_form">
echo $form->field($model,'name');
echo $form->field($model,'intro')->textarea();
echo $form->field($model,'is_show',['inline'=>'true'])->radioList(['0'=>'不显示','3'=>'显示']);
//field($model, 'status')->radioList(['0'=>'有效','1'=>'无效'],['class'=>'label-group'])->label('状态')
//echo $form->field($model,'status',['inline'=>'ture'])->radioList(\backend\models\Brand::getStatusOption());
echo \yii\bootstrap\Html::submitButton('提交',['class=>btn btn-info']);
\yii\bootstrap\ActiveForm::end();
*/?>

    <form action="" method="post">
        <table class="news_form" >
            <?php $form = \yii\bootstrap\ActiveForm::begin();  ?>
            <tr>
                <td><?php echo $form->field($model,'name'); ?></td>
            </tr>
            <tr>
                <td><?php echo $form->field($model,'intro')->textarea(); ?></td>
            </tr>
            <tr>
                <td><?php  echo  $form->field($model,'is_show',['inline'=>'true'])->radioList(['0'=>'不显示','3'=>'显示']); ?></td>
            </tr>
            <tr>
                <td><?php echo \yii\bootstrap\Html::submitButton('提交',['class=>btn btn-info']); ?></td>
            </tr>
            <?php \yii\bootstrap\ActiveForm::end(); ?>
        </table>
</div>