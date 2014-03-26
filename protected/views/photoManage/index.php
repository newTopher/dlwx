<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 相册管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a class="btn btn-primary" style="margin-bottom: 10px;" href="<?php echo Yii::app()->request->baseUrl; ?>/PhotoManage/Addphotolist">创建相册</a>
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>  您可以在这里创建您的产品相册.
                </div>



                <div>
                    <ul class="photo">
                        <?php if($photolist != null): ?>
                        <?php foreach($photolist as $k=>$v): ?>
                        <li>
                            <div class="photoimg">
                                <a title="<?php echo $v->name; ?>" class="cover" href="<?php echo Yii::app()->request->baseUrl; ?>/PhotoManage/Addphoto/id/<?php echo $v->id; ?>">
                                    <img src="<?php echo $v->index_image; ?>">
                                </a>
                                <div class="bd">
                                    <h6><?php echo $v->name; ?></h6>
                                    <p class="sn">有9张照片</p>
                                </div>
                                <div class="fr">
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/PhotoManage/Addphoto/id/<?php echo $v->id; ?>">上传图片</a>　<a href="/Wealbums/Editalbums/aid/101005/abid/52510">编辑</a>　<a href="javascript:void(0);" onclick="ajaxdel(52510,101005,102,206660,'1c770bd6b82664600c0062d88081270c');">删除</a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

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
