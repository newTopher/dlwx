<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<style type="text/css">
    .mapContainer{width:80% !important;float:left;border-right:2px solid #bcbcbc;}
    .mapSearchResult{width:20% !important;float:left;}
</style>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>会员卡-商家基本信息设置</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/MemberManage/Cusset">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" >商家名称</label>
                        <div class="controls">
                            <input type="text" name="cust_name" value="<?php if($data!=null){ echo $data->cust_name;} ?>" id="cust_name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">商家联系电话</label>
                        <div class="controls">
                            <input type="text" name="tel" value="<?php if($data!=null){ echo $data->tel;} ?>" id="tel" >
                            <span class="help-inline">用于显示在会员卡信息页面</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">商家详细地址</label>
                        <div class="controls">
                            <input type="text" name="address" value="<?php if($data!=null){ echo $data->address;} ?>" id="address">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">触发关键词</label>
                        <div class="controls">
                            <input type="text" name="keywords" value="<?php if($keydata!=null){ echo $keydata->keywords;} ?>" id="keywords">
                            <span class="help-inline">如果有多个关键词请用空格隔开每个关键词!</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">图文消息标题</label>
                        <div class="controls">
                            <input type="text" name="index_title" value="<?php if($data!=null){ echo $data->index_title;} ?>" id="index_title">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">图文消息封面</label>
                        <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">
                            选择图片
                            <input  class="filecss fileupload" type="file" name="sliderimage" >
                        </div>
                        <a class="btn uploadbtn" >上传</a>
                        <span class="help-inline">图片建议尺寸：640*360px!</span>
                        <div id="zhezhao">
                            <div id="loading" class="loading">

                            </div>
                        </div>
                        <div id="showimg" class="showimg" style="margin-left:160px;width:320px;margin-top: 10px;">
                            <?php if($data!=null): ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $data->index_image; ?>" />
                            <?php else : ?>
                                <i class="appmsg_thumb default">封面图片</i>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >简短描述</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" id="description"><?php if($data!=null){ echo $data->description;} ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="appendedInputButton">预约地址</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInputButton" size="16" type="text" placeholder="深圳" class="searchLocation">
                                <button class="btn" type="button" onclick='searchLocation()'>选定位置</button>
                                <span  class="help-inline"> <a id="map-chosed" style="display:none">已经选择成功!</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div style="width: 600px;height:300px;" id="mapContainer"></div>
                            <input type="hidden" name="position_x" id="shopLongitude" value="<?php if($data!=null){ echo $data->position_x;} ?>">
                            <input type="hidden" name="position_y" id="shopLatitude" value="<?php if($data!=null){ echo $data->position_y;} ?>">
                            <input type="hidden" name="index_image" id="index_image" value="<?php if($data!=null){ echo $data->index_image;} ?>">
                        </div>

                    </div>

                    <div class="form-actions">
                        <button type="submit" id="card_post_btn" class="btn btn-primary">确定</button>
                        <button class="btn">取消</button>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>
</div>

</div>
</div>

<script>
    $(".fileupload").each(function(){
        $(this).click(function(){
            var zhezhao = $("#zhezhao");
            zhezhao.hide();
            if($("#myupload").attr('action') == undefined){
                $(this).wrap("<form id='myupload' action='<?php Yii::app()->request->baseUrl; ?>/Upload/File' method='post' enctype='multipart/form-data'></form>");
            }
        });
    });

    $(".uploadbtn").each(function(){
        $(this).click(function(){
            var percent = $('.percent');
            var showimg = $('#showimg');
            var zhezhao = $("#zhezhao");
            var btn = $(".btn span");
            $("#myupload").ajaxSubmit({
                dataType:  'json',
                beforeSend: function() {
                    showimg.empty();
                    zhezhao.show();
                    var percentVal = '0%';
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $("#zhezhao").attr("class","mask opacity");
                    $("#zhezhao").css('width',$(window).width());
                    $("#zhezhao").css('height',$(window).height());
                    var percentVal = percentComplete + '%';
                    percent.html(percentVal);
                    $("#loading").css('margin-left',$(window).width()/2-50);
                    $("#loading").css('margin-top',$(window).height()/2-10);
                },
                success: function(data) {
                    var img = "<?php echo Yii::app()->request->baseUrl;?>/upload/slider/"+data.pic;
                    zhezhao.hide();
                    if(data.pic==false){
                        notif({
                            type: "error",
                            msg: '上传失败，图片尺寸过大',
                            position: "center",
                            width:"all",
                            height:100,
                            opacity: 1
                        });
                        return false;
                    }else{
                        $("#index_image").val(data.pic);
                        showimg.html("<img width='320px'  height='180px' src='"+img+"'><a onclick='delimage(this)' datadir='slider' style='margin-left:40px' data='"+data.pic+"' class='btn btn-mini btn-danger del_btn'>删除</a>");
                    }

                },
                error:function(xhr){
                    notif({
                        type: "error",
                        msg: '上传失败，图片尺寸过大',
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            });
        });
    });

    function delimage(obj){
        var dir = $(obj).attr('datadir');
        var name = $(obj).attr('data');
        var i =  parseInt($(obj).attr('edit'));
        $.post("<?php Yii::app()->request->baseUrl; ?>/Upload/Delimage", { dir: dir, name: name },function(json){
            if(json.code == 0){
                $(obj).parent().html("");
                $("#index_image").val("");
                notif({
                    type: "success",
                    msg: "删除成功",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
            }else{
                notif({
                    type: "error",
                    msg: json.msg,
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        },'json');
    }

    $("#card_post_btn").click(function(){
        if($("#cust_name").val().length == 0){
            notif({
                type: "warning",
                msg: '商家名称不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#tel").val().length == 0){
            notif({
                type: "warning",
                msg: '商家电话不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#address").val().length == 0){
            notif({
                type: "warning",
                msg: '商家详细地址不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#keywords").val().length == 0){
            notif({
                type: "warning",
                msg: '触发关键词不可为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#index_title").val().length == 0){
            notif({
                type: "warning",
                msg: '图文信息不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#index_image").val().length == 0){
            notif({
                type: "warning",
                msg: '请上传消息封面图',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
    });
</script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=29853e5332078c0e4f650aaac72c5172"></script>
<script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=29853e5332078c0e4f650aaac72c5172&services=&t=20140127144714"></script>
<script type="text/javascript">
    var map = new BMap.Map("mapContainer");
    var point = new BMap.Point(<?php if($data!=null){ echo $data->position_x;}else{ echo '114.02597366'; } ?>, <?php if($data!=null){ echo $data->position_x;}else{ echo '22.54605355'; } ?>);
    map.centerAndZoom(point,15);
    map.enableScrollWheelZoom();
    //加入缩放控件;
    map.addControl(new BMap.NavigationControl());
    //创建坐标点;
    var mapMarker = new BMap.Marker(point);
    //拖拽控件
    mapMarker.enableDragging();
    var infomsg = "<p id='position_box' style='font-size:14px;color:#cc5522;font-weight:bold;'>" + '确定选取该位置吗?' + "</p><a class='btn btn-primary' onclick='confirmMarker()'>确定</a><a onclick='closeMarker()' class='btn btn-primary' style='margin-left:10px'>取消</a>";
    var selectedOpint = {};
    map.addEventListener("click", function(e){

        selectedOpint.x = e.point.lng
        selectedOpint.y = e.point.lat;
        map.clearOverlays(mapMarker);
        point = new BMap.Point(e.point.lng,e.point.lat);
        mapMarker = new BMap.Marker(point);
        map.addOverlay(mapMarker);
        mapMarker.enableDragging();

        mapMarker.addEventListener("dragend", function (e) {
            selectedOpint.x = e.point.lng
            selectedOpint.y = e.point.lat;

            this.infoWindow = new BMap.InfoWindow(infomsg); // 创建信息窗口对象
            this.openInfoWindow(this.infoWindow);
        });

        var infoWindow = new BMap.InfoWindow(infomsg);
        mapMarker.openInfoWindow(infoWindow);
    });
    //关闭覆盖物
    function closeMarker(a)
    {
        mapMarker.closeInfoWindow(mapMarker.infoWindow);
        map.clearOverlays(mapMarker);
        $("#shopLongitude").val('');
        $("#shopLatitude").val('');
        $("#map-chosed").css('display','none');
    }
    //确定标记
    function selectShopAddress(selectedOpint) {
        $("#shopLongitude").val(selectedOpint.x);
        $("#shopLatitude").val(selectedOpint.y);
        mapMarker.closeInfoWindow(mapMarker.infoWindow);
        $("#map-chosed").css('display','block');
    }

    function confirmMarker()
    {
        window.parent.selectShopAddress(selectedOpint);
    }
    function clearMarker()
    {
        selectedOpint.x = "";
        selectedOpint.y = "";
        window.selectShopAddress(selectedOpint);
    }
    var initSearch = true;
    function searchLocation()
    {
        var searchLocation = $(".searchLocation").val();
        if(searchLocation == "")
        {
            alert('地址不能为空哦');
            return ;
        }

        var local = new BMap.LocalSearch(map, {
            renderOptions: {
                map: map,
                panel : "mapSearchResult",
                autoViewport: true,
                selectFirstResult: false
            }
        });
        if(initSearch)
        {
            initSearch = false;
            $("#mapContainer").addClass("mapContainer");
            $("#mapSearchResult").addClass("mapSearchResult").show();
        }
        local.search(searchLocation)

    }
</script>

