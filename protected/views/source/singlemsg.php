<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 单图文消息 </h2>

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
                                        <img class="js_appmsg_thumb appmsg_thumb" src="<?php echo Yii::app()->request->baseUrl.'/upload/wxmsg/'.$singleData->index_image; ?>">
                                    <?php endif; ?>
                                    <?php if($singleData->title == ''): ?>
                                        <img class="js_appmsg_thumb appmsg_thumb" src="">
                                    <?php endif; ?>
                                    <?php if($singleData->index_image == ''): ?>
                                    <i class="appmsg_thumb default">封面图片</i>
                                    <?php endif; ?>

                                </div>
                                <p class="appmsg_desc"><?php echo $singleData->description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span8" style="margin-bottom: 20px;">
                    <div class="appmsg_editor" style="margin-top: 0px;">
                        <div class="inner">
                            <form method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/Source/InsertSingleMsg" class="form-horizontal">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">标题</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="title" id="title" id="focusedInput" type="text" value="">
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
                                        <label class="control-label">选用链接</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="url" id="url_check" type="checkbox" value="1">
                                            <select name="url_id" id="url_select"  style="display: none;">
                                                <option value="">请选择</option>
                                                <option value="w_1">微官网</option>

                                                <optgroup label="-------------平台栏目------------"></optgroup>
                                                <?php foreach($selectdata['channel'] as $key=>$val): ?>
                                                    <option value="c_<?php echo $val['one']['id'];?>"><?php echo $val['one']['name'];?></option>
                                                    <?php if(count($val['sub_data']) != 0):?>
                                                        <?php foreach($val['sub_data'] as $k=>$v): ?>
                                                            <option value="c_<?php echo $v->id;?>">|____<?php echo $v->name;?></option>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>


                                                <?php if($selectdata['member'] != null): ?>
                                                    <optgroup label="-------------会员模块------------"></optgroup>
                                                    <option value="m_<?php echo $selectdata['member']->id; ?>">会员卡</option>
                                                <?php endif; ?>

                                                <?php if($selectdata['saledata'] != null): ?>
                                                    <optgroup label="-------------优惠券活动------------"></optgroup>
                                                    <?php foreach($selectdata['saledata'] as $k=>$v): ?>
                                                        <option value="s_<?php echo $v->id; ?>" ><?php echo $v->name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>

                                                <?php if($selectdata['guaguadata'] != null): ?>
                                                    <optgroup label="-------------刮刮卡活动------------"></optgroup>
                                                    <?php foreach($selectdata['guaguadata'] as $k=>$v): ?>
                                                        <option value="g_<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>

                                                <?php if($selectdata['zhuandata'] != null): ?>
                                                    <optgroup label="-----------幸运大转盘活动----------"></optgroup>
                                                    <?php foreach($selectdata['zhuandata'] as $k=>$v): ?>
                                                        <option value="z_<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>

                                                <?php if($selectdata['yuyuedata'] != null): ?>
                                                    <optgroup label="-----------在线预约模块----------"></optgroup>
                                                    <?php foreach($selectdata['yuyuedata'] as $k=>$v): ?>
                                                        <option value="y_<?php echo $v->id; ?>" ><?php echo $v->title; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>

                                                <?php if($selectdata['namecarddata'] != null): ?>
                                                    <optgroup label="-----------微名片模块----------"></optgroup>
                                                    <?php foreach($selectdata['namecarddata'] as $k=>$v): ?>
                                                        <option value="n_<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>

                                                <?php if($selectdata['tuandata'] != null): ?>
                                                    <optgroup label="-----------微团购模块----------"></optgroup>
                                                    <?php foreach($selectdata['tuandata'] as $k=>$v): ?>
                                                        <option value="t_<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                <?php if($selectdata['liuyandata'] != null): ?>
                                                    <optgroup label="-----------留言板模块----------"></optgroup>
                                                    <option value="liu_<?php echo $selectdata['liuyandata']->id; ?>" ><?php echo $selectdata['liuyandata']->name; ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group" id="text_box" style="display:block;">
                                        <label class="control-label" for="focusedInput">详细内容</label>
                                        <div class="controls">
                                            <textarea name="text" id="text_content"></textarea>
                                        </div>
                                        <script type="text/javascript">
                                            CKEDITOR.replace( 'text' );
                                        </script>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" id="sub_btn" class="btn btn-primary">保存</button>
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
            <?php if($allsingleData): ?>
            <?php foreach($allsingleData as $key=>$value): ?>
            <div class="span4">
                <div class="appmsg  editing">
                    <div class="appmsg_content">
                        <div class="js_appmsg_item ">
                            <h4 class="appmsg_title">
                               <a onclick="return false;" href="javascript:void(0);" target="_blank"><?php echo $value->title; ?> --  <?php echo date("Y-m-d",$value->add_time); ?></a>

                            </h4>
                            <a onclick="return confirm('确定删除此条消息吗?')" class="btn btn-mini btn-danger" href="<?php echo Yii::app()->request->baseUrl; ?>/Source/Sourcedel/id/<?php echo $value->id; ?>">删除</a>
                            <div class="appmsg_info">
                                <em class="appmsg_date"></em>
                            </div>
                            <div class="appmsg_thumb_wrp">
                                <img class="js_appmsg_thumb appmsg_thumb" src="<?php echo Yii::app()->request->baseUrl.'/upload/wxmsg/'.$value->index_image; ?>">
                            </div>
                            <p class="appmsg_desc"><?php echo $value->description; ?></p>

                        </div>
                     </div>
                  </div>
               </div>

        </div>
            <?php endforeach; ?>


            <?php endif; ?>

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
<script type="text/javascript">

    $(function(){
        $('#url_check').click(function(){
            if($(this).attr("checked") == 'checked'){
                $("#url_select").val("");
                $("#url_select").show();
                $("#text_box").hide();
            }else{
                $("#url_select").hide();
                $("#text_box").show();
            }
        });

    });

    $("#sub_btn").click(function(){
        if($("#title").val().length == 0){
            notif({
                type: "warning",
                msg: "标题不能为空",
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }

        if($("#url_check").attr("checked") == 'checked'){
            if($("#url_select").val().length == 0){
                notif({
                    type: "warning",
                    msg: "请选择链接地址",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        }
    });

</script>
