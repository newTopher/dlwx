<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-picture"></i>添加模版</h2>
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
                                <label class="control-label" for="selectError1">绑定功能</label>
                                <div class="controls">
                                    <select name="attr_name" id="selectError1" multiple="" data-rel="chosen" style="display: none;" class="chzn-done">
                                        <option>大转盘</option>
                                        <option selected="">刮刮卡</option>
                                        <option>小游戏</option>
                                        <option>微订座</option>
                                    </select>
                                    <div id="selectError1_chzn" class="chzn-container chzn-container-multi" style="width: 220px;">
                                        <ul class="chzn-choices">
                                            <li class="search-choice" id="selectError1_chzn_c_1">
                                            <span>Option 2</span>
                                                <a href="javascript:void(0)" class="search-choice-close" rel="1"></a>
                                            </li>
                                            <li class="search-choice" id="selectError1_chzn_c_3">
                                                <span>Option 4</span>
                                                <a href="javascript:void(0)" class="search-choice-close" rel="3"></a>
                                            </li><li class="search-field"><input type="text" value="Select Some Options" class="" autocomplete="off" style="width: 25px;"></li>
                                        </ul>
                                        <div class="chzn-drop" style="left: -9000px; width: 218px; top: 29px;">
                                            <ul class="chzn-results"><li id="selectError1_chzn_o_0" class="active-result" style="">Option 1</li>
                                                <li id="selectError1_chzn_o_1" class="result-selected" style="">Option 2</li>
                                                <li id="selectError1_chzn_o_2" class="active-result" style="">Option 3</li>
                                                <li id="selectError1_chzn_o_3" class="result-selected" style="">Option 4</li>
                                                <li id="selectError1_chzn_o_4" class="active-result" style="">Option 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">模版名称</label>
                                <div class="controls">
                                    <input type="text" id="focusedInput" name="template_name">
                                    <span class="help-inline">请输入对应的模版名称</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="appendedPrependedInput">模版单价</label>
                                <div class="controls">
                                    <div class="input-prepend input-append">
                                        <span class="add-on">￥</span><input name="money" id="appendedPrependedInput" size="16" type="text" ><span class="add-on">.00</span>
                                    </div>
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
                                <label class="control-label" for="fileInput">模版文件选择</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input name="files" class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">当前未选文件</span><span class="action">选择文件</span></div>
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