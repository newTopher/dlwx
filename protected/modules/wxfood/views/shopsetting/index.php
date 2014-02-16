<script type="text/javascript">
    function selectShopAddress(object){
        $('#myModal').modal('hide')
        $("#pox").val(object.x);
        $("#poy").val(object.y);
        $("#map_select").text("已标记好地理位置");
    }
</script>
<div id="myModal" style="width:800px;height: 550px;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">选择地理位置</h3>
    </div>
    <div class="modal-body">
        <iframe frameborder=0 width="750" height="400" src="<?php echo Yii::app()->request->baseUrl;?>/map?callback=selectShopAddress"></iframe>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 店铺设置</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form action="<?php echo Yii::app()->getBaseUrl(); ?>" class="form-horizontal">
                    <input type="hidden" name="id" value="">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">店铺名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="name" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">店铺电话</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="name" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">地理位置</label>
                            <div class="controls">
                                <a href="#myModal" role="button" class="btn btn-small btn-warning" data-toggle="modal">选择地理位置</a>
                                <input class="input-xlarge focused" name="position_x" id="pox" type="hidden" value="">
                                <input class="input-xlarge focused" name="position_y" id="poy" type="hidden" value="">
                                <span class="help-inline" id="map_select">未标记地理位置</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button class="btn">取消</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>

</div>
</div>