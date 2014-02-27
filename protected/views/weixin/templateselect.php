<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-picture"></i> 所有模板</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="trade" style="width: 100%;height: 35px;line-height: 35px;padding: 15px;">
                <a <?php if($trade_id == 0){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/0" class="cur">全部</a>
                <a <?php if($trade_id == 1){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/1" class="">餐饮</a>
                <a <?php if($trade_id == 2){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/2" class="">旅游</a>
                <a <?php if($trade_id == 3){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/3" class="">婚庆</a>
                <a <?php if($trade_id == 4){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/4" class="">教育</a>
                <a <?php if($trade_id == 5){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/5" class="">汽车</a>
                <a <?php if($trade_id == 6){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/6" class="">酒店</a>
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