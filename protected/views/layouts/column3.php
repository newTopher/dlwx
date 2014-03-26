<?php header("content-type :text/html;charset=utf-8");?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" target="_blank" href="http://www.wapwei.com"> <img alt="Charisma Logo" src="<?php echo Yii::app()->getBaseUrl();?>/img/logo_wapwei.png" /><span class="logo_title">万普微盟</span></a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right" >
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i><span class="hidden-phone"> <?php echo Yii::app()->session['user']->email; ?></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->getBaseUrl();?>/login/loginOut">退出</a></li>
                </ul>
            </div>
            <?php if(Yii::app()->session['user']->level == 3):?>
            <div class="header_image" style="float: right;height: 50px;width: 50px;margin: 5px;">
                <img style="width: 50px;height: 50px; -moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;" src="<?php echo Yii::app()->request->baseUrl.'/upload/weixin_heading/'.Yii::app()->session['user']->fakeid.'png'?Yii::app()->request->baseUrl.'/upload/weixin_headimg/'.Yii::app()->session['user']->fakeid.'.'.'png':null;?>">
            </div>
            <?php endif;?>
            <div class="username" style="float:right;line-height: 30px;font-size: 15px;font-family: 微软雅黑;margin-right: 5px;";>
            <?php if(Yii::app()->session['user']->level == 3):?>
               
            <?php elseif(Yii::app()->session['user']->level == 2):?>
                <span><?php echo Yii::app()->session['user']->agent_name?Yii::app()->session['user']->agent_name:'';?></span>
            <?php endif;?>
        </div>
            <!-- user dropdown ends -->


        </div>
    </div>
</div>
    <!-- topbar ends -->
