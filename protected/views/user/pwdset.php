<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 修改密码 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/User/pwdupdate"" class="form-horizontal">
                    <fieldset>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">旧密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="opassword" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">新密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="npassword" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">再次输入新密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="rnpassword" id="focusedInput" type="text" value="">
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