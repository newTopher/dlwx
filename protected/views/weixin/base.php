<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 微官网基本设置 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4" style="margin-bottom: 15px;">
                    <iframe width="340" frameborder=no scrolling=auto style="overflow-x:hidden; overflow-y:auto;" height="480" src="<?php echo Yii::app()->request->hostInfo.'/index.php/W/i/sid/'.$webdata->uid; ?>"></iframe>
                </div>
                <div class="span8">
                    <form enctype="multipart/form-data" name="form" method="post" action="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Addweixin" class="form-horizontal">
                        <input type="hidden" name="uid" value="<?php echo Yii::app()->session['user']->id; ?>">
                        <input type="hidden" name="id" value="<?php if(isset($webdata->id)){ echo $webdata->id; }; ?>">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">官网名称</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="webname_title" id="webname_title" type="text" value="<?php if(isset($webdata->webname_title)){ echo $webdata->webname_title; } ?>"  data-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError3">官网风格</label>
                                <div class="controls">
                                    <select name="template_id" id="selectError3">
                                        <option value="<?php echo $template->id; ?>"><?php echo $template->china_name; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">联系电话</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" type="text" value="<?php if(isset($webdata->tel)){ echo $webdata->tel;} ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">回复关键词</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="replay_keywords" type="text" value="<?php if(isset($webdata->replay_keywords)){ echo $webdata->replay_keywords;} ?>">
                                    <p class="help-block"><span class="label label-important">注意</span>&nbsp;关键词不能与其他活动设定的触发关键词重复,否则不能触发</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信回复消息标题</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="msg_title" id="focusedInput" type="text" value="<?php if(isset($webdata->msg_title)){ echo $webdata->msg_title;} ?>">
                                    <p class="help-block"><span class="label label-important">注意</span>&nbsp;用户回复关键词后,返回的信息标题</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信回复消息摘要</label>
                                <div class="controls">
                                    <textarea rows="5" style="width:268px;" name="msg_description"><?php if(isset($webdata->msg_description)){ echo $webdata->msg_description;} ?></textarea>
                                    <p class="help-block"><span class="label label-important">注意</span>&nbsp;用户回复关键词后,返回的信息摘要,内容长度不能超过255个字</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">微信回复消息配图</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" name="msg_image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                    <?php if(isset($webdata->msg_image)): ?>
                                        <div style="margin-top: 10px;margin-left: 2px;">
                                            <img src="<?php echo Yii::app()->getBaseUrl().'/upload/wxwebsite/'.$webdata->msg_image; ?>" class="img-rounded"style="width: 160px; height: 100px;">
                                        </div>
                                    <?php endif; ?>

                                    <p class="help-block"><span class="label label-important">注意</span>&nbsp;用户回复关键词后,返回的信息图片,建议尺寸720*400像素</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">微信官网封面图片</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" name="index_image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                    <?php if(isset($webdata->index_image)): ?>
                                     <div  style="margin-top: 10px;margin-left: 2px;">
                                         <img src="<?php echo Yii::app()->getBaseUrl().'/upload/wxwebsite/'.$webdata->index_image; ?>" class="img-rounded" style="width: 160px; height: 100px;">
                                     </div>
                                    <?php endif; ?>
                                    <p class="help-block"><span class="label label-info">建议</span>&nbsp;尺寸640*1136像素</p>
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

<script type="text/javascript">
    $('form[name="form"]').validator({
        stopOnError: false,
        timely: false,
        messages: {
            required: "该字段内容不能为空哦"
        },
        fields: {
            'webname_title': 'required;',
            'tel': 'required;',
            'replay_keywords': 'required;',
            'msg_title': 'required;',
            'msg_description': 'required;'
        }
    });
</script>