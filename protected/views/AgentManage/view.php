<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">首页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">添加代理商</a>
        </li>
    </ul>
</div>


<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>填写代理商信息</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">登录信息</a></li>
                <li class=""><a href="#profile" data-toggle="tab">代理商信息</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <form method="post" action="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/ChangePassword?id=<?php echo 18?>" class="form-horizontal">
                        <input class="input-xlarge focused" name="token" type="hidden" value="">
                        <input class="input-xlarge focused" name="puid" type="hidden" value="">
                        <fieldset>
                            <?php
                            $e=Yii::app()->request->getParam('e');
                            if($e){
                                $e='提交出错';
                            }else{
                                $e=null;
                            }
                            switch($e){
                                case 3:$e="请确认您的两次输入的新密码一致，请重新修改！";break;
                                case 1:$e="密码修改成功！";break;
                                case 2:$e="您的旧密码输入有误，请确认后再输！";break;
                            }
                            ?>
                            <span class="help-inline" style="{color:red;}"><?php echo $e; ?></span>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">登录用户名</label>
                                <div class="controls">
                                    <span class="input-xlarge uneditable-input"><?php echo $list->email?></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">旧登录密码</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="old_password" id="focusedInput" type="password" value=""> <span class="help-inline">请填写旧的登录密码</span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">新登录密码</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="wx_password" id="focusedInput" type="password" value=""> <span class="help-inline">请填写新的登录密码</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">确认密码</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="wx_password1" id="focusedInput" type="password" value=""> <span class="help-inline">请重新确认新的登录密码</span>
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
                                    <span class="add-on">￥</span><input style="{width:100px;}" type="text" disabled="" placeholder="<?php echo $list->money;?>" id="disabledInput" class="input-xlarge disabled">
                                    <span class="add-on">.00</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">代理商登录账号</label>
                                <div class="controls">
                                <input type="text" disabled="" placeholder="<?php echo $list->email;?>" id="disabledInput" class="input-xlarge disabled">

                                </div>
                            </div>
                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">代理商名称</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="<?php echo $list->agent_name;?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">联系手机</label>
                                <div class="controls">

                                    <input type="text" value="<?php echo $list->mobilephone;?>" id="focusedInput" class="input-xlarge focused">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">联系固话</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="<?php echo $list->telephone;?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">注册时间</label>
                                <div class="controls">
                                    <input type="text" disabled="" placeholder="<?php echo date("Y-m-d H:i:s",$list->login_time);?>" id="disabledInput" class="input-xlarge disabled">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">上次更新时间</label>
                                <div class="controls">
                                    <input type="text" disabled="" placeholder="<?php echo date("Y-m-d H:i:s",$list->update_time);?>" id="disabledInput" class="input-xlarge disabled">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="optionsCheckbox2" class="control-label">代理续费时间</label>
                                <div class="controls">
                                    <input type="text" disabled="" placeholder="<?php echo date("Y-m-d H:i:s",$list->end_time);?>" id="disabledInput" class="input-xlarge disabled">
                                </div>
                            </div>
                            <li class="thumbnail" id="image-2">
                                <a href="img/gallery/2.jpg" title="Sample Image 2" style="background:url(img/gallery/thumbs/2.jpg)" class="cboxElement"><img alt="Sample Image 2" src="img/gallery/thumbs/2.jpg" class="grayscale" style="display: block;"></a>
                            </li>

                            <div class="control-group">
                                <label class="control-label" for="fileInput">印业执照副本扫描件</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput">
                                        <input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;">
                                        <span class="filename"></span><span class="action"></span>
                                    </div>
                                    <p class="help-block"><span class="label label-info">注意</span>&nbsp;请上传营业执照清晰彩色原件扫面件货数码照，在有效期内且年检章齐全，有中国大陆工商局颁发(支持格式jpg,jpeg,bmp,gif,大小5M以内)</p>
                                </div>

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