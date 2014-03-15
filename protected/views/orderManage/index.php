<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><a href="<?php echo Yii::app()->request->baseUrl; ?>/OrderManage/Index"><i class="icon-info-sign"></i> 预约管理 </a></h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/OrderManage/Add" class="btn btn-normal btn-primary">
                   添加预约</a>
                <p style="boder:1px"></p>
                <?php ?>
                <div class="row-fluid sortable ui-sortable">
                    <?php foreach($orders as $k=>$v):?>
                    <div class="box span4" style="margin-left:1%;margin-top:10px;width:31.5%">
                        <div class="box-header well" data-original-title="">
                            <h2><?php echo $v->title ;?></h2>
                            <div class="box-icon">
                                <a href="<?php echo Yii::app()->request->baseUrl.'/OrderManage/OrderUpdate/id/'.$v->id.'/kid/'.$v->kid;?>" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="<?php echo Yii::app()->request->baseUrl.'/OrderManage/Delete/id/'.$v->id.'/kid/'.$v->kid;?>" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content buttons" style="min-height: 150px;">
                            <div id="realtimechart" style="height: 180px; padding: 0px; position: relative;">
                             <?php if($v->image_path):?>
                                <a href="">
                                    <img src="<?php echo Yii::app()->baseUrl.'/upload/slider/'.$v->image_path;?>" width="320" height="180">
                                </a>
                            <?php else:?>
                                <a style="text-decoration: none;" href="#"><div style=" height:180px;width:308px;background: #ececec;font-size:20px;text-align: center ;color: #c0c0c0;text-align: center;line-height: 160px;font-weight: 400;">无封面图</div></a>
                            <?php endif;?>
                            </div>
                        </div>
                    </div><!--/span-->
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>