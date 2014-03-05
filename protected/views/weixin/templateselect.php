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
                <a <?php if($trade_id == 1){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/1" class="">基础版</a>
                <a <?php if($trade_id == 2){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/2" class="">餐饮</a>
                <a <?php if($trade_id == 3){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/3" class="">旅游</a>
                <a <?php if($trade_id == 4){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/4" class="">婚庆</a>
                <a <?php if($trade_id == 5){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/5" class="">教育</a>
                <a <?php if($trade_id == 6){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/6" class="">汽车</a>
                <a <?php if($trade_id == 7){ echo "class='btn btn-info'"; }else{ echo "class='btn'"; }?> href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Templateselect/trade_id/7" class="">酒店</a>
            </div>
            <ul class="thumbnails gallery" id="<?php echo $trade_id;?>">
                <?php foreach($list as $val):?>
                    <li id="<?php echo $val->id;?>" trade_id="<?php echo $val->trade_id;?>" class="thumbnail" <?php if($val->id == $webdata->template_id): ?>style="background-color: #ff4500;"<?php endif; ?>>
                        <?php $nail="nail_".$val->template_name; ?>
                        <a href="javascript:;" class="cboxElement"><img class="grayscale" src="<?php echo Yii::app()->request->baseUrl."/".$val->path_url.$val->nail_url;?>" alt="模版1" style="display: block;"></a>
                        <span style="display:block;padding: 5px 0px;text-align: center;font-size: 15px;color:white;font-weight: bold;"><?php echo $val->china_name; ?></span>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div><!--/span-->

</div>
<script type="text/javascript">
    $(function(){
        var mytrade_id = <?php echo Yii::app()->session['user']->trade_id;?>;
        var mytemplate_id = <?php echo $webdata->template_id;?>;
        var uid = <?php echo Yii::app()->session['user']->id; ?>;
        $(".thumbnail").each(function(){
            $(this).click(function(){
                var trade_id = $(this).attr('trade_id');
                var id = $(this).attr('id');
                if(mytrade_id != trade_id){
                    notif({
                        type: "warning",
                        msg: "您不可以选择此模板哦，请先确认自己可用的模板类型",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }else{
                    if(mytemplate_id == id){
                        notif({
                            type: "warning",
                            msg: "您当前选用的就是这套模板",
                            position: "center",
                            width:"all",
                            height:100,
                            opacity: 1
                        });
                        return false;
                    }else{
                        $.post('<?php Yii::app()->request->baseUrl; ?>/Weixin/ChangeTemplate',{uid:uid,template_id:id},function(data){
                            if(data.code == 0){
                                notif({
                                    type: "success",
                                    msg: data.msg,
                                    position: "center",
                                    width:"all",
                                    height:100,
                                    opacity: 1
                                });
                                window.location.reload()
                            }else{
                                notif({
                                    type: "error",
                                    msg: data.msg,
                                    position: "center",
                                    width:"all",
                                    height:100,
                                    opacity: 1
                                });
                                return false;
                            }
                        },'json');
                    }
                }
            });
        });
    });
</script>