<style>
    .thumbnails {
        background-color: white;
        z-index: 2;
        position: relative;
        margin-bottom: 40px !important;
    }
    .thumbnails {
        display: block;
        padding: 4px;
        line-height: 1;
        border: 1px solid #ddd;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
    }
</style>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>活动管理</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>  您可以定期创建一些活动,来吸引您的活跃你的粉丝.
                </div>

                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnails">
                                <img alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dazhuanpan.jpg">
                                <div class="caption">
                                    <h3>幸运大转盘 <span style="font-size: 10px;padding-left: 10px;color: green;">进行中 (20人参加)</span></h3>
                                    <p style="margin-top: 20px;"><a href="#" class="btn btn-success">查看活动</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnails">
                                <img alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dazhuanpan.jpg">
                                <div class="caption">
                                    <h3>幸运大转盘</h3>

                                    <p style="margin-top: 20px;"><a href="<?php echo Yii::app()->request->baseUrl;?>/Activity/create" class="btn btn-primary">创建活动</a> </p>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnails">
                                <img alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dazhuanpan.jpg">
                                <div class="caption">
                                    <h3>幸运大转盘</h3>

                                    <p style="margin-top: 20px;"><a href="<?php echo Yii::app()->request->baseUrl;?>/Activity/create" class="btn btn-primary">创建活动</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnails">
                                <img alt="300x200" style="width: 300px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dazhuanpan.jpg">
                                <div class="caption">
                                    <h3>幸运大转盘</h3>

                                    <p style="margin-top: 20px;"><a href="<?php echo Yii::app()->request->baseUrl;?>/Activity/create" class="btn btn-primary">创建活动</a></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
</div>