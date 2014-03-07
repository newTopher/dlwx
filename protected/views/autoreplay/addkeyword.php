<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>添加关键词</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form action="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/insertKeyword" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">关键词名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="keywords" id="keywords" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">匹配类型</label>
                            <div class="controls">
                                <select name="preg_type">
                                    <option value="1">全匹配</option>
                                    <option value="2">模糊匹配</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">展现类型</label>
                            <div class="controls">
                                <select name="source_type" id="replayType">
                                    <option value="1">文字消息</option>
                                    <option value="2">图文消息</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="urlMsg" style="display: none;">
                            <label class="control-label">选择活动</label>
                            <div class="controls">
                                <select name="source_id" id="source_id">
                                    <option value="">请选择</option>
                                    <optgroup label="----------平台业务模块----------"></optgroup>
                                    <option value="t_1">微官网</option>
                                    <option value="g_1">刮刮卡</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="textMsg" style="display: block;">
                            <label class="control-label">文字信息</label>
                            <div class="controls">
                                <textarea id="text_first" name="text" style="width: 400px;height: 100px;"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" id="keyword_btn" class="btn btn-primary">保存</button>
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
            }
            if(type == 2){
                $("#textMsg").hide();
                $("#urlMsg").show();
            }

        });

        $("#keyword_btn").click(function(){
            var type = $("#replayType").val();
            if($("#keywords").val().length == 0){
                notif({
                    type: "warning",
                    msg: "关键词名称不能为空",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
            if(type == 1){
                if($("#text_first").val().length == 0){
                    notif({
                        type: "warning",
                        msg: "请输入匹配关键词后的文字信息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }else if(type == 2){
                if($("#source_id").text().length == 0){
                    notif({
                        type: "warning",
                        msg: "请选择图文消息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }
        });
    });
</script>


