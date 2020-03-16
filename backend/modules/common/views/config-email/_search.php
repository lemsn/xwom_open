<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\config\ConfigEmailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="config-email-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'scene') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'smtp_host') ?>

    <?php // echo $form->field($model, 'smtp_account') ?>

    <?php // echo $form->field($model, 'smtp_password') ?>

    <?php // echo $form->field($model, 'smtp_port') ?>

    <?php // echo $form->field($model, 'encryp_mode') ?>

    <?php // echo $form->field($model, 'activation_type') ?>

    <?php // echo $form->field($model, 'token_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'email_widget') ?>

    <?php // echo $form->field($model, 'email_viewpatch') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_id') ?>

    <?php // echo $form->field($model, 'updated_id') ?>

    <!--开发调试后，请删除如上注释部分-->
    <!--用法示例，开发调试后，请删除如下 start-->
    <?php  //echo (, 'username')->textInput(['maxlength' => 20]) ?>

    <?php  //echo (, 'password')->passwordInput(['maxlength' => 20])  ?>

    <?php  //echo (, 'sex')->radioList(['1'=>'男','0'=>'女'])   ?>

    <?php  //echo (, 'edu')->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'],['prompt'=>'请选择','style'=>'width:120px'])  ?>

    <?php  //echo (, 'file')->fileInput()  ?>

    <?php  //echo (, 'hobby')->checkboxList(['0'=>'篮球','1'=>'足球','2'=>'羽毛球','3'=>'乒乓球'])  ?>

    <?php  //echo (, 'info')->textarea(['rows'=>3])  ?>

    <?php  //echo (, 'userid')->hiddenInput(['value'=>3])  ?>

 <!--用法示例，开发调试后，请删除如上，end-->
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>