<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
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
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <form method="post" action="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/insert" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">账号</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="email" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">密码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="password" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">代理商名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="agent_name" id="focusedInput" type="text" value="">
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