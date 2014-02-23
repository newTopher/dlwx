<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 推送消息 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">

                <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Menuupdate" class="form-horizontal">
                    <input type="hidden" name="openid" value="<?php echo $wxUserData->openid;?>">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">回复消息类型</label>
                            <div class="controls">
                                <select name="menu_event" id="replayType">
                                    <option value="1">文字形式</option>
                                    <option value="2">链接形式</option>
                                    <option value="3">单图文信息</option>
                                    <option value="4">多图文信息</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" id="textMsg" style="display: block;">
                            <label class="control-label">文本信息</label>
                            <div class="controls">
                                <textarea name="text" style="width: 400px;height: 100px;"></textarea>
                            </div>
                        </div>
                        <div class="control-group" id="urlMsg" style="display: none;">
                            <label class="control-label">外部链接</label>
                            <div class="controls">
                                <select name="url_id">
                                    <option value="">请选择</option>
                                    <option value="1">微官网</option>
                                    <option value="2">活动页面</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" id="singleNewsMsg" style="display: none;">
                            <label class="control-label">单图文信息</label>
                            <div class="controls">
                                <select name="single_source_id">
                                    <option value="">请选择</option>
                                    <option value="1">最新活动马上要开始了</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" id="mutilNewsMsg" style="display: none;">
                            <label class="control-label">多图文信息</label>
                            <div class="controls">
                                <select name="mutil_source_id">
                                    <option value="">请选择</option>
                                    <option value="1">最新活动马上要开始了</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">推送</button>
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

<script type="text/javascript">
    $(function(){
        $("#replayType").change(function(){
            var type = $(this).val();
            if(type == 1){
                $("#textMsg").show();
                $("#urlMsg").hide();
                $("#singleNewsMsg").hide();
                $("#mutilNewsMsg").hide();
            }
            if(type == 2){
                $("#textMsg").hide();
                $("#urlMsg").show();
                $("#singleNewsMsg").hide();
                $("#mutilNewsMsg").hide();
            }
            if(type == 3){
                $("#textMsg").hide();
                $("#urlMsg").hide();
                $("#singleNewsMsg").show();
                $("#mutilNewsMsg").hide();
            }
            if(type == 4){
                $("#textMsg").hide();
                $("#urlMsg").hide();
                $("#singleNewsMsg").hide();
                $("#mutilNewsMsg").show();
            }
        });

        $("#menu_level").change(function(){
            var type = $(this).val();
            if(type == 1){
                $("#pid_menu").hide();
            }
            if(type == 2){
                $("#pid_menu").show();
            }
        });
    });
</script>