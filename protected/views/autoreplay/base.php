<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 自动回复管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">

                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">首次关注回复</a></li>
                    <li class=""><a href="#profile" data-toggle="tab">默认回复</a></li>
                    <li class=""><a href="#slider" data-toggle="tab">关键词回复</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户第一次关注您的公众账号时自动回复的消息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Menuupdate" class="form-horizontal">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="selectError3">展现类型</label>
                                    <div class="controls">
                                        <select id="">
                                            <option>活动</option>
                                            <option>文字</option>
                                            <option>图文</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="selectError3">选择活动</label>
                                    <div class="controls">
                                        <select id="">
                                            <option>活动</option>
                                            <option>文字</option>
                                            <option>图文</option>
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
                    <div class="tab-pane fade" id="profile">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户输入无效的关键词时默认回复信息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Menuupdate" class="form-horizontal">
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
                        <a href="<?php echo Yii::app()->getBaseUrl(); ?>/AutoReplay/AddKeyword" class="btn btn-small btn-primary">添加关键词</a>
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