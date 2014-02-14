<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 修改轮播图片 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4" style="margin-bottom: 15px;">
                    <iframe width="340" frameborder=no scrolling=auto style="overflow-x:hidden; overflow-y:auto;" height="480" src="<?php echo Yii::app()->request->hostInfo.'/index.php/W/i/sid/'.$webdata->uid; ?>"></iframe>
                </div>
                <div class="span8">
                    <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Sliderupdate" class="form-horizontal">
                        <input type="hidden" name="id" value="<?php echo $sliderData->id; ?>">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">标题</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="title" id="focusedInput" type="text" value="<?php echo $sliderData->title; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">url链接</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="url" id="focusedInput" type="text" value="<?php echo $sliderData->url; ?>">
                                    <a href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Slideradd" class="btn btn-small btn-primary">站内url</a>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="optionsCheckbox2">是否为封面</label>
                                <div class="controls">
                                    <label class="checkbox">
                                        <div class="checker" id="uniform-optionsCheckbox2"><span><input type="checkbox" name="is_index" id="optionsCheckbox2" value="1" style="opacity: 0;" <?php if($sliderData->is_index == 1){ echo 'checked';} ?>></span></div>
                                        勾选此项此图片将为轮播首张
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">图片</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" name="image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                    <?php if(isset($sliderData->image)): ?>
                                        <div  style="margin-top: 10px;margin-left: 2px;">
                                            <img src="<?php echo Yii::app()->getBaseUrl().'/upload/wxwebsite/'.$sliderData->image; ?>" class="img-rounded" style="width: 160px; height: 100px;">
                                        </div>
                                    <?php endif; ?>
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