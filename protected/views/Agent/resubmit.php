<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">重新提交用户信息</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>重新提交已注册公众账号用户信息</h2>

        </div>
        <div class="box-content">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">已注册公众号</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Agent/Doresubmit" class="form-horizontal">
                        <input class="input-xlarge focused" name="id" type="hidden" value="<?php echo $data->id; ?>">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信用户名</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="wx_account" id="focusedInput" type="text" value="<?php echo $data->wx_account; ?>"> <span class="help-inline">请填写已注册的公众号账号</span>
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
            </div>
        </div>
    </div>
</div>

</div>
</div>