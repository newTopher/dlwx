<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-picture"></i> 万普微盟助手列表</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div >
                <p >
                    <button style="width:100%" onclick="javascript:window.location.href='add'" class="btn btn-large btn-primary">添加助手</button>
                </p>
            </div>
            <ul class="thumbnails">
                <?php foreach($list as $val):?>
                <div style="float:left;padding-right:20px;padding-bottom:5px;width:300px;height:auto;">

                        <div style="height:100px;width:100%;" >
                        <li id="<?php echo 'image-'.$val->id;?>" class="thumbnail">
                            <a  style="height:100px;width:100px;margin:0 auto; background:url(<?php echo Yii::app()->request->baseUrl.'/'.$val->path_url.$val->nail_image;?>)" title="<?php echo $val->name;?>" href="<?php echo Yii::app()->request->baseUrl."/".$val->path_url.$val->helper_image?>" class="cboxElement"><img style="height:100px ;width:100px;margin:0 auto;" class="" src="<?php echo Yii::app()->request->baseUrl."/".$val->path_url.$val->nail_image;?>" alt="模版1" style="margin:0 auto;height:100px;width:100px;display: block;"></a>
                        </li>
                        </div>
                        <div class="row-fluid show-grid">
                            <div class="span12">
                                 <div style="width:100%;height:auto;margin:10px 0;" >
                                     <div style="margin: 0 auto; width:105px;">
                                         <?php if($val->status==1): ?>
                                         <div class="iPhoneCheckContainer" style="width: 97px;" onclick="window.location.href='list?status=1&id=<?php echo $val->id;?>'">
                                             <input data-no-uniform="true" checked="" type="submit" class="iphone-toggle">
                                             <label class="iPhoneCheckLabelOff" style="width: 92px;">
                                                <span style="margin-right: -50px;">OFF</span>
                                             </label>
                                             <label class="iPhoneCheckLabelOn" style="width: 54px;">
                                                <span style="margin-left: 0px;">ON</span>
                                             </label>
                                             <div class="iPhoneCheckHandle" style="width: 41px; left: 50px;">
                                                 <div class="iPhoneCheckHandleRight">
                                                 <div class="iPhoneCheckHandleCenter"></div>
                                                </div>
                                            </div>
                                         </div>
                                         <?php else: ?>
                                         <div class="iPhoneCheckContainer" style="width: 97px;" onclick="window.location.href='list?status=0&id=<?php echo $val->id;?>'">
                                             <input data-no-uniform="true" checked="" type="checkbox" class="iphone-toggle" name="status">
                                             <label class="iPhoneCheckLabelOff" style="width: 92px;">
                                                <span style="margin-right: 0px;">OFF</span>
                                             </label>
                                             <label class="iPhoneCheckLabelOn" style="width: 4px;">
                                                <span style="margin-left: -50px;">ON</span>
                                             </label>
                                             <div class="iPhoneCheckHandle" style="width: 41px; left: 0px;">
                                                 <div class="iPhoneCheckHandleRight">
                                                     <div class="iPhoneCheckHandleCenter"></div>
                                                 </div>
                                            </div>
                                         </div>
                                         <?php endif;?>
                                     </div>
                                 </div>
                                <div style="border-top: 2px dashed white; padding:10px;height:120px;overflow: hidden;">
                                    <?php echo $val->detail_text;?>
                                </div>
                                <div class="row-fluid show-grid" >
                                    <div class="span12" style="background-color:rgb(5, 147, 202); font-size: 20px;color:white;"><?php echo $val->china_name;?></div>
                                </div>
                            </div>
                        </div>
                </div>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>