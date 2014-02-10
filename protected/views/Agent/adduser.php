<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">添加用户</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>填写用户信息</h2>

        </div>
        <div class="box-content">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">已注册公众号</a></li>
                <li class=""><a href="#profile" data-toggle="tab">未注册公众号</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <form method="post" action="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/AddWexinAccount" class="form-horizontal">
                        <input class="input-xlarge focused" name="token" type="hidden" value="<?php echo $token; ?>">
                        <input class="input-xlarge focused" name="puid" type="hidden" value="<?php echo $puid; ?>">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信用户名</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="wx_account" id="focusedInput" type="text" value=""> <span class="help-inline">请填写已注册的公众号账号</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信密码</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="wx_password" id="focusedInput" type="password" value=""> <span class="help-inline">请填写已注册的公众号账号密码</span>
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
                    <h3>企业资料</h3>
                    <hr>
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">企业名称</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">企业邮箱</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">企业地址</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">邮编</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">营业执照注册号</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">注册资本</label>
                                <div class="controls">
                                    <div class="input-prepend input-append">
                                        <span class="add-on">￥</span><input id="appendedPrependedInput" size="18" type="text"><span class="add-on">万元</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">组织机构代码</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                                </div>
                            </div>
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