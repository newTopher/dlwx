<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 菜单管理 </h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4" style="margin-bottom: 15px;">
                    <img style="width:320px;height:480px;" src="<?php echo Yii::app()->getBaseUrl(); ?>/upload/test.jpg">
                </div>
                <div class="span8">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">基础菜单</a></li>
                        <li class=""><a href="#profile" data-toggle="tab">弹出菜单</a></li>
                        <li class=""><a href="#slider" data-toggle="tab">轮播图片</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">

                        </div>
                        <div class="tab-pane fade" id="profile">

                        </div>
                        <div class="tab-pane fade" id="slider">

                        </div>
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