<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 个人设置</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <form action="<?php echo Yii::app()->getBaseUrl(); ?>/User/update" class="form-horizontal">
                    <input type="hidden" name="id" value="<?php echo $userdata->id; ?>">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">公司名称</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input"><?php echo $userdata->company_name; ?></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">联系人</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="name" id="focusedInput" type="text" value="<?php echo $userdata->name; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">电话号码</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="<?php echo $userdata->tel; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">所属行业</label>
                            <div class="controls">
                                <select id="selectError3">
                                    <option value="1">IT</option>
                                    <option value="2">电子商务</option>
                                    <option value="3">房产</option>
                                    <option value="4">餐饮</option>
                                    <option value="5">服务</option>
                                </select>
                            </div>
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