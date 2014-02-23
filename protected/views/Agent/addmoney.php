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
                <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl.'Agent/addMoney';?>">
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
                            <label class="control-label" for="date01">付款日期</label>
                            <div class="controls">
                                <input type="text" name="date" class="datepicker" id="date01" value="02/16/12">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">充值金额</label>
                            <div class="controls">
                                <input type="text" value="" id="focusedInput" name="addmoney" class="input-xlarge focused">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">交易号</label>
                            <div class="controls">
                                <input type="text" value="" id="focusedInput" name="number" class="input-xlarge focused">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="selectError3" name="pay_type" class="control-label">支付方式</label>
                            <div class="controls">
                                <select id="selectError3">
                                    <option>支付宝</option>
                                    <option>中国银行</option>
                                    <option>建设银行</option>
                                    <option>工商银行</option>
                                    <option>农业银行</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">充值</button>
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