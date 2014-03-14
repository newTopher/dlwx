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
            <h2> 优惠券活动管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a class="btn btn-primary" style="margin-bottom: 10px;" href="<?php echo Yii::app()->request->baseUrl; ?>/Salecard/Addsale">创建优惠券活动</a>
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>  您可以定期创建一些优惠券活动,来吸引您的活跃你的粉丝.
                </div>


                <ul class="thumbnails">
                    <?php if($salelist != null): ?>
                        <?php foreach($salelist as $k=>$v): ?>
                        <li class="span3">
                            <div class="thumbnails">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Salecard/Getprizeuser/id/<?php echo $v->id;?>">
                                    <img alt="300x150" style="width: 300px; height: 150px;" src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $v->index_image; ?>">
                                </a>
                                <div class="caption">
                                    <h3><?php echo $v->index_title; ?>
                                        <span style="font-size: 10px;padding-left: 10px;color: green;">
                                            <?php if(($v->start_date." 00:00:00") > date("Y-m-d H:i:s")): ?>
                                                活动还没开始
                                            <?php endif; ?>

                                            <?php if(($v->end_date." 23:59:59") < date("Y-m-d H:i:s")): ?>
                                                活动还没开始
                                            <?php endif; ?>

                                            <?php if(date("Y-m-d H:i:s") > ($v->start_date." 00:00:00") && date("Y-m-d H:i:s") < ($v->end_date." 23:59:59")): ?>
                                            进行中 (<?php echo ActivityRecordModel::getCountsUserByAid($v->id,1); ?>人参加)
                                            <?php endif; ?>
                                        </span>
                                    </h3>
                                    <p style="margin-top: 20px;"><a href="<?php echo Yii::app()->request->baseUrl; ?>/Salecard/Viewsale/id/<?php echo $v->id; ?>/kid/<?php echo $v->keywords_id; ?>" class="btn btn-primary">修改活动</a></p>
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
