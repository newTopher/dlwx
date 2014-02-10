<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 添加轮播图片 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4" style="margin-bottom: 15px;">
                    <img style="width:320px;height:480px;" src="<?php echo Yii::app()->getBaseUrl(); ?>/upload/test.jpg">
                </div>
                <div class="span8">
                    <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Sliderinsert" class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">标题</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="title" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">url链接</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="url" id="focusedInput" type="text" value="">
                                    <a href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Slideradd" class="btn btn-small btn-primary">站内url</a>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="optionsCheckbox2">是否为封面</label>
                                <div class="controls">
                                    <label class="checkbox">
                                        <div class="checker" id="uniform-optionsCheckbox2"><span><input type="checkbox" name="is_index" id="optionsCheckbox2" value="1" style="opacity: 0;"></span></div>
                                        勾选此项此图片将为轮播首张
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">图片</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" name="image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>

                                    <p class="help-block"><span class="label label-info">建议</span>&nbsp;尺寸720*400像素</p>
                                </div>
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