<div class="container-fluid">
    <div class="row-fluid">
    <?php if(Yii::app()->session['user']->level == 1): ?>
    <div class="span2 main-menu-span" id="accordion">

        <h3>代理商管理</h3>
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/add"><span class="hidden-tablet">添加代理商</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/list"><span class="hidden-tablet">代理商列表</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/AddMoneyCheck"><span class="hidden-tablet">充值审核</span></a></li>
        </ul>

        <h3>模版管理</h3>
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Template/show?trade_id=1"><span class="hidden-tablet">标准模版</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Template/templatelist"><span class="hidden-tablet">行业模版</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Helper/list"><span class="hidden-tablet">微信助手</span></a></li>
        </ul>

        <h3>套餐管理</h3>
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Package/add"><span class="hidden-tablet">添加套餐</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Template/templatelist"><span class="hidden-tablet">分配套餐</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Package/list"><span class="hidden-tablet">套餐列表</span></a></li>
        </ul>

        <h3>微信用户管理</h3>
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/user/list"><span class="hidden-tablet">微信用户列表</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentUserCheck/list"><span class="hidden-tablet">微信用户审核</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/user/AddUser"><span class="hidden-tablet">微信用户添加</span></a></li>
        </ul>



        <h3>用户资料审核</h3>
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentUserCheck/list"><span class="hidden-tablet">待审核列表</span></a></li>
        </ul>


        <h3>个人中心</h3>
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/list"><span class="hidden-tablet">密码修改</span></a></li>
        </ul>
    </div>
    <?php endif; ?>
    <!-- left menu starts -->
    <?php if(Yii::app()->session['user']->level == 2): ?>
    <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">个人中心</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/set"><span class="hidden-tablet">账户设置</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/pwdset"><span class="hidden-tablet">密码修改</span></a></li>
            </ul>
        </div><!--/.well -->
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">代理商专区</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/addUser"><span class="hidden-tablet">添加客户</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/UserList"><span class="hidden-tablet">客户列表</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/applyList"><span class="hidden-tablet">客户申请管理</span></a></li>
            </ul>
        </div><!--/.well -->

        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">充值信息</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/AddMoney"><span class="hidden-tablet">平台充值</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/addUser"><span class="hidden-tablet">添加客户</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/UserList"><span class="hidden-tablet">客户列表</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/applyList"><span class="hidden-tablet">客户申请管理</span></a></li>
            </ul>
        </div><!--/.well -->
    </div>
    <?php endif; ?>
    <?php if(Yii::app()->session['user']->level == 3): ?>
    <div class="span2 main-menu-span" id="accordion">

            <h3>我的万普微盟</h3>
            <ul class="nav nav-tabs nav-stacked main-menu" id="block_1">

                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/Home?b=1"><span class="hidden-tablet">我的首页</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/Set?b=1"><span class="hidden-tablet">个人设置</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/Pwdset?b=1"><span class="hidden-tablet">修改密码</span></a></li>
            </ul>

        <?php if(Yii::app()->session['user']->trade_id == 1): ?>
                <h3>微官网</h3>
                <ul class="nav nav-tabs nav-stacked main-menu" id="block_2">
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/base?b=2"><span class="hidden-tablet">基本信息</span></a></li>
                    <!--<li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/menuset"><i class="icon-list-alt"></i><span class="hidden-tablet">菜单管理</span></a></li>-->
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Templateselect?b=2"><span class="hidden-tablet">模板选择</span></a></li>
                    <?php if(Yii::app()->session['is_attr'] == 1): ?>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/ChannelManage/Index?b=2"><span class="hidden-tablet">栏目管理</span></a></li>
                    <?php endif; ?>
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/templateset?b=2"><span class="hidden-tablet">模板设置</span></a></li>
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Lbsset?b=2"><span class="hidden-tablet">LBS位置设置</span></a></li>
                </ul>

        <?php endif; ?>
        <?php if(Yii::app()->session['user']->trade_id == 2): ?>
                <h3>行业版</h3>
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/wxfood"><span class="hidden-tablet">微餐饮</span></a></li>
                </ul>
        <?php endif; ?>

        <h3>微信会员卡</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_3">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/MemberManage/Base?b=3"><span class="hidden-tablet">商家基本设置</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/MemberManage/Cardset?b=3"><span class="hidden-tablet">会员卡设置</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/MemberManage/Memberlist?b=3"><span class="hidden-tablet">微信会员管理</span></a></li>

        </ul>

        <h3>微应用</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_4">

            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/OrderManage/Index?b=4"><span class="hidden-tablet">微预约</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/TuanManage/Index?b=4"><span class="hidden-tablet">微团购</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/LiuyanManage/Index?b=4"><span class="hidden-tablet">微留言</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/channelManage/index?b=4"><span class="hidden-tablet">微调研</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/PhotoManage/Index?b=4"><span class="hidden-tablet">微相册</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/CallingcardManage/Index?b=4"><span class="hidden-tablet">微名片</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/templateset?b=4"><span class="hidden-tablet">微全景</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/templateset?b=4"><span class="hidden-tablet">微吧</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/templateset?b=4"><span class="hidden-tablet">微门店</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/templateset?b=4"><span class="hidden-tablet">微贺卡</span></a></li>
        </ul>

        <h3>微活动</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_5">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Salecard/Index?b=5"><span class="hidden-tablet">微信优惠券</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Guaguacard/Index?b=5"><span class="hidden-tablet">微信刮刮卡</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Zhuancard/Index?b=5"><span class="hidden-tablet">幸运大转盘</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Activity/index?b=5"><span class="hidden-tablet">微信墙</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Activity/index?b=5"><span class="hidden-tablet">微信水果达人</span></a></li>
        </ul>

        <h3>微信基础服务</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_6">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AutoReplay/Base?b=6"><span class="hidden-tablet">自动回复</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Source/Base?b=6"><span class="hidden-tablet">素材管理</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Menu/Base?b=6"><span class="hidden-tablet">自定义菜单</span></a></li>
        </ul>


        <h3>微用户</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_7">

            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/WeixinFans/Index?b=7"><span class="hidden-tablet">微信粉丝</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Msg/Index?b=7"><span class="hidden-tablet">消息管理</span></a></li>
        </ul>

        <h3>微数据</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_8">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl();?>/DataManage/Index?b=8"><span class="hidden-tablet">粉丝数据</span></a></li>
            <li><a class="ajax-link" href="index.html"><span class="hidden-tablet">访问数据</span></a></li>
        </ul>

        <h3>行业版</h3>
        <ul class="nav nav-tabs nav-stacked main-menu" id="block_9">
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Trade/Vshop?b=9"><span class="hidden-tablet">微商城</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Trade/Vshop?b=9"><span class="hidden-tablet">微餐饮</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Trade/Vshop?b=9"><span class="hidden-tablet">微酒店</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Trade/Vshop?b=9"><span class="hidden-tablet">微房产</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Trade/Vshop?b=9"><span class="hidden-tablet">微汽车</span></a></li>

        </ul>

    </div><!--/span-->
    <?php endif; ?>
    <noscript>
        <div class="alert alert-block span10">
            <h4 class="alert-heading">Warning!</h4>
            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
    </noscript>

    <div id="content" class="span10">
<?php $this->beginContent('//layouts/main'); ?>
	<?php echo $content; ?>
<?php $this->endContent(); ?>

        <footer>
            <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">wapwei</a> 2008-2014</p>
            <p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">wapwei</a></p>
        </footer>

    </div><!--/.fluid-container-->
    <script type="text/javascript">
        var block = <?php echo Yii::app()->session['block']; ?>;
    </script>
        <script type="text/javascript">
            $(function() {
                $( "#accordion" ).accordion({active:(block-1)});
                $( "#accordion ul").css('height','auto');
                $( "#accordion ul").css('margin-bottom','4px');
            });
        </script>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-transition.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-tab.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/add-money.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/notifIt.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uploadify.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.8.21.custom.min.js"></script>



