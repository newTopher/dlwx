<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 大转盘活动 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">

                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">基本信息</a></li>
                    <li class=""><a href="#profile" data-toggle="tab">提示信息</a></li>
                    <li class=""><a href="#slider" data-toggle="tab">奖品设置</a></li>
                    <li class=""><a href="#set" data-toggle="tab">规则配置</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>活动创建以后将无法修改奖品数请合理配置.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Menuupdate" class="form-horizontal">
                            <fieldset>

                                <div class="control-group">
                                    <label class="control-label" for="">活动名称</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" name="num" type="text" value="">
                                        <p class="help-block"><span class="label label-important">注意</span>&nbsp;此次活动的名称</p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="selectError3">活动结束方式</label>
                                    <div class="controls">
                                        <select id="">
                                            <option>手动设置</option>
                                            <option>活动中奖名额已满</option>
                                            <option>活动结束时间</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="date01">Date input</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge datepicker hasDatepicker" id="date01" value="02/16/12">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="">活动最高参与人数</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" name="num" type="text" value="">
                                        <p class="help-block"><span class="label label-important">注意</span>&nbsp;超出将无法参与活动并提示用户参与活动用户名额有限,默认为不做限制</p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="appendedInput">允许参与总次数</label>
                                    <div class="controls">
                                        <div class="input-append">
                                            <input id="appendedInput" size="16" type="text"><span class="add-on">次/人</span>
                                            <p class="help-block"><span class="label label-important">注意</span>&nbsp;同一用户可反复参与本活动的次数限制</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="appendedInput">每天允许参与次数</label>
                                    <div class="controls">
                                        <div class="input-append">
                                            <input id="" size="16" type="text"><span class="add-on">次/人</span>
                                            <p class="help-block"><span class="label label-important">注意</span>&nbsp;同一用户每天可以参与本活动的次数</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="">活动图片</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" name="num" type="text" value="">  <a class="btn">选择图片</a>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="">状态</label>
                                    <div class="controls">
                                        <input data-no-uniform="true" type="checkbox" class="iphone-toggle">
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户输入无效的关键词时默认回复信息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Menuupdate" class="form-horizontal">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="selectError3">展现类型</label>
                                    <div class="controls">
                                        <select id="selectError3">
                                            <option>文字</option>
                                            <option>活动</option>
                                            <option>图文</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="selectError3">文本信息</label>
                                    <div class="controls">
                                        <textarea style="width: 400px;height: 100px;"></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="slider">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户在微信公众号输入相应的关键词,如果能和如下功能相匹配的内容.
                        </div>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/AddKeyword" class="btn btn-small btn-primary">添加关键词</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>关键词</th>
                                <th>匹配类型</th>
                                <th>回复类型</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="set">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户在微信公众号输入相应的关键词,如果能和如下功能相匹配的内容.
                        </div>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/AddKeyword" class="btn btn-small btn-primary">添加关键词</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>关键词</th>
                                <th>匹配类型</th>
                                <th>回复类型</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
</div>

<script type="text/javascript">
    $('form[name="form"]').validator({
        stopOnError: false,
        timely: false,
        messages: {
            required: "该字段内容不能为空哦"
        },
        fields: {
            'webname_title': 'required;',
            'tel': 'required;',
            'replay_keywords': 'required;',
            'msg_title': 'required;',
            'msg_description': 'required;'
        }
    });
</script>