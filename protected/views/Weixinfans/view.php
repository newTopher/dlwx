<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css"/>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 微信粉丝信息 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="tooltip-demo well span5" style="margin-bottom: 15px;">
                        <a href="#">
                            <img style="width: 140px;height: 170px;float: left;" alt="Usman" src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50"></a>
                    <div style="float: right">
                    <p>微信昵称  :  <?php echo $wxUserData->nickname ;?> </p>
                    <p>微信ID   :  <?php echo $wxUserData->openid ;?> </p>
                    <p>性别   :  <?php if($wxUserData->sex==1){ echo '男'; }else{ echo '女';} ;?> </p>
                    <p>省份  :  <?php echo $wxUserData->province ;?> </p>
                    <p>城市  :  <?php echo $wxUserData->city ;?> </p>
                    <p>关注时间  :  <?php echo date("Y-m-d H:i:s",$wxUserData->subscribe_time);?> </p>
                    <p>状态  :  <?php if($wxUserData->status==1){
                            echo "<span class='label label-success'>正常</span>";
                        }else{
                            echo "<span class='label label-important'>黑名单</span>";
                        } ;?> </p>
                    </div>


                </div>
                <div class="span7">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">聊天记录</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <div class="leftd">
                                <div class="leftimg"><img src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50" /></div>
                                <div class="speech left" > 你好!在晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会! </div>
                            </div>
                            <div class="rightd">
                                <div class="rightimg"><img src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50" /></div>
                                <div class="speech right" > 晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会! </div>
                            </div>

                            <div class="rightd">
                                <div class="rightimg"><img src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50" /></div>
                                <div class="speech right" > 晚上好!我明天早上8点要开会!晚上好!上好!我在!明天早上8点要开会! </div>
                            </div>

                            <div class="leftd">
                                <div class="leftimg"><img src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50" /></div>
                                <div class="speech left" > 你好!在晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会!晚上好晚上好!我在!明天早上8点要开会!晚上好!我在!明天早上8点要开会! </div>
                            </div>

                            <div class="rightd">
                                <div class="rightimg"><img src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50" /></div>
                                <div class="speech right" > 晚上好!我明天早上8点要开会!晚上好!上好!我在!明天早上8点要开会! </div>
                            </div>

                            <div class="leftd">
                                <div class="leftimg"><img src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50" /></div>
                                <div class="speech left" >我</div>
                            </div>
                            <div class="pagediv">
                                <ul class="pager">
                                    <li class="previous">
                                        <a href="#">&larr; 上一页</a>
                                    </li>
                                    <li class="next">
                                        <a href="#">下一页 &rarr;</a>
                                    </li>
                                </ul>
                           </div>
                        </div>

                        <textarea style="width: 597px;height: 100px;margin-top:25px;float: left"></textarea>

                        <button class="btn btn-small btn-primary" style="float: left;margin-top: 10px;margin-bottom: 10px;width: 100px;">发送</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>