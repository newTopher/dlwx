<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <input type="hidden" id="siteContextPath" value=""/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <script src="<?php echo Yii::app()->getBaseUrl(); ?>/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=29853e5332078c0e4f650aaac72c5172"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=29853e5332078c0e4f650aaac72c5172&services=&t=20140127144714"></script>
    <link id="bs-css" href="<?php echo Yii::app()->getBaseUrl(); ?>/css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
        body, html,#mapContainer {width: 100%;height: 100%;overflow: hidden;margin:0;}
        .mapContainer{width:80% !important;float:left;border-right:2px solid #bcbcbc;}
        .mapSearchResult{width:20% !important;float:left;}
    </style>
</head>
<body>
<div style="height:80px;line-height:60px;">
    &nbsp;&nbsp;
    <b>输入位置定位：</b>
    <input class="input" style="width:200px;height:22px;" placeholder="深圳" id="searchLocation"/>
    &nbsp;&nbsp;
    <button class='btn btn-primary' onclick='searchLocation()'>确定</button>
</div>
<div id="mapContainer"></div>
<div id="mapSearchResult" style="display: block;"></div>
</body>
</html>
<script type="text/javascript">
    var map = new BMap.Map("mapContainer");
    var point = new BMap.Point(114.02597366, 22.54605355);
    map.centerAndZoom(point,15);
    map.enableScrollWheelZoom();
    //加入缩放控件;
    map.addControl(new BMap.NavigationControl());
    //创建坐标点;
    var mapMarker = new BMap.Marker(point);
    //拖拽控件
    mapMarker.enableDragging();
    var infomsg = "<p style='font-size:14px;color:#cc5522;font-weight:bold;'>" + '确定选取该位置吗?' + "</p><button class='btn btn-primary' onclick='confirmMarker()'>确定</button><button onclick='closeMarker()' class='btn btn-primary' style='margin-left:10px'>取消</button>";
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
    }
    //确定标记
    function confirmMarker()
    {
        window.parent.selectShopAddress(selectedOpint);
    }
    function clearMarker()
    {
        selectedOpint.x = ""
        selectedOpint.y = "";
        window.parent.selectShopAddress(selectedOpint);
    }
    var initSearch = true;
    function searchLocation()
    {
        var searchLocation = $("#searchLocation").val();
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
        local.search(searchLocation);
    }
</script>