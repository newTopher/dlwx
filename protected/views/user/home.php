<div class="sortable row-fluid">
    <?php if(Yii::app()->session['user']->level == 3): ?>
        <a data-rel="tooltip" title="6 个新微信用户." class="well span3 top-block" href="#">
            <span class="icon32 icon-red icon-user"></span>
            <div>微信用户</div>
            <div>507</div>
            <span class="notification">6</span>
        </a>

        <a data-rel="tooltip" title="4 个新微淘粉丝." class="well span3 top-block" href="#">
            <span class="icon32 icon-color icon-star-on"></span>
            <div>微淘粉丝</div>
            <div>228</div>
            <span class="notification green">4</span>
        </a>

        <a data-rel="tooltip" class="well span3 top-block" href="#">
            <span class="icon32 icon-color icon-star-on"></span>
            <div>访问数据</div>
            <div>228</div>
        </a>

        <a data-rel="tooltip" title="12 新消息." class="well span3 top-block" href="#">
            <span class="icon32 icon-color icon-envelope-closed"></span>
            <div>消息管理</div>
            <div>25</div>
            <span class="notification red">12</span>
        </a>
    <?php endif; ?>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>我的首页</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <dl class="dl-horizontal">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="info"><h3>账号信息</h3></th>
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
                        <td>2013-12-12,还剩余23天</td>
                    </tr>
                    <tr>
                        <td>账户余额</td>
                        <td>100元</td>
                    </tr>
                    <tr>
                        <td>我的微盟版本</td>
                        <td>基础版</td>
                    </tr>
                    </tbody>
                </table>

            </dl>

            <dl class="dl-horizontal">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="info"><h3>微信公众号信息</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="200px;">公众账号用户名</td>
                        <td>Jacob</td>
                    </tr>
                    <tr>
                        <td>token</td>
                        <td>ggdgsgsdgdsghs</td>
                    </tr>
                    <tr>
                        <td>url</td>
                        <td>2013-12-12,还剩余23天</td>
                    </tr>
                    <tr>
                        <td>绑定时间</td>
                        <td>2013-12-12,还剩余23天</td>
                    </tr>
                    <tr>
                        <td>绑定状态</td>
                        <td>开启</td>
                    </tr>
                    </tbody>
                </table>

            </dl>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

</div>
</div>


