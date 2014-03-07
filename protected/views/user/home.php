<div class="sortable row-fluid">
  <div class="app_box">
    <h1 class="app_title">我的通知中心</h1>
    <?php if(Yii::app()->session['user']->level == 3): ?>
        <a style="margin-left: 0px;width: 23%;" data-rel="tooltip" title="6 个新微信用户." class="well span3 top-block weixinuser" href="#">
            <span class="icon32 icon-red icon-user"></span>
            <div style="color: #fff;">微信总用户</div>
            <div style="color: #fff;">507</div>
            <span class="notification red">6</span>
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
            <div style="color: #fff;">68</div>
            <span class="notification red">6</span>
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
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/bag_64px.png"></a>
                 <span class="app_b_title">自动回复</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/denied_64px.png"></a>
                 <span class="app_b_title">数据魔方</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/folder_64px.png"></a>
                 <span class="app_b_title">微相册</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/global_64px.png"></a>
                 <span class="app_b_title">自动回复</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/bag_64px.png"></a>
                 <span class="app_b_title">自动回复</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/denied_64px.png"></a>
                 <span class="app_b_title">数据魔方</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/folder_64px.png"></a>
                 <span class="app_b_title">微相册</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/global_64px.png"></a>
                 <span class="app_b_title">自动回复</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/denied_64px.png"></a>
                 <span class="app_b_title">数据魔方</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/folder_64px.png"></a>
                 <span class="app_b_title">微相册</span>
             </li>
             <li>
                 <a href=""><img src="<?php echo Yii::app()->request->baseUrl;?>/images/app/global_64px.png"></a>
                 <span class="app_b_title">自动回复</span>
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
                                <button class="btn btn-mini btn-primary">申请正式账号</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>到期时间</td>
                        <td><?php echo date("Y-m-d H:i:s",$userdata->deadline_date); ?> 还剩余<span style="font-weight: bold;" class="red">
                                <?php echo round(($userdata->deadline_date-$userdata->add_time)/(3600*24),0) ?></span>天</td>
                    </tr>
                    <tr>
                        <td>账户余额</td>
                        <td><?php echo $userdata->money; ?>元   <button class="btn btn-mini btn-success">充值</button></td>
                    </tr>
                    <tr>
                        <td>微盟版本</td>
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
                    <tr>
                        <td width="200px;">公众账号用户名</td>
                        <td><?php echo $userdata->wx_account; ?></td>

                    </tr>
                    <?php if($userdata->open_weixin == 1): ?>
                    <tr>
                        <td>token</td>
                        <td><?php echo TOKEN; ?></td>
                    </tr>
                    <tr>
                        <td>url</td>
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
                        <td><span style="font-weight: bold;" class="green">已绑定</span></td>
                        <?php endif; ?>
                        <?php if($userdata->open_weixin == 0): ?>
                        <td><span style="font-weight: bold;" class="red">未绑定</span>  <button class="btn btn-mini btn-primary" data-toggle="modal" data-target="#myModal">点击绑定</button></td>
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
                <?php endif; ?>
            </dl>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
</div>


