<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 添加栏目 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>ChannelManage/addchannel" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">栏目名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="menu_name" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">使用链接</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="menu_name" id="focusedInput" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">详细内容</label>
                            <div class="controls">
                                <textarea name="text"></textarea>
                            </div>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'text' );
                            </script>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button class="btn">取消</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>

</div>
</div>