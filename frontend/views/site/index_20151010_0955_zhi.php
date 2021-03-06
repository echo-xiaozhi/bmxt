<?php
use yii\grid\GridView;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
$this->title = '济南易健绅体育赛事报名系统';
$this->registerCssFile('css/index.css');
//注册banner css文件
$this->registerCssFile('css/banner.css');
//注册banner js文件
$this->registerJsFile('js/banner.js');

$connection = Yii::$app->db;
$sql = "select img from bm_img";

$command = $connection->createCommand($sql);

$result = $command->queryAll();
$result1 = $command->queryOne();

$sql='select img from bm_lunbo_img';
$data = $connection->createCommand($sql);
$image = $data->queryAll();
?>

<div class="banner_index" id="banner_index">
    <ul class="imgbox_banner" id="imgbox_banner">
        <?php foreach($image as $img){ ?>
           <?php foreach($img as $im){ ?>
            <li><img src="<?php echo $im ?>"></li>
            <?php } ?>
        <?php } ?>

    </ul>
    <ul class="imgnav_banner" id="imgnav_banner">
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
</div>
<div id="banner_pos"></div>



<div class="site-index" style="margin-top: 30px">

    <div class="hot">
        <div class="hot1">
            <p>城市马拉松赛</p>
            <br/>

            <img  src="../images/2015-08-17_173828.png"  alt="hot" align="bottom" />
        </div>
        <div class="hot2">
            <p >
            吉林东邪西毒越野赛主办单位：吉林越野户外联盟
            <br/>
            协办单位：长春跑吧运动俱乐部、吉林穿越户外俱乐部、北华大学、东北电力大学、东软赛客
            <br/>
            赛事报名：跑吧网、益跑网、42旅、吉林越野、长春跑吧、最酷ZUICOOL
            <br/>
            媒体支持:新文化报、跑吧网、益跑网、42旅、最酷ZUICOOL
            </p>
            <p style="margin:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="margin:0px;" src="../images/xiaobian.png" />王小编&nbsp;&nbsp;&nbsp;&nbsp;发布时间：2015/08/17</p>
        </div>
        <div class="hot3">
            <p class="hot3p1">活动开始10/24</p>
            <p class="hot3p2" ><a class="hot3a2" href="">我要报名</a></p>
            <p class="hot3p3">活动截止11/24</p>

        </div>
    </div>
    <div class="slt">
        <ul>
            <li><a href="">报名人数（由多到少）</a> </li>
        </ul>
    </div>
    <div class="main" style="min-height: 100%;position: relative; ">

        <div style="padding-bottom: 60px">
            <ul style="height: 100%">
            <?php foreach($model1 as $key=>$val){ ?>

                <li style="float: left;  list-style: none; margin-top: 20px;">
                    <div style=" height:152px; width:800px; margin-left: 25px; border: 1px seagreen solid">
                        <a href="index.php?r=site/content&<?php echo 'id='.$val->id;?>" ><img style="float: left;" width="223px;" height="150px;" src="<?php echo $val->event_img ?>"/></a>
                        <div class="float" style="margin-top: 20px; margin-left: 10px">
                            <a href="index.php?r=site/content&<?php echo 'id='.$val->id;?>" ><p><?php echo $val->event_name ?></p></a>
                            <p>报名开始时间：<?php echo $val->apply_time_start ?></p>
                            <p>报名结束时间：<?php echo $val->apply_time_end ?></p>
                            <p>状态：<span style="color: red"><?php echo $val->state->state ?></span></p>
                        </div>
                        <div class="float" style="float: left; margin-top: 20px; margin-left: 40px;">
                            <p>赛事类型：<?php echo $val->type->event_type_name ?></p>
                            <p>报名费用：￥<?php echo $val->apply_money ?></p>
                            <p>报名人数：<span style="color:red;"><?php echo $val->number ?></span></p>
                            <p>地点：<?php echo $val->place ?></p>

                        </div>
                        <div style="float: right; background: url('/advanced/frontend/web/uploads/lan.png') no-repeat; width: 49px;height: 48px; margin-top: 102px;">
                            <span style=" color: #ffffff; width:50px; height:50px; display:table-cell; text-align:center; vertical-align:middle;">政</span>
                        </div>


                    </div>
                    <div class="jj"><p>&nbsp;&nbsp;&nbsp;&nbsp;赛事简介：额外敬爱哦福建诶我啊警方i饿哦家杰佛阿福i额哈飞骏威哈佛i额就hi发俄
                        方将挖掘费i饿啊我减肥啊我就佛i额减肥奥减肥我啊警方i</p></div>
                </li>




            <?php } ?>
            </ul>



        <div style="width: 100%;">
            <?= LinkPager::widget(['pagination' => $pages]); ?>
        </div>
            <div style="clear: left"></div>
    </div>
</div>

 <!--phone的div放map里面-->
    <div class="map">
        <h4>赛事集中地区图</h4>
        <img src="/frontend/web/images/map.jpg" style="width: 310px; height: 255px;" />
        <ul style="margin-top: 15px;">
            <li><span style="width: 30px; height: 15px; display: block; background-color: #8A3E99; float: left;"></span>赛事最多</li>
            <li><span style="width: 30px; height: 15px; display: block; background-color: #80C31C; float: left;"></span>人员最多</li>
            <li><span style="width: 30px; height: 15px; display: block; background-color: #1273D2; float: left;"></span>平均区</li>
            <li><span style="width: 30px; height: 15px; display: block; background-color: #FF7900; float: left;"></span>稀少区</li>
        </ul>
        <div class="phone">
            <div class="float er">
                <img src="/frontend/images/er.png" class="float" />
                <p class="ma">扫描官方二维码，实时了解最新赛事</p>
            </div>
        </div>
    </div>
    <!--phone的div放map里面-->




    <div style="clear: both;"></div>
    <div class="link" >
        <div class="link1">
            <p>友情链接</p>
        </div>
        <div class="link2">
            <a href="http://www.sdty.gov.cn/">山东省体育局</a>
            <a href="http://www.xzjwh.com/">济南新知觉文化传播有限公司</a>
            <a href="http://www.yijianshen.net/">易健绅体育健身服务平台</a>
            <a href="http://jn.yijianshen.net/">国华东方美郡游泳馆</a>
            <a href="http://www.facetoworld.net/">济南邮政-横扫全城</a>
            <a href="http://www.jnsports.cn/">济南全民健身网</a>

            <ul style="display: none;">
                <?php
                $sql='select name,link from bm_friends_link';
                $data = $connection->createCommand($sql);
                $links = $data->queryAll();
               foreach ($links as $link) {
                   foreach($link as $name){
                        echo '<li style="float: left;list-style:none;padding: 10px ">'.$name.'</li>';
                    }
                }

                ?>
            </ul>
        </div>

    </div>


