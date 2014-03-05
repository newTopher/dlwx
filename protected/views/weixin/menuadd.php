<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 菜单设置 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4" style="margin-bottom: 15px;">
                    <iframe width="320" frameborder=no scrolling=auto style="overflow-x:hidden; overflow-y:auto;" height="480" src="<?php echo Yii::app()->request->hostInfo.'/index.php/W/i/sid/'.$uid; ?>"></iframe>
                </div>
                <div class="span8">
                    <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Menuinsert" class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">菜单名称</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="menu_name" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">菜单封面图</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" name="with_image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                    <p class="help-block"><span class="label label-info">建议</span>&nbsp;尺寸320*320像素</p>
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
</div>