<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>添加关键词</h2>

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
                                    <option value="w_1" >微官网</option>
                                    <optgroup label="-------------平台栏目------------"></optgroup>
                                    <?php foreach($selectdata['channel'] as $key=>$val): ?>
                                        <option value="c_<?php echo $val['one']['id'];?>" ><?php echo $val['one']['name'];?></option>
                                        <?php if(count($val['sub_data']) != 0):?>
                                            <?php foreach($val['sub_data'] as $k=>$v): ?>
                                                <option value="c_<?php echo $v->id;?>" >|____<?php echo $v->name;?></option>
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
                                            <option value="s_<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php if($selectdata['guaguadata'] != null): ?>
                                        <optgroup label="-------------刮刮卡活动------------"></optgroup>
                                        <?php foreach($selectdata['guaguadata'] as $k=>$v): ?>
                                            <option value="g_<?php echo $v->id; ?>" ><?php echo $v->name; ?></option>
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
                                            <option value="n_<?php echo $v->id; ?>" ><?php echo $v->name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php if($selectdata['tuandata'] != null): ?>
                                        <optgroup label="-----------微团购模块----------"></optgroup>
                                        <?php foreach($selectdata['tuandata'] as $k=>$v): ?>
                                            <option value="t_<?php echo $v->id; ?>" ><?php echo $v->name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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


