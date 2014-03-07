<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 修改栏目 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                    <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/Channelupdate" class="form-horizontal">
                        <fieldset>
                            <input class="input-xlarge focused" name="pid" type="hidden" value="<?php echo $channelData->pid; ?>">
                            <input class="input-xlarge focused" name="id" type="hidden" value="<?php echo $id; ?>">
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">栏目名称</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="channel_name" name="name" type="text" value="<?php echo $channelData->name; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">使用链接形式</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="url" id="url_check" type="checkbox" value="1" <?php if($channelData->linkid != null){ echo 'checked'; }?>>
                                    <select name="linkid" id="url_select" style="display:<?php if($channelData->linkid != null){ echo 'block';}else{ echo 'none';}?> ">
                                        <option value="">请选择</option>
                                        <option value="t_1" <?php if($channelData->linkid == 't_1'){ echo 'selected';} ?>>活动</option>
                                        <option value="t_2" <?php if($channelData->linkid == 't_2'){ echo 'selected';} ?>>文字</option>
                                        <option value="t_3" <?php if($channelData->linkid == 't_3'){ echo 'selected';} ?>>图文</option>
                                    </select>
                                    &nbsp; &nbsp;&nbsp;&nbsp;<span class="label label-important">注意</span>&nbsp;<font color='green'>使用链接形式将不能填写栏目内容</font>
                                </div>

                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">是否弹出二级菜单</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="is_sub_show" type="checkbox" value="1" <?php if($channelData->is_sub_show == 1){ echo 'checked'; }?>>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-important">注意</span>&nbsp;<font color='green'>当前栏目在微官网上是否显示二级菜单</font>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">是否在菜单上显示</label>

                                <div class="controls">
                                    <input class="input-xlarge focused" name="is_show" id="focusedInput" type="checkbox" value="1" <?php if($channelData->is_show == 1){ echo 'checked'; }?>>
                                    &nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-important">注意</span>&nbsp;<font color='green'>当前栏目是否在为官网下导航栏显示</font>
                                </div>
                            </div>
                            <div class="control-group" id="text_box" style="display:<?php if($channelData->linkid != null){ echo 'none';}else{ echo 'block';}?> ">
                                <label class="control-label" for="focusedInput">详细内容</label>
                                <div class="controls">
                                    <textarea name="text" id="text_content"><?php echo $channelData->text; ?></textarea>
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
        if($("#channel_name").val().length == 0){
            notif({
                type: "warning",
                msg: "栏目名称不能为空",
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