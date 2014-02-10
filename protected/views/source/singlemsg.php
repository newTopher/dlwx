<link href="<?php echo Yii::app()->getBaseUrl(); ?>/css/msg.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(); ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 单图文消息 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4">
                    <div class="appmsg  editing">
                        <div id="js_appmsg_preview" class="appmsg_content">
                            <div id="appmsgItem1" data-fileid="" data-id="1" class="js_appmsg_item ">
                                <h4 class="appmsg_title">
                                    <?php if($singleData->title != ''): ?>
                                        <a onclick="return false;" href="javascript:void(0);" target="_blank"><?php echo $singleData->title; ?></a>
                                    <?php endif; ?>
                                    <?php if($singleData->title == ''): ?>
                                        <a onclick="return false;" href="javascript:void(0);" target="_blank">标题</a>
                                    <?php endif; ?>
                                </h4>
                                <div class="appmsg_info">
                                    <em class="appmsg_date"></em>
                                </div>
                                <div class="appmsg_thumb_wrp">
                                    <?php if($singleData->title != ''): ?>
                                        <img class="js_appmsg_thumb appmsg_thumb" src="<?php echo Yii::app()->getBaseUrl().'/upload/wxmsg/'.$singleData->index_image; ?>">
                                    <?php endif; ?>
                                    <?php if($singleData->title == ''): ?>
                                        <img class="js_appmsg_thumb appmsg_thumb" src="">
                                    <?php endif; ?>
                                    <i class="appmsg_thumb default">封面图片</i>

                                </div>
                                <p class="appmsg_desc"><?php echo $singleData->description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span8" style="margin-bottom: 20px;">
                    <div class="appmsg_editor" style="margin-top: 0px;">
                        <div class="inner">
                            <form method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->getBaseUrl(); ?>/Source/InsertSingleMsg" class="form-horizontal">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">标题</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="title" id="focusedInput" type="text" value="">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="">摘要</label>
                                        <div class="controls">
                                            <textarea style="width: 300px;height: 100px;" name="description"></textarea>
                                            <p class="help-block"><span class="label label-important">注意</span>&nbsp;摘要可以为空</p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">封面图片</label>
                                        <div class="controls">
                                            <div class="uploader" id="uniform-fileInput"><div class="uploader"><input class="input-file uniform_on" name="index_image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                            <p class="help-block"><span class="label label-important">注意</span>&nbsp;用户回复关键词后,返回的信息图片,建议尺寸360*200像素</p>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">链接</label>
                                        <div class="controls">
                                            <select name="url_id">
                                                <option value="1">微网站首页</option>
                                                <option value="2">最新活动页面</option>
                                                <option value="3">团购页面</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">保存</button>
                                        <button class="btn">取消</button>
                                    </div>
                                </fieldset>
                            </form>

                        <i class="arrow arrow_out" style="margin-top: 0px;"></i>
                        <i class="arrow arrow_in" style="margin-top: 0px;"></i>
                        <div class="mask" style="display: none;"></div>
                        </div>
                </div>

            </div>

            <?php foreach($allsingleData as $key=>$value): ?>
            <div class="span4">
                <div class="appmsg  editing">
                    <div class="appmsg_content">
                        <div class="js_appmsg_item ">
                            <h4 class="appmsg_title">
                               <a onclick="return false;" href="javascript:void(0);" target="_blank"><?php echo $value->title; ?></a>

                            </h4>
                            <div class="appmsg_info">
                                <em class="appmsg_date"></em>
                            </div>
                            <div class="appmsg_thumb_wrp">
                                <img class="js_appmsg_thumb appmsg_thumb" src="<?php echo Yii::app()->getBaseUrl().'/upload/wxmsg/'.$value->index_image; ?>">
                                <i class="appmsg_thumb default">封面图片</i>
                            </div>
                            <p class="appmsg_desc"><?php echo $value->description; ?></p>

                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>


        </div>
    </div>
</div>

</div>
</div>