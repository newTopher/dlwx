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
                <h4>我的账号信息</h4>
                <hr>
                <dt>登陆账号</dt>
                <dd>designer</dd>
                <dt>服务商</dt>
                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>

            </dl>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

</div>
</div>


