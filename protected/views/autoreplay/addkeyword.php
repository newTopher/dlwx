<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>添加关键词</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <form action="<?php echo Yii::app()->getBaseUrl(); ?>/AutoReplay/insertKeyword" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="">关键词名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="keywords" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">匹配类型</label>
                            <div class="controls">
                                <select name="preg_type">
                                    <option value="1">全匹配</option>
                                    <option value="2">模糊匹配</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">回复类型</label>
                            <div class="controls">
                                <select name="source_type">
                                    <option value="1">文本信息</option>
                                    <option value="2">单图文信息</option>
                                    <option value="3">多图文信息</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">消息内容</label>
                            <div class="controls">
                                <select name="source_id" id="selectError3">
                                    <option value="1">微官网</option>
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