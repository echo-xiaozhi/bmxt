<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\LunboImg */

$this->title = 'Create Lunbo Img';
$this->params['breadcrumbs'][] = ['label' => 'Lunbo Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lunbo-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
