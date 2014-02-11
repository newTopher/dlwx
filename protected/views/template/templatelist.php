<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-picture"></i> 万普标准模版列表</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div >
                <p >
                    <button style="width:100%" onclick="javascript:window.location.href='add'" class="btn btn-large btn-primary">添加模版</button>
                </p>
            </div>
            <div class="sortable row-fluid ui-sortable" style="height:500px;">
                <?php //print_r($list);exit;?>
                <?php foreach($list as $k=>$val):?>
                <a data-rel="tooltip" class="well span3 top-block" href="<?php echo 'show/?trade_id='.$k;?>" style="margin-left:0px; width:320px;">
                    <span class="icon32 icon-color icon-star-on"></span>
                    <div><?php echo $val;?></div>
                </a>
                <?php endforeach;?>
            </div>


    </div><!--/span-->

</div>