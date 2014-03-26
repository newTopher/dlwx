<div class="sortable row-fluid">
  <div class="app_box">
    <h1 class="app_title">我的通知中心</h1>
    <?php if(Yii::app()->session['user']->level == 3): ?>
        <a style="margin-left: 0px;width: 23%;" data-rel="tooltip" title="6 个新微信用户." class="well span3 top-block weixinuser" href="#">
            <span class="icon32 icon-red icon-user"></span>
            <div style="color: #fff;">微信总用户</div>
            <div style="color: #fff;"><?php echo $Tnum;?></div>
            <span class="notification red"><?php echo $Tnew;?></span>
        </a>

        <a style="margin-left: 15px;width: 23%;" data-rel="tooltip" title="4 个访问客户." class="well span3 top-block weixinuser" href="#">
            <span class="icon32 icon-color icon-star-on"></span>
            <div style="color: #fff;">访问数据</div>
            <div style="color: #fff;">228</div>
            <span class="notification green">4</span>
        </a>

        <a style="margin-left: 15px;width: 23%;" data-rel="tooltip" class="well span3 top-block weixinuser" href="#">
            <span class="icon32 icon-color icon-star-on"></span>
            <div style="color: #fff;">客户消息</div>
            <div style="color: #fff;"><?php echo $Mnum;?></div>
            <span class="notification red"><?php echo $Mnew;?></span>
        </a>

        <a style="margin-left: 15px;width: 23%;" data-rel="tooltip" title="12 新消息." class="well span3 top-block weixinuser" href="#">
            <span class="icon32 icon-color icon-envelope-closed"></span>
            <div style="color: #fff;">活动参与</div>
            <div style="color: #fff;">25</div>
            <span class="notification red">12</span>
        </a>
    <?php endif; ?>
  </div>
</div>

<div class="sortable row-fluid">
  <div class="app_box">
      <h1 class="app_title">我的微应用</h1>
      <div class="app_ico_box">
         <ul>
             <li class="li_first">
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Weixin/templateset?b=2"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/star_64px.png"></a>
                 <span class="app_b_title">微官网</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/DataManage/Index?b=8"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/trends_64px.png"></a>
                 <span class="app_b_title">数据魔方</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Weixin/base?b=2"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/gear_64px.png"></a>
                 <span class="app_b_title">基本设置</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Weixin/Templateselect?b=2"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/layers_64px.png"></a>
                 <span class="app_b_title">模版选择</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Menu/Base?b=6"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/bookshelf_64px.png"></a>
                 <span class="app_b_title">自定义菜单</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/WeixinFans/Index?b=7"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/chat_64px.png"></a>
                 <span class="app_b_title">微信粉丝</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/MemberManage/Memberlist?b=3"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/creditcard_64px.png"></a>
                 <span class="app_b_title">会员卡</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/OrderManage/Index?b=4"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/browser_64px.png"></a>
                 <span class="app_b_title">微预约</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/TuanManage/Index?b=4"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/support_64px.png"></a>
                 <span class="app_b_title">微团购</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/channelManage/index?b=4"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/compose_64px.png"></a>
                 <span class="app_b_title">微调研</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/CallingcardManage/Index?b=4"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/wallet_64px.png"></a>
                 <span class="app_b_title">微名片</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Salecard/Index?b=5"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/document_64px.png"></a>
                 <span class="app_b_title">微信优惠券</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Guaguacard/Index?b=5"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/ribbon_64px.png"></a>
                 <span class="app_b_title">微信刮刮卡</span>
             </li>
             <li>
                 <a href="<?php echo Yii::app()->request->baseUrl;?>/Zhuancard/Index?b=5"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/lock_64px.png"></a>
                 <span class="app_b_title">微相册</span>
             </li>

         </ul>
      </div>
  </div>
</div>

