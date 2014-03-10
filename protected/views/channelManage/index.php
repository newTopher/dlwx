<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 栏目管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <a class="btn btn-primary" href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/AddChannelview">添加栏目</a> <a class="btn btn-primary">添加页面</a>
                    <ul id="sortable" class="channel_box">
                        <?php foreach($channel_data as $k=>$v): ?>
                            <li class="ui-state-default">
                                <div class="title_head">一级栏目:&nbsp;&nbsp;&nbsp;<?php echo $v['one']['name']; ?><span class="tool_bar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/Channeledit/id/<?php echo $v['one']['id']; ?>" class="btn">修改</a>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/AddChannelview/pid/<?php echo $v['one']['id']; ?>" class="btn">添加子栏目</a>
                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/Channeldel/id/<?php echo $v['one']['id']; ?>" class="btn" onclick="return confirm('确定删除此栏目以及其子栏目')">删除</a></span></div>
                                <?php if($v['sub_data'] != null):?>
                                    <div class="sub_box">
                                        <ul class="sortablesub">
                                            <?php foreach($v['sub_data'] as $ks=>$vs): ?>
                                                <li>二级栏目: &nbsp;&nbsp;&nbsp;<?php echo $vs->name; ?><span class="tool_bar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/Channeledit/id/<?php echo $vs->id; ?>/pid/<?php echo $vs->pid; ?>" class="btn">修改</a>
                                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/ChannelManage/Channelsubdel/id/<?php echo $vs->id; ?>" class="btn" onclick="return confirm('确定删除此栏目')">删除</a></span></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                            </li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
    </div>
</div>
<?php if(!empty($msg)):?>
    <div class="msg_fade" id="ui_notifIt" class="info" style="background: deepskyblue; height: 60px; width: 100%; top: 0px; left: 0px;">
        <p style="line-height: 60px;">
            <b><?php echo $msg;?></b>
        </p>
    </div>
<?php endif;?>

</div>
</div>

<script>
    $(function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });

    $(function() {
        $( ".sortablesub" ).sortable();
        $( ".sortablesub" ).disableSelection();
    });
</script>
