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
            <h2><i class="icon-info-sign"></i> 账号信息</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">账户名</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"><?php echo $list->email;?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">公司名称</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"><?php echo $list->agent_name;?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">余额</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"><?php echo $list->money;?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">联系电话</label>
                            <?php if(!empty($list->telephone)):?>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"><?php echo $list->telephone;?></span>
                            </div>
                            <?php else:?>
                            <div class="controls">
                                <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                            </div>
                             <?php endif;?>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">手机</label>
                            <?php if(!empty($list->mobilephone)):?>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"><?php echo $list->mobilephone;?></span>
                            </div>
                            <?php else:?>
                            <div class="controls">
                                <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="">
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">保存</button>
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