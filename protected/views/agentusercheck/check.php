<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">审核信息</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>审核信息绑定微信</h2>

        </div>
        <div class="box-content">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">已注册公众号信息绑定</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <form method="post" action="<?php echo Yii::app()->requet->baseUrl; ?>/AgentUserCheck/Docheck" class="form-horizontal">
                        <input class="input-xlarge focused" name="id" type="hidden" value="<?php echo $data->id; ?>">
                        <input class="input-xlarge focused" name="puid" type="hidden" value="<?php echo $data->puid; ?>">
                        <input class="input-xlarge focused" name="token" type="hidden" value="<?php echo $data->token; ?>">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信用户名</label>
                                <div class="controls">
                                    <input class="input-xlarge uneditable-input" name="wx_account" id="focusedInput" type="text" value="<?php echo $data->wx_account; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">微信密码</label>
                                <div class="controls">
                                    <input class="input-xlarge uneditable-input" name="wx_password" id="focusedInput" type="text" value="<?php echo $data->wx_password; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">验证url</label>
                                <div class="controls">
                                    <h3><small><?php echo 'http://www.wapwei.com/api/t/'.$data->token; ?></small></h3>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">验证token</label>
                                <div class="controls">
                                    <h3><small><?php echo $data->token; ?></small></h3>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError3">绑定结果</label>
                                <div class="controls">
                                    <select name="status" id="selectError3">
                                        <option value="1">绑定成功</option>
                                        <option value="2">绑定失败</option>
                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="selectError3">失败原因</label>
                                <div class="controls">
                                    <select name="mark" id="selectError3">
                                        <option value="">请选择失败原因</option>
                                        <option value="微信公众账号不存在">微信公众账号不存在</option>
                                        <option value="微信公众账号密码错误">微信公众账号密码错误</option>
                                        <option value="微信公众账号还未通过认证">微信公众账号还未通过认证</option>
                                    </select>
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