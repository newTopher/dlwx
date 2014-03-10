<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">首页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">用户信息查看</a>
        </li>
    </ul>
</div>


<div class="row-fluid">
<div class="box span12">
<div class="box-header well">
    <h2>修改用户信息</h2>
    <div class="box-icon">
        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">用户登录信息</a></li>
        <li class=""><a href="#profile" data-toggle="tab">用户基础信息</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
            <form method="post" action="<?php echo Yii::app()->getBaseUrl(); ?>/User/PwdUpdate?id=<?php echo $list->id?>" class="form-horizontal">
                <input class="input-xlarge focused" name="token" type="hidden" value="">
                <input class="input-xlarge focused" name="puid" type="hidden" value="">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">登录用户名</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input"><?php echo $list->email?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">旧登录密码</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="opassword" id="focusedInput" type="password" value=""> <span class="help-inline">请填写旧的登录密码</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">新登录密码</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="npassword" id="focusedInput" type="password" value=""> <span class="help-inline">请填写新的登录密码</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">确认密码</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="rnpassword" id="focusedInput" type="password" value=""> <span class="help-inline">请重新确认新的登录密码</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <button class="btn">取消</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="profile">
            <h3>代理商信息</h3>
            <hr>
            <form class="form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">平台余额</label>
                        <div class="controls">
                            <span class="add-on"></span><input style="{width:100px;}" type="text" disabled="" placeholder="<?php echo $list->money?$list->money:0;?>" id="disabledInput" class="input-xlarge disabled">
                            <span class="add-on">.00</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">用户登录账号</label>
                        <div class="controls">
                            <input type="text" disabled="" placeholder="<?php echo $list->email;?>" id="disabledInput" class="input-xlarge disabled">
                            5657613427
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">用户登录账号</label>
                        <div class="controls">
                            <input type="text" disabled="" placeholder="<?php echo $list->email;?>" id="disabledInput" class="input-xlarge disabled">

                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">用户登录账号</label>
                        <div class="controls">
                            <input type="text" disabled="" placeholder="<?php echo $list->email;?>" id="disabledInput" class="input-xlarge disabled">

                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">APPID</label>
                        <div class="controls">
                            <?php if(!empty($list->wx_appid)):?>
                                <input type="text" disabled="" placeholder="<?php echo $list->wx_appid;?>" id="disabledInput" class="input-xlarge disabled">
                            <?php else:?>
                                <input class="input-xlarge focused" name="wx_appid" id="focusedInput" type="text" value="">
                            <span class="help-inline"><?php echo '请输入需要绑定的APPID';?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">APPSECRET</label>
                        <div class="controls">
                            <?php if(!empty($list->wx_appsecret)):?>
                            <input type="text" disabled="" placeholder="<?php echo $list->wx_appsecret;?>" id="disabledInput" class="input-xlarge disabled">
                            <?php else:?>
                            <input class="input-xlarge focused" name="wx_appsecret" id="focusedInput" type="text" value="">
                            <span class="help-inline"><?php echo '请输入需要绑定的APPSECRET';?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">用户公司名称</label>
                        <div class="controls">
                            <?php if(!empty($list->company_name)):?>
                            <input type="text" disabled="" placeholder="<?php echo $list->company_name;?>" id="disabledInput" class="input-xlarge disabled">
                            <?php else:?>
                            <input class="input-xlarge focused" name="company_name" id="focusedInput" type="text" value="">
                            <span class="help-inline"><?php echo '填写用户的公司名称，个人用户填写真实姓名';?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">联系手机</label>
                        <div class="controls">
                            <?php if(!empty($list->mobilephone)):?>
                            <input type="text" disabled="" placeholder="<?php echo $list->mobilephone;?>" id="disabledInput" class="input-xlarge disabled">
                            <?php else:?>
                            <input class="input-xlarge focused" name="mobilephone" id="focusedInput" type="text" value="">
                            <span class="help-inline"><?php echo '填写用户的手机号码;'?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">联系固话</label>
                        <div class="controls">
                            <?php if(!empty($list->tel)):?>
                            <input type="text" disabled="" placeholder="<?php echo $list->tel;?>" id="disabledInput" class="input-xlarge disabled">
                            <?php else:?>
                            <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                            <span class="help-inline"><?php echo '填写用户的联系固话;'?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">注册时间</label>
                        <div class="controls">
                            <input type="text" disabled="" placeholder="<?php echo date("Y-m-d H:i:s",$list->add_time);?>" id="disabledInput" class="input-xlarge disabled">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">上次更新时间</label>
                        <div class="controls">
                            <input type="text" disabled="" placeholder="<?php echo date("Y-m-d H:i:s",$list->update_time);?>" id="disabledInput" class="input-xlarge disabled">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">续费时间</label>
                        <div class="controls">
                            <input type="text" disabled="" placeholder="<?php echo date("Y-m-d H:i:s",$list->deadline_date);?>" id="disabledInput" class="input-xlarge disabled">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <button class="btn">取消</button>
                    </div>


                </fieldset>

                <h3>微信运营人员资料</h3>
                <hr>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">运营者姓名</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">身份证号码</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">手机号码</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">职务</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">运营者手持证件照片</label>
                        <div class="controls">
                            <div class="uploader" id="uniform-fileInput">
                                <input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;">
                                <span class="filename"></span><span class="action"></span>
                            </div>
                            <p class="help-block"><span class="label label-info">注意</span>&nbsp;身份证上的信息必须清晰可见,不得作任何修改(支持格式jpg,jpeg,bmp,gif,大小5M以内)</p>
                        </div>

                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">授权运营书</label>
                        <div class="controls">
                            <div class="uploader" id="uniform-fileInput">
                                <input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;">
                                <span class="filename"></span><span class="action"></span>
                            </div>
                            <p class="help-block">请下载&nbsp;<a href="" class="btn btn-small"><i class="icon-download-alt"></i>运营授权书</a>&nbsp;,安装要求填好盖好章然后扫描上传(支持格式jpg,jpeg,bmp,gif,大小5M以内)</p>
                        </div>

                    </div>

                </fieldset>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">提交</button>
                    <button class="btn">取消</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>