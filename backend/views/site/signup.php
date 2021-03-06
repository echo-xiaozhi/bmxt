<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\SignupForm */

$this->title = '注 册';
//$this->params['breadcrumbs'][] = $this->title;

?>


<div class="site-signup" >
    <h1 ><?= Html::encode($this->title) ?></h1>

    <p >注册请填写以下信息：</p>

    <div class="row" >
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('注册', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
