<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zdrelese Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zdrelese-event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Zdrelese Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'event_name',
            'addit',
            'event_type',
            'apply_time_start',
            // 'apply_time_end',
            // 'place',
            // 'contact_name',
            // 'contact_phone',
            // 'contact_emaill:email',
            // 'orgnize',
            // 'orgnize_name',
            // 'extend_id',
            // 'is_extends',
            // 'apply_money',
            // 'event_img',
            // 'user_id',
            // 'is_end',
            // 'wenzhang:ntext',
            // 'jianjie',
            // 'is_top',
            // 'detailed',
            // 'begin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
