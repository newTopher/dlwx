<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><a href="<?php echo Yii::app()->request->baseUrl; ?>/OrderManage/Index"><i class="icon-info-sign"></i> 预约管理 </a></h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/OrderManage/Add" class="btn btn-large btn-primary">
                   添加预约</a>
                <p style="boder:1px"></p>
                <?php ?>
                <div class="row-fluid sortable ui-sortable">
                    <div class="box span4">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="icon-list"></i> Buttons</h2>
                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content buttons">

                        </div>
                    </div><!--/span-->
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>