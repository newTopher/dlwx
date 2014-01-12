<link id="bs-css" href="<?php echo Yii::app()->getBaseUrl(); ?>/css/msg.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 素材管理 </h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <span class="create_access">
                    <button class="btn btn-large btn-primary">单图文消息</button>
                    <button style="margin-left:20px;" class="btn btn-large btn-primary">多图文消息</button>
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