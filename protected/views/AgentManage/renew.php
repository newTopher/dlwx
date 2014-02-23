<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">首页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">添加代理商</a>
        </li>
    </ul>
</div>


<div class="row-fluid">
<div class="box span12">
<div class="box-header well">
    <h2><i class="icon-info-sign"></i>填写代理商信息</h2>
    <div class="box-icon">
        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <form class="horizontal" action="<?php echo Yii::app()->request->baseUrl."/AgentManage/update?id=".$list->id;?>" method="post">
        <fieldset>
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">代理商续费</a></li>
    </ul>
    <div class="control-group" >
        <div class="controls" style= "margin: 0 auto;width:100%;">

            <a style= "width:100%;" data-rel="tooltip" class="well span3 top-block"  data-original-title="<?php echo "到期时间".date("Y-m-d",$list->end_time);?>.">
                <span class="icon32 icon-red icon-user"></span>
                <?php if($meg):?>
                <div style="font-size: 20px;display: block"><?php echo $meg;?></div>
                <?php elseif(empty($meg)): ?>
                <div style="font-size: 20px;display: none"></div>
                <?php endif;?>
                <div><?php echo $list->email;?></div>
                <div><?php echo "现有金额：".$list->money."元";?></div>

            </a>
        </div>
    </div>
    <div class="control-group" style= "width:100%;float:left;">
        <div class="controls" style= "margin:0 auto;width:500px;padding:10px;">
            <label class="control-label" for="appendedPrependedInput" style= "float:left;padding:10px;line-height: 10px;">充值金额</label>
             <div class="input-prepend input-append" style= "float:left;">
                 <span class="add-on">￥</span><input id="appendedPrependedInput" size="16" type="text" name="add_money"><span class="add-on">.00</span>*不修改可不填
             </div>
         </div>
    </div>
    <div class="control-group" style= "width:100%;float:left;">
        <div class="controls" style= "margin:0 auto;width:500px;padding:10px;">
             <label class="control-label" for="appendedPrependedInput" style= "float:left;padding:10px;line-height: 10px;">模版费率</label>
             <div class="input-prepend input-append" style= "float:left;">
                  <span class="add-on">￥</span><input id="appendedPrependedInput" size="16" type="text" name="rate"><span class="add-on">/套</span>*不修改可不填
             </div>
        </div>
        <div class="control-group" style= "width:100%;float:left;">
            <div class="controls" style= "margin:0 auto;width:500px;padding:10px;">
            <label class="control-label" for="selectError3" style= "float:left;padding:10px;line-height: 10px;">使用期限</label >

                <select id="selectError3" name="deadline">
                    <option>试用七天</option>
                    <option>使用一年</option>
                    <option>长期有效</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="controls" style= "margin:0 auto;width:250px;padding:10px;">
        <button type="submit" class="btn btn-primary">提交</button>
        <button class="btn">取消</button>
        </div>
    </div>
        </fieldset>
    </form>
</div>
</div>
</div>

</div>
</div>
</div>
</div>