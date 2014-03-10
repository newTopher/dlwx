<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 自动回复管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">

                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">首次关注回复</a></li>
                    <li class=""><a href="#profile" data-toggle="tab">默认回复</a></li>
                    <li class=""><a href="#slider" data-toggle="tab">关键词回复</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户第一次关注您的公众账号时自动回复的消息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/AddKeyword" class="form-horizontal">
                            <input type="hidden" name="type" value="1">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">展现类型</label>
                                    <div class="controls">
                                        <select name="source_type" id="replayType">
                                            <option value="1" <?php if($firstData != null){ if($firstData->type == 1){ echo 'selected';}}?>>文字消息</option>
                                            <option value="2" <?php if($firstData != null){ if($firstData->type == 2){ echo 'selected';}}?>>图文消息</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="urlMsg" style="display: <?php if($firstData != null){ if($firstData->type == 1){ echo 'none';}else{ echo 'block'; }}?>;">
                                    <label class="control-label">选择活动</label>
                                    <div class="controls">
                                        <select name="source_id" id="source_id">
                                            <option value="">请选择</option>
                                            <optgroup label="----------平台业务模块----------"></optgroup>
                                            <option value="t_1" <?php if($firstData != null){ if($firstData->source_id == 't_1'){ echo 'selected';}} ?>>微官网</option>
                                            <option value="g_1" <?php if($firstData != null){ if($firstData->source_id == 'g_1'){ echo 'selected';}} ?>>刮刮卡</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="textMsg" style="display: <?php if($firstData != null){ if($firstData->type == 1){ echo 'block';}else{ echo 'none'; }}?>;">
                                    <label class="control-label">文字信息</label>
                                    <div class="controls">
                                        <textarea id="text_first" name="text" style="width: 400px;height: 100px;"><?php if($firstData != null){ echo $firstData->text; }; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" id="first_btn" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户输入无效的关键词时默认回复信息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/AddNouseKeyword" class="form-horizontal">
                            <input type="hidden" name="type" value="2">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" >展现类型</label>
                                    <div class="controls">
                                        <select name="source_type" id="replayType2">
                                            <option value="1" <?php if($nouseData != null){ if($nouseData->type == 1){ echo 'selected';}}?>>文字消息</option>
                                            <option value="2" <?php if($nouseData != null){ if($nouseData->type == 2){ echo 'selected';}}?>>图文消息</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="urlMsg2" style="display: <?php if($nouseData != null){ if($nouseData->type == 1){ echo 'none';}else{ echo 'block'; }}?>;">
                                    <label class="control-label">选择活动</label>
                                    <div class="controls">
                                        <select name="source_id" id="source_id2">
                                            <option value="">请选择</option>
                                            <optgroup label="----------平台业务模块----------"></optgroup>
                                            <option value="t_1" <?php if($nouseData != null){ if($nouseData->source_id == 't_1'){ echo 'selected';}} ?>>微官网</option>
                                            <option value="g_1" <?php if($nouseData != null){ if($nouseData->source_id == 'g_1'){ echo 'selected';}} ?>>刮刮卡</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="textMsg2" style="display: <?php if($nouseData != null){ if($nouseData->type == 1){ echo 'block';}else{ echo 'none'; }}?>;;">
                                    <label class="control-label">文字信息</label>
                                    <div class="controls">
                                        <textarea id="text_secend" name="text" style="width: 400px;height: 100px;"><?php if($nouseData != null){ echo $nouseData->text; }; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" id="sencend_btn" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="slider">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户在微信公众号输入相应的关键词,如果能和如下功能相匹配的内容.
                        </div>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/Addkeywords" class="btn btn-small btn-primary">添加关键词</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>关键词</th>
                                <th>匹配类型</th>
                                <th>回复类型</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($keywordsData as $k=>$v): ?>
                                <tr>
                                    <td><?php echo $v->id; ?></td>
                                    <td><?php echo $v->keywords; ?></td>
                                    <td><?php if($v->preg_type == 1){ echo '全匹配'; }else{ echo '模糊匹配';} ?></td>
                                    <td><?php if($v->source_type == 1){ echo '文字信息'; }else{ echo '图文信息'; } ?></td>
                                    <td>
                                        <a onclick="return confirm('确定要删除此个关键词吗？')" href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/DelKeyword/id/<?php echo $v->id; ?>" class="btn btn-mini btn-danger">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

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

        $("#first_btn").click(function(){
            var type = $("#replayType").val();
            if(type == 1){
                if($("#text_first").val().length == 0){
                    notif({
                        type: "warning",
                        msg: "请输入首次关注的文字信息",
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

        $("#replayType2").change(function(){
            var type = $(this).val();
            if(type == 1){
                $("#textMsg2").show();
                $("#urlMsg2").hide();
            }
            if(type == 2){
                $("#textMsg2").hide();
                $("#urlMsg2").show();
            }

        });

        $("#sencend_btn").click(function(){
            var type = $("#replayType").val();
            if(type == 1){
                if($("#text_secend").val().length == 0){
                    notif({
                        type: "warning",
                        msg: "请输入默认回复的文字信息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }else if(type == 2){
                if($("#sencend_btn").text().length == 0){
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