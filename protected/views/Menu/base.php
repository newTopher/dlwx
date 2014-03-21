<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/tree_themes/SimpleTree.css"/>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 自定义菜单 </h2>

        </div>
        <div class="box-content">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>
                    <ol>
                        <li>您的公众平台帐号类型必须升级为服务号</li>
                        <li>最多创建3个一级菜单，每个一级菜单下最多可以创建5个二级菜单，菜单最多支持两层。</li>
                        <li>公众平台规定，菜单发布24小时后生效。您也可先取消关注，再重新关注即可马上看到菜单</li>
                    </ol>
                </div>'
            <div class="span4">
                <div class="st_tree">
                    <ul>
                        <?php foreach($menuData as $k=>$v): ?>
                        <li>
                            <span title=".icon  .icon-book-empty " class="icon icon-book-empty"></span>
                            <a href="#"><?php echo $v['oneLevel']['menu_name']; ?></a>
                            <a onclick="return confirm('您确定删除此一级菜单一级所属的二级菜单')" href="<?php echo Yii::app()->request->baseUrl; ?>/Menu/Delpmenu/id/<?php echo $v['oneLevel']['id']; ?>" class="btn btn-mini btn-danger">删除</a>
                        </li>
                        <?php if($v['two_menu'] != null): ?>
                            <ul>
                                <?php foreach($v['two_menu'] as $key=>$value): ?>
                                <li><span title=".icon  .icon-folder-collapsed " class="icon icon-folder-collapsed"></span>
                                    <a href="#"><?php echo $value['menu_name']; ?></a>
                                    <a onclick="return confirm('您确定删除此二级菜单')" href="<?php echo Yii::app()->request->baseUrl; ?>/Menu/Delsmenu/id/<?php echo $value['id']; ?>" class="btn btn-mini btn-danger">删除</a>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                        <?php endif; ?>

                       <?php endforeach; ?>
                   </ul>

                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/Menu/CreateMenu" style="margin-left: 20px;margin-top: 50px;" class="btn btn-small btn-primary">创建微信菜单</a>
                    <a onclick="return confirm('您确定删除微信上的自定义菜单?')" href="<?php echo Yii::app()->request->baseUrl; ?>/Menu/DelMenu" style="margin-left: 20px;margin-top: 50px;" class="btn btn-small btn-danger">删除微信菜单</a>
                </div>
            </div>
            <div class="span7">
                <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Menu/SetApp" class="form-horizontal">
                <fieldset>
                    <input type="hidden" name="id" value="2">
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">应用Id</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="wx_appid" type="text" value="<?php echo $wx_appid; ?>">
                            <p class="help-block"><span class="label label-important">注意</span>&nbsp;公众平台申请的Appid</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">应用秘钥</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="wx_appsecret" id="focusedInput" type="text" value="<?php echo $wx_appsecret; ?>">
                            <p class="help-block"><span class="label label-important">注意</span>&nbsp;公众平台申请的AppSecret</p>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">应用配置</button>
                        <button class="btn">取消</button>
                    </div>
                </fieldset>
                </form>
                <?php if(!empty($msg)):?>
                    <div class="msg_fade" id="ui_notifIt" class="info" style="background: deepskyblue; height: 60px; width: 100%; top: 0px; left: 0px;">
                        <p style="line-height: 60px;">
                            <b><?php echo $msg;?></b>
                        </p>
                    </div>
                <?php endif;?>
                <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Menu/AddMenu" class="form-horizontal">
                    <fieldset>
                        <input type="hidden" name="id" value="2">
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">菜单名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="menu_name" name="menu_name" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">菜单类型</label>
                            <div class="controls">
                                <select name="menu_type" id="menu_level">
                                    <option value="1">一级菜单</option>
                                    <option value="2">二级菜单</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" id="pid_menu" style="display: none;">
                            <label class="control-label">父级菜单</label>
                            <div class="controls">
                                <select name="pid">
                                    <?php foreach($menuOneLevelData as $k=>$v): ?>
                                    <option value="<?php echo $v->id; ?>"><?php echo $v->menu_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">菜单排序</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="num" name="num" type="text" value="">
                                <p class="help-block"><span class="label label-important">注意</span>&nbsp;数字越大菜单越靠前</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">回复消息类型</label>
                            <div class="controls">
                                <select name="menu_event" id="replayType">
                                    <option value="1">文字形式</option>
                                    <option value="2">链接形式</option>
                                    <option value="3">图文信息</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" id="textMsg" style="display: block;">
                            <label class="control-label">文本信息</label>
                            <div class="controls">
                                <textarea name="text" id="msgtext" style="width: 400px;height: 100px;"></textarea>
                            </div>
                        </div>
                        <div class="control-group" id="urlMsg" style="display: none;">
                            <label class="control-label">外部链接</label>
                            <div class="controls">
                                <select name="url" id="url_id">
                                    <option value="">请选择</option>
                                    <?php if($selectdata['urldata'] != null): ?>
                                        <?php foreach($selectdata['urldata'] as $k=>$v): ?>
                                            <option value="<?php echo $v->url; ?>" ><?php echo $v->url; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" id="singleNewsMsg" style="display: none;">
                            <label class="control-label">图文信息</label>
                            <div class="controls">
                                <select name="single_source_id" id="single_source_id">
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

                                        <?php if($selectdata['sourcedata'] != null): ?>
                                            <optgroup label="-----------素材模块----------"></optgroup>
                                            <?php foreach($selectdata['sourcedata'] as $k=>$v): ?>
                                                <option value="so_<?php echo $v->id; ?>"><?php echo $v->title; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" id="menu_btn" class="btn btn-primary">添加菜单</button>
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
    $("#menu_btn").click(function(){
        if(!$("#menu_name").val()){
            notif({
                type: "warning",
                msg: "菜单名称不能为空",
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if(!$("#num").val()){
            notif({
                type: "warning",
                msg: "排序为整数",
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#replayType").val() == 1){
            if(!$("#msgtext").val()){
                notif({
                    type: "warning",
                    msg: "文字消息不能为空",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        }
        if($("#replayType").val() == 2){
            if(!$("#url_id").val()){
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

        if($("#replayType").val() == 3){
            if(!$("#single_source_id").val()){
                notif({
                    type: "warning",
                    msg: "请选择图文信息",
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