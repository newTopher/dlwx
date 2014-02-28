<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 栏目管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a class="btn btn-primary" href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/AddChannelview">添加栏目</a> <a class="btn btn-primary">添加页面</a>
                    <ul id="sortable" class="channel_box">
                        <li class="ui-state-default">
                            <div class="title_head">最新资讯 <span class="tool_bar"><button class="btn">修改</button><button class="btn">添加子栏目</button><button class="btn">删除</button></span></div>
                            <span class="ui-icon ui-icon-arrowthick-2-n-s">

                            </span>
                        </li>
                        <li class="ui-state-default">
                            <div class="title_head">最新资讯 <span class="tool_bar"><button class="btn">修改</button><button class="btn">添加子栏目</button><button class="btn">删除</button></span></div>
                            <span class="ui-icon ui-icon-arrowthick-2-n-s">

                            </span>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<script>
    $(function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });
</script>
