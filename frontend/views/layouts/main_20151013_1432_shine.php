<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

$this->registerJsFile('js/topnav.js');

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/frontend/images/favicon.ico">
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap" >
        <?php
            NavBar::begin([

                //$this->
               // 'brandLabel' => '比一比',
               // 'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo "<img style='margin-left: -100px' src='../images/logo.png'/>";
            $menuItems = [
                ['label' => '首页', 'url' => ['/site/index']],
                ['label' => '地点', 'url' => ['/site/didian']],
                ['label' => '类型', 'url' => ['/site/type']],
                [
                    'label' => '时间',
                    'url' => ['/site/time'],
                    'items' => [
                        ['label' => '已结束', 'url' => ['/relese-event/un-addit']],
                        ['label' => '三天内', 'url' => ['/relese-event/list']],
                        ['label' => '一周内', 'url' => ['/relese-event/finish']],
                    ]
                ],
                [
                    'label' => '费用',
                    'url' => ['/site/pay'],
                    'items' => [
                        ['label' => '免费', 'url' => ['/relese-event/un-addit']],
                        ['label' => '收费', 'url' => ['/relese-event/list']],
                    ]
                ],
                [
                    'label' => '主办方',
                    'url' => ['/site/zhuban'],
                    'items' => [
                        ['label' => '官方', 'url' => ['/relese-event/un-addit']],
                        ['label' => '企业', 'url' => ['/relese-event/list']],
                    ]
                ],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => '用户登录', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => '退出 (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
                $menuItems[] =['label'=>'用户中心','url'=>['/site/yonghu']];

            }

            // $menuItems[] =['label'=>'Price','url'=>['/site/piaojia']];
            // $menuItems[] =['label'=>'Users','url'=>['/site/users']];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>

            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; 易健绅 <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
<!--            --><?php
//            echo $this->params['title'];
//            ?>
        <p><a>赛事合作</a>&nbsp;&nbsp;&nbsp;&nbsp;<a>精彩赛事</a>&nbsp;&nbsp;&nbsp;&nbsp;<a>常见问题</a>&nbsp;&nbsp;&nbsp;&nbsp;<a>联系我们</a>&nbsp;&nbsp;&nbsp;&nbsp;<a>公司简介</a></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
