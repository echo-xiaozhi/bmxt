<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '报名者列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apply-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <form class="form-horizontal" action="index.php?r=apply-info/serch" method="get" style="margin-top: 30px;margin-bottom: 30px">
        <input type="hidden" name="r" value="apply-info/serch"/>
        <div class="col-xs-8" style="width:30%;"><input type="text" class="form-control" placeholder="请输入身份证号" name="id_number"></div>
        <div class="text-left">
            <input type="hidden" name="event_id" value="<?php
            echo $_GET['event_id'];
            ?>"/>
            <button type="submit" class="btn btn-success" style="background-color: #2E8B57 ">搜索</button>
        </div>
    </form>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'bm_name',
            'event_name',
            'phone',
            'id_number',
        ],
    ]); ?>


</div>
