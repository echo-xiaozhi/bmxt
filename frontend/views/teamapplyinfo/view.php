<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeamApplyinfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Team Applyinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-applyinfo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'event_name',
            'apply_status',
            'is_end',
            'event_id',
            'apply_team_id',
            'apply_money',
            'id_affirm',
            'position',
            'is_paid',
        ],
    ]) ?>

</div>
