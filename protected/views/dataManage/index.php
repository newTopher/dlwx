<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>数据统计--万普微盟</title>
        <script src="<?php echo Yii::app()->request->baseUrl.'/js/datamanage/'?>amcharts.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl.'/js/datamanage/'?>serial.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl.'/js/datamanage/'?>pie.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl.'/js/datamanage/'?>amstock.js" type="text/javascript"></script>
        <!-- theme files. you only need to include the theme you use.
             feel free to modify themes and create your own themes -->
        <script src="<?php echo Yii::app()->request->baseUrl.'/js/datamanage/'?>light.js" type="text/javascript"></script>
        <script type="text/javascript">

        // in order to set theme for a chart, all you need to include theme file
        // located in amcharts/themes folder and set theme property for the chart.

        var chart1;
        var chart2;

        makeCharts("light", "#FFFFFF");

        // Theme can only be applied when creating chart instance - this means
        // that if you need to change theme at run time, youhave to create whole
        // chart object once again.

        function makeCharts(theme, bgColor, bgImage){

            if(chart1){
                chart1.clear();
            }
            if(chart2){
                chart2.clear();
            }

            // background
            if(document.body){
                document.body.style.backgroundColor = bgColor;
                document.body.style.backgroundImage = "url(" + bgImage + ")";
            }

            // pie chart
            chart2 = AmCharts.makeChart("chartdiv2", {
                type: "pie",
                theme: theme,
                dataProvider: [{
                "country": "今天",
                        "litres": <?php echo $add_fans[0];?>
                }, {
                "country": "昨天",
                        "litres": <?php echo $add_fans[1];?>
                }, {
                "country": "前天",
                        "litres": <?php echo $add_fans[2];?>
                }, {
                "country": "三天前",
                        "litres": <?php echo $add_fans[3];?>
                }, {
                "country": "四天前",
                        "litres": <?php echo $add_fans[4];?>
                }, {
                "country": "五天前",
                        "litres": <?php echo $add_fans[5];?>
                },<?php if(empty($add_fans)):?>{
                    "country": "无",
                    "litres": 1
                }<?php endif;?>
                ],
                titleField: "country",
                valueField: "litres",
                balloonText: "[[title]]<br><b>[[value]]</b> ([[percents]]%)",
                legend: {
                align: "center",
                    markerType: "circle"
                }
            });

        }
        </script>
    <script type="text/javascript">
        AmCharts.ready(function () {
            generateChartData();
            createStockChart();
        });

        var chartData = [];

        function generateChartData() {
            var firstDate = new Date(2012, 0, 1);
            firstDate.setDate(firstDate.getDate() - 500);
            firstDate.setHours(0, 0, 0, 0);

            for (var i = 0; i < 500; i++) {
                var newDate = new Date(firstDate);
                newDate.setDate(newDate.getDate() + i);

                var value = Math.round(Math.random() * (40 + i)) + 100 + i;

                chartData.push({
                    date: newDate,
                    value: value
                });
            }
        }
        function createStockChart() {
            var chart = new AmCharts.AmStockChart();
            chart.pathToImages = "../amcharts/images/";

            // DATASETS //////////////////////////////////////////
            var dataSet = new AmCharts.DataSet();
            dataSet.color = "#b0de09";
            dataSet.fieldMappings = [{
                fromField: "value",
                toField: "value"
            }];
            dataSet.dataProvider = chartData;
            dataSet.categoryField = "date";

            chart.dataSets = [dataSet];

            // PANELS ///////////////////////////////////////////
            var stockPanel = new AmCharts.StockPanel();
            stockPanel.showCategoryAxis = true;
            stockPanel.title = "粉丝增长变化";
            stockPanel.eraseAll = false;
            stockPanel.addLabel(0, 100, "", "center", 16);

            var graph = new AmCharts.StockGraph();
            graph.valueField = "value";
            graph.bullet = "round";
            graph.bulletColor = "#FFFFFF";
            graph.bulletBorderColor = "#00BBCC";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.bulletSize = 7;
            graph.lineThickness = 2;
            graph.lineColor = "#00BBCC";
            graph.useDataSetColors = false;
            stockPanel.addStockGraph(graph);

            var stockLegend = new AmCharts.StockLegend();
            stockLegend.valueTextRegular = " ";
            stockLegend.markerType = "none";
            stockPanel.stockLegend = stockLegend;
            stockPanel.drawingIconsEnabled = true;

            chart.panels = [stockPanel];


            // OTHER SETTINGS ////////////////////////////////////
            var scrollbarSettings = new AmCharts.ChartScrollbarSettings();
            scrollbarSettings.graph = graph;
            chart.chartScrollbarSettings = scrollbarSettings;

            var cursorSettings = new AmCharts.ChartCursorSettings();
            cursorSettings.valueBalloonsEnabled = true;
            chart.chartCursorSettings = cursorSettings;

            var panelsSettings = new AmCharts.PanelsSettings();
            panelsSettings.creditsPosition = "bottom-right";
            chart.panelsSettings = panelsSettings;


            // PERIOD SELECTOR ///////////////////////////////////
            var periodSelector = new AmCharts.PeriodSelector();
            periodSelector.position = "bottom";
            periodSelector.periods = [{
                period: "DD",
                count: 10,
                label: "10 days"
            }, {
                period: "MM",
                count: 1,
                label: "1 month"
            }, {
                period: "YYYY",
                count: 1,
                label: "1 year"
            }, {
                period: "YTD",
                label: "YTD"
            }, {
                period: "MAX",
                label: "MAX"
            }];
            chart.periodSelector = periodSelector;

            chart.write('chartdiv');
            }
</script>
    </head>
    <body >
        <div class="box span12">
            <div class="box-header well">
                <h2>数据概况</h2>
            </div>
        <div id="chartdiv2" style="width: 600px; height: 400px;float:left;">
        </div>
        <div style="height:400px;width:480px;float:left;">
            <div class="alert alert-info" style="margin-top:50px;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>提示信息!</strong>  当消息超过48小时之后将不能主动回复该条信息. 当消息超过48小时之后将不能主动回复该条信息. 当消息超过48小时之后将不能主动回复该条信息. 当消息超过48小时之后将不能主动回复该条信息.
            </div>
            <table class="table table-hover table-nomargin table-bordered usertable dataTable " style="margin-top:50px;">
                <tr>
                    <th></th>
                    <th>总关注数</th>
                    <th>净增关注数</th>
                    <th>关键词命中率</th>
                    <th>图文点击率</th>
                </tr>
                <tbody>
                <tr>
                    <td>今日
                    </td>
                    <td><?php echo $add_fans[6];?></td>
                    <td><?php echo $add_fans[0];?></td>
                    <td><?php echo $usekey1.'%'?></td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td>昨日
                    </td>
                    <td><?php echo $add_fans[6]-$add_fans[0];?></td>
                    <td><?php echo $add_fans[1];?></td>
                    <td><?php echo $usekey2.'%'?></td>
                    <td>0%</td>

                </tr>
                <tr>
                    <td>最近7天
                    </td>
                    <td><?php echo $last7;?></td>
                    <td><?php echo $day7;?></td>
                    <td><?php echo $usekey7;?>%</td>
                    <td>0%</td>

                </tr>
                <tr>
                    <td>最近30天
                    </td>
                    <td><?php echo $last30;?> </td>
                    <td> <?php echo $day30;?> </td>
                    <td><?php echo $usekey30;?>%</td>
                    <td>0%</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="chartdiv" style="width: 200px; height: 200px;float:left;margin-left:30px;"></div>
        </div>
    </body>
</html>