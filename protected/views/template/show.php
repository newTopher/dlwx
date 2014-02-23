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
            <ul class="thumbnails gallery" id="<?php echo $trade_id;?>">
                <?php foreach($list as $val):?>
                <li id="<?php echo 'image-'.$val->id;?>" class="thumbnail">
                    <?php $nail="nail_".$val->template_name?>
                    <a  style="background:url(<?php echo Yii::app()->request->baseUrl.'/'.$val->path_url.$val->nail_url;?>)" title="<?php echo $val->template_name;?>" href="<?php echo Yii::app()->request->baseUrl."/".$val->path_url.$val->template_image?>" class="cboxElement"><img class="grayscale" src="<?php echo Yii::app()->request->baseUrl."/".$val->path_url.$val->nail_url;?>" alt="模版1" style="display: block;"></a>
                </li>
                 <?php endforeach;?>
            </ul>
        </div>
    </div><!--/span-->

</div>