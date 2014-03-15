<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<style>
    .thumbnails {
        background-color: white;
        z-index: 2;
        position: relative;
        margin-bottom: 40px !important;

    }
    .caption h3{
        font-family: 'microsoft yahei';
    }
</style>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 微团购管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a class="btn btn-primary" style="margin-bottom: 10px;" href="<?php echo Yii::app()->request->baseUrl; ?>/TuanManage/Addtuan">添加团购</a>

                <ul class="thumbnails">
                    <?php if($tuanlist != null): ?>
                        <?php foreach($tuanlist as $k=>$v): ?>
                        <li class="span4">
                            <div class="thumbnails" style="padding:10px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;width: 300px;background-color:#DEDEDE;">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/TuanManage/Gettuanorderlist/id/<?php echo $v->id;?>">
                                    <img alt="300x150" style="width: 350px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $v->index_image; ?>">
                                </a>
                                <div class="caption">
                                    <h3><?php echo $v->name; ?>
                                        <span style="font-size: 10px;padding-left: 10px;padding-top:10px;color: #ff3922;">
                                            <?php if(($v->start_date." 00:00:00") > date("Y-m-d H:i:s")): ?>
                                                本次团购还没开始
                                            <?php endif; ?>

                                            <?php if(($v->end_date." 23:59:59") < date("Y-m-d H:i:s")): ?>
                                                本次团购已经结束了
                                            <?php endif; ?>

                                            <?php if(date("Y-m-d H:i:s") > ($v->start_date." 00:00:00") && date("Y-m-d H:i:s") < ($v->end_date." 23:59:59")): ?>
                                            团购进行中 (<?php echo TuanorderlistModel::getCountsUserByTid($v->id,$v->uid); ?>人参团)
                                            <?php endif; ?>
                                        </span>
                                    </h3>
                                    <p style="margin-top: 20px;"><a href="<?php echo Yii::app()->request->baseUrl; ?>/TuanManage/Viewtuan/id/<?php echo $v->id; ?>" class="btn btn-primary">修改活动</a></p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </ul>


            </div>
        </div>

        <?php if(!empty($msg)):?>
            <div class="msg_fade" id="ui_notifIt" class="info" style="background: deepskyblue; height: 60px; width: 100%; top: 0px; left: 0px;">
                <p style="line-height: 60px;">
                    <b><?php echo $msg;?></b>
                </p>
            </div>
        <?php endif;?>
    </div>
</div>

</div>
</div>
