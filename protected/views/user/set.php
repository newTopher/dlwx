<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 个人设置</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form action="<?php echo Yii::app()->request->baseUrl; ?>/User/update" class="form-horizontal">
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
                            <label class="control-label" for="focusedInput">联系方式</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="tel" id="focusedInput" type="text" value="<?php echo $userdata->tel; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">行业</label>
                            <div class="controls">
                                <select id="selectError3" name="trade_id">
                                    <option value="1" <?php if($userdata->trade_id == 1){ echo 'selected'; }?>>基础行业</option>
                                    <option value="2" <?php if($userdata->trade_id == 2){ echo 'selected'; }?>>餐饮</option>
                                    <option value="3" <?php if($userdata->trade_id == 3){ echo 'selected'; }?>>旅游</option>
                                    <option value="3" <?php if($userdata->trade_id == 4){ echo 'selected'; }?>>婚庆</option>
                                    <option value="3" <?php if($userdata->trade_id == 5){ echo 'selected'; }?>>教育</option>
                                    <option value="3" <?php if($userdata->trade_id == 6){ echo 'selected'; }?>>汽车</option>
                                    <option value="3" <?php if($userdata->trade_id == 7){ echo 'selected'; }?>>酒店</option>
                                    <option value="3" <?php if($userdata->trade_id == 8){ echo 'selected'; }?>>房产</option>
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