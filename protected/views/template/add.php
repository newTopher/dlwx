<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-picture"></i>添加模版</h2>
            <?php if(Yii::app()->request->getParam('msg') ){
                $msg=Yii::app()->request->getParam('msg');
            echo "<span class='label label-warning' style='width:100%;margin-left:10px;'>".$msg."</span>";
        }?>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
            <div class="box-content">

                    <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo Yii::app()->getBaseUrl()."/template/add"?>" method="post">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="selectError3">模版分类</label>
                                <div class="controls">
                                    <select id="selectError3" name="trade_name">
                                        <option>万普标准版</option>
                                        <option>万普微餐饮</option>
                                        <option>万普微汽车</option>
                                        <option>万普微房产</option>
                                        <option>万普微婚纱</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">模版文件名</label>
                                <div class="controls">
                                    <input type="text" id="focusedInput" name="template_name">
                                    <span class="help-inline">请输入应上传的文件夹名称</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">模版名称</label>
                                <div class="controls">
                                    <input type="text" id="focusedInput" name="china_name">
                                    <span class="help-inline">请输入对应的模版名称</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">模版单价</label>
                                <div class="controls">
                                    <input type="text" id="focusedInput" name="money">
                                    <span class="help-inline">请输入模版的基础价格</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">模版展示图片选择</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input name="show_img" class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">当前未选文件</span><span class="action">选择文件</span></div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fileInput">模版展示缩略图选择</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input name="nail_img" class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">当前未选文件</span><span class="action">选择文件</span></div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError3">状态</label>
                                <div class="controls">
                                    <select id="selectError3" name="status">
                                        <option>开启</option>
                                        <option>关闭</option>
                                    </select>
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