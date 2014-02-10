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
            <h2><i class="icon-info-sign"></i> 填写代理商信息</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form method="post" action="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/Insert" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">代理商登录账号</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="email" id="focusedInput" type="text" value=""><span>*</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="password" id="focusedInput" type="password" value=""><span>*</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">确认密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="password" id="focusedInput" type="password" value=""><span>*</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">代理商名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="agent_name" id="focusedInput" type="text" value=""><span>*</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">固定电话</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="telephone" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">手机号码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="mobilephone" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"  for="selectError3">使用期限</label>
                            <div class="controls">
                                <select name="deadline" id="selectError3">
                                    <option>试用7天</option>
                                    <option>使用一年</option>
                                    <option>长期有效</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="appendedPrependedInput">充值金额</label>
                            <div class="controls">
                                <div class="input-prepend input-append">
                                    <span class="add-on">$</span><input name="money" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">添加</button>
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