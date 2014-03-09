<link id="bs-css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 素材管理 </h2>
        </div>
        <div class="box-content">
            <div class="box-content">
                <span class="create_access">
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/Source/AddSingleMsg" class="btn btn-large btn-primary">单图文消息</a>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/Source/AddMutilMsg" style="margin-left:20px;" class="btn btn-large btn-primary">多图文消息</a>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/Source/AddSingleMsg" style="margin-left:20px;" class="btn btn-large btn-primary">自定义链接</a>
                </span>
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