<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">账户设置</a>
        </li>
    </ul>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 账号信息</h2>
        </div>
        <div class="box-content">
            <div class="box-content">
                <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl.'/agent/pwdSet';?>">

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">旧密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="oldPass" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">新密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="newPass" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">再次输入新密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="newpass1" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">修改</button>
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