<div class="row-fluid">

        <div class="box-content" style="padding:0px;">
            <dl class="dl-horizontal">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="info"><h3 class="home_h3">账号信息</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="200px;">登陆账号</td>
                        <td><?php echo $userdata->email; ?></td>
                    </tr>
                    <tr>
                        <td>账号状态</td>
                        <td>
                            <?php if($userdata->status == 1): ?>
                                <span style="font-weight: bold;" class="green">运行中</span>
                            <?php endif; ?>
                            <?php if($userdata->status == 0): ?>
                                <span style="font-weight: bold;" class="red">已暂停</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>账号类型</td>
                        <td>
                            <?php if($userdata->type > 0): ?>
                                <span style="font-weight: bold;" class="blue">正式账号</span>
                            <?php endif; ?>
                            <?php if($userdata->type == 0): ?>
                                <span style="font-weight: bold;" class="blue">测试账号</span>
                                <a href="http://wpa.qq.com/msgrd?v=3&uin=2653897208&site=qq&menu=yes" target="_blank" class="btn btn-mini btn-primary">申请正式账号</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>到期时间</td>
                        <td><?php echo date("Y-m-d H:i:s",$userdata->deadline_date); ?> 还剩余<span style="font-weight: bold;" class="red">
                                <?php echo round(($userdata->deadline_date-time())/(3600*24),0) ?></span>天</td>
                    </tr>
                    <!--
                    <tr>
                        <td>账户余额</td>
                        <td><?php echo $userdata->money; ?>元   <button class="btn btn-mini btn-success">充值</button></td>
                    </tr>
                    -->
                    <tr>
                        <td>万普版本</td>
                        <?php if($userdata->web_type == 1): ?>
                        <td>企业基础版</td>
                        <?php endif; ?>
                        <?php if($userdata->web_type == 2): ?>
                            <td>微房产</td>
                        <?php endif; ?>
                        <?php if($userdata->web_type == 3): ?>
                            <td>微餐饮</td>
                        <?php endif; ?>
                        <?php if($userdata->web_type == 4): ?>
                            <td>定制版</td>
                        <?php endif; ?>


                    </tr>
                    </tbody>
                </table>

            </dl>

            <dl class="dl-horizontal">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="info"><h3 class="home_h3">微信公众号信息</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($userdata->open_weixin == 1): ?>
                    <tr>
                        <td width="200px;">公众号头像</td>
                        <td><img width="60px" height="60px" src="<?php echo Yii::app()->request->baseurl.'/upload/weixin_headimg/'.$userdata->fakeid.'.png'; ?>" ></td>
                    </tr>
                    <tr>
                        <td width="200px;">公众账号名称</td>
                        <td><?php echo $userdata->name; ?></td>

                    </tr>
                    <tr>
                        <td width="200px;">微信公众账号</td>
                        <td><?php echo $userdata->wx_account; ?></td>
                    </tr>
                    <tr>
                        <td width="200px;">公众号二维码</td>
                        <td><img width="100px" height="100px" src="<?php echo Yii::app()->request->baseurl.'/upload/weixin_qrcode/'.$userdata->fakeid.'.png'; ?>" ></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($userdata->open_weixin == 1): ?>
                    <tr>
                        <td width="200px;">token</td>
                        <td><?php echo TOKEN; ?></td>
                    </tr>
                    <tr>
                        <td width="200px;">url</td>
                        <td><?php echo 'http://weixin.wapwei.com/api/bind/t/'.$userdata->wx_token; ?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td>绑定时间</td>
                        <?php if($userdata->open_weixin == 1): ?>
                        <td><?php echo date("Y-m-d H:i:s",$userdata->bind_wx_time); ?></td>
                        <?php endif; ?>
                        <?php if($userdata->open_weixin == 0): ?>
                            <td>您还没有绑定微信公众号</td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <td>绑定状态</td>
                        <?php if($userdata->open_weixin == 1): ?>
                        <td><span style="font-weight: bold;" class="green">已绑定</span> <a onclick="return confirm('您确定要解除绑定吗?')" href="<?php echo Yii::app()->request->baseUrl; ?>/Weixin/Closeweixin" class="btn btn-mini btn-primary">解除绑定</a></td>
                        <?php endif; ?>
                        <?php if($userdata->open_weixin == 0): ?>
                        <td><span style="font-weight: bold;" class="red">未绑定</span><button class="btn btn-mini btn-primary" data-toggle="modal" data-target="#autoModal">智能绑定</button>  <button class="btn btn-mini btn-primary" data-toggle="modal" data-target="#myModal">手动绑定</button></td>
                        <?php endif; ?>
                    </tr>
                    </tbody>
                </table>
                <?php if($userdata->open_weixin == 0): ?>
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">如何绑定微信公众号呢</h3>
                    </div>
                    <div class="modal-body">
                        <p>参见绑定微信教程</p>
                        token : <?php echo TOKEN; ?>
                        url : <?php echo 'http://weixin.wapwei.com/api/bind/t/'.$userdata->wx_token; ?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                    </div>
                </div>

                <div id="autoModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 >智能绑定公众号</h3>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>  输入您的微信公众平台账号和密码为您智能绑定平台.
                        </div>
                        <form method="post" action="" class="form-horizontal">
                            <input type="hidden" name="id" value="10">
                            <fieldset>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">微信公众账号</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="wx_name" name="username" type="text" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">密码</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="wx_pwd" name="pwd" type="password" >
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="button" id="auto_btn" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                    </div>
                </div>
                <?php endif; ?>
            </dl>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
</div>
<script type="text/javascript">

        $("#auto_btn").click(function(){
            var wx_name = $("#wx_name").val();
            var wx_pwd = $("#wx_pwd").val();
            if(!wx_name){
                notif({
                    type: "warning",
                    msg: "微信公众账号不能为空",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
            if(!wx_pwd){
                notif({
                    type: "warning",
                    msg: "微信公众账号密码不能为空",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }

            $.post('<?php Yii::app()->request->baseUrl;?>/Weixin/Autobind',{username:wx_name,pwd:wx_pwd},function(data){
                if(data.code == 0){
                    notif({
                        type: "success",
                        msg:'绑定成功,进入万普微盟平台',
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    $("#autoModal").modal('hide');
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
</script>


