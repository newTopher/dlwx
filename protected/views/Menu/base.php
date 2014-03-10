<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/tree_themes/SimpleTree.css"/>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 自定义菜单 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>
                    <ol>
                        <li>您的公众平台帐号类型必须升级为服务号</li>
                        <li>最多创建3个一级菜单，每个一级菜单下最多可以创建5个二级菜单，菜单最多支持两层。</li>
                        <li>公众平台规定，菜单发布24小时后生效。您也可先取消关注，再重新关注即可马上看到菜单</li>
                    </ol>
                </div>
            </div>'
            <div class="span4">
                <div class="st_tree">
                    <ul>
                        <?php foreach($menuData as $k=>$v): ?>
                        <li>
                            <span title=".icon  .icon-book-empty " class="icon icon-book-empty"></span>
                            <a href="#"><?php echo $v['oneLevel']['menu_name']; ?></a>
                            <button class="btn btn-mini btn-primary">修改</button>
                            <button class="btn btn-mini btn-danger">删除</button>
                        </li>
                        <?php if($v['two_menu'] != null): ?>
                            <ul>
                                <?php foreach($v['two_menu'] as $key=>$value): ?>
                                <li><span title=".icon  .icon-folder-collapsed " class="icon icon-folder-collapsed"></span>
                                    <a href="#"><?php echo $value['menu_name']; ?></a>
                                    <button class="btn btn-mini btn-primary">修改</button>
                                    <button class="btn btn-mini btn-danger">删除</button>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                        <?php endif; ?>

                    <?php endforeach; ?>
                   </ul>

                    <button style="margin-left: 20px;margin-top: 50px;" class="btn btn-small btn-primary">创建微信菜单</button>
                    <button style="margin-left: 20px;margin-top: 50px;" class="btn btn-small btn-danger">删除微信菜单</button>
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
                <?php if($msg != ''): ?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>错误提示!</strong>   <?php echo urldecode($msg);?>.
                    </div>
                <?php endif; ?>
                <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Menu/AddMenu" class="form-horizontal">
                    <fieldset>
                        <input type="hidden" name="id" value="2">
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">菜单名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="menu_name" type="text" value="">
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
                                <input class="input-xlarge focused" name="num" type="text" value="">
                                <p class="help-block"><span class="label label-important">注意</span>&nbsp;数字越大菜单越靠前</p>
                            </div>
                        </div>
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
                            <button type="submit" class="btn btn-primary">添加菜单</button>
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