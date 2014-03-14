<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 添加栏目 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                    <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/AddChannel" class="form-horizontal">
                        <fieldset>
                            <input class="input-xlarge focused" name="pid" type="hidden" value="<?php echo $pid; ?>">
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">栏目名称</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="channel_name" name="name" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">使用链接形式</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="url" id="url_check" type="checkbox" value="1">
                                    <select name="linkid" id="url_select" style="display: none;">
                                        <option value="">请选择</option>
                                        <option value="w_1">微官网</option>
                                        <!--
                                        <optgroup label="-------------平台栏目------------"></optgroup>
                                        <?php foreach($selectdata['channel'] as $key=>$val): ?>
                                            <option value="c_<?php echo $val['one']['id'];?>"><?php echo $val['one']['name'];?></option>
                                            <?php if(count($val['sub_data']) != 0):?>
                                                <?php foreach($val['sub_data'] as $k=>$v): ?>
                                                    <option value="c_<?php echo $v->id;?>">|____<?php echo $v->name;?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        -->
                                        <?php if($selectdata['member'] != null): ?>
                                            <optgroup label="-------------会员模块------------"></optgroup>
                                            <option value="m_<?php echo $selectdata['member']->id; ?>" >会员卡</option>
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
                                                <option value="g_<?php echo $v->id; ?>" ><?php echo $v->name; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                        <?php if($selectdata['zhuandata'] != null): ?>
                                            <optgroup label="-----------幸运大转盘活动----------"></optgroup>
                                            <?php foreach($selectdata['zhuandata'] as $k=>$v): ?>
                                                <option value="z_<?php echo $v->id; ?>" ><?php echo $v->name; ?></option>
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
                                                <option value="t_<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                    &nbsp; &nbsp;&nbsp;&nbsp;<span class="label label-important">注意</span>&nbsp;<font color='green'>使用链接形式将不能填写栏目内容</font>
                                </div>

                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">是否弹出二级菜单</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="is_sub_show" type="checkbox" value="1">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-important">注意</span>&nbsp;<font color='green'>当前栏目在微官网上是否显示二级菜单</font>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">是否在菜单上显示</label>

                                <div class="controls">
                                    <input class="input-xlarge focused" name="is_show" id="focusedInput" type="checkbox" value="1">
                                    &nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-important">注意</span>&nbsp;<font color='green'>当前栏目是否在为官网下导航栏显示</font>
                                </div>
                            </div>
                            <div class="control-group" id="text_box">
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