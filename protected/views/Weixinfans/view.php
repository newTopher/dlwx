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
                            <?php if(!isset($wxUserData->headimgurl)) : ?>
                            <img style="width: 80px;height: 80px;float: left;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/w_client.jpg"></a>
                        <?php else: ?>
                        <img style="width: 80px;height: 80px;float: left;" src="<?php echo $wxUserData->headimgurl; ?>"></a>
                        <?php endif; ?>
                    <div style="float: right">
                    <p>微信昵称  :  <?php if(isset($wxUserData->nickname)){ echo $wxUserData->nickname;} ;?> </p>
                    <p>微信ID   :  <?php echo $wxUserData->openid ;?> </p>
                    <p>性别   :  <?php if($wxUserData->sex==1){ echo '男'; }else{ echo '女';} ;?> </p>
                    <p>省份  :  <?php if(isset($wxUserData->province)){ echo $wxUserData->province;} ;?> </p>
                    <p>城市  :  <?php if(isset($wxUserData->city)){ echo $wxUserData->city;} ;?> </p>
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
                            <?php if($msgdata != null): ?>
                                <?php foreach($msgdata as $k=>$v): ?>
                                    <?php if($v->from_openid == $openid): ?>
                                        <div class="leftd">
                                            <div class="leftimg">
                                                <?php if(!isset($wxUserData->headimgurl)) : ?>
                                                <img style="width:30px;height:30px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/w_client.jpg" />
                                                <?php else: ?>
                                                    <img style="width: 30px;height: 30px;float: left;" src="<?php echo $wxUserData->headimgurl; ?>"></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="speech left" >
                                                <?php if($v->type == 'text'): ?>
                                                    <?php echo $v->content; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div class="rightd">
                                            <div class="rightimg">
                                                <img style="width:30px;height:30px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/w_client.jpg" />
                                            </div>
                                            <div class="speech right" >
                                                <?php if($v->type == 'text'): ?>
                                                    <?php echo $v->content; ?>
                                                    <?php else : ?>
                                                    <?php echo $v->type; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>提示信息!</strong>您还没和他聊过天哦.
                                </div>

                            <?php endif; ?>



                        </div>
                        <div id="pager" class="pager" style="float: left;margin-top: 30px;">
                            <?php

                            $this->widget('CLinkPager',array(
                                    'header'=>'',
                                    'prevPageLabel' => '上一页',
                                    'nextPageLabel' => '下一页',
                                    'pages' => $pages,
                                    'maxButtonCount'=>5
                                )
                            );
                            ?>
                        </div>

                        <textarea id="msgBox" style="width: 597px;height: 100px;margin-top:25px;float: left"></textarea>

                        <button openid="<?php echo $openid; ?>" id="send_btn" class="btn btn-small btn-primary" style="float: left;margin-top: 10px;margin-bottom: 10px;width: 100px;">发送</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script type="text/javascript">
    $(function(){
        $("#send_btn").click(function(){
            var content = $("#msgBox").val();
            var openid = $(this).attr('openid');
            if(!content){
                notif({
                    type: "warning",
                    msg: '发送内容不能为空哦',
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }

            $.post('<?php echo Yii::app()->request->baseUrl; ?>/WeixinFans/SendMsg',{content:content,openid:openid},function(data){
                if(data.code==0){
                    notif({
                        type: "success",
                        msg: '消息发送成功',
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    window.location.reload();
                }else{
                    notif({
                        type: "warning",
                        msg: data.msg,
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            },'json');
        });
    });
</script>