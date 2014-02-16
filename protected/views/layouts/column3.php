<?php /* @var $this Controller */ ?>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo Yii::app()->getBaseUrl();?>/img/logo20.png" /> <span>wapwei</span></a>



            <!-- user dropdown starts -->
            <div class="btn-group pull-right" >
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i><span class="hidden-phone"> <?php echo Yii::app()->session['user']->email; ?></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->getBaseUrl();?>/login/out">退出</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->


        </div>
    </div>
</div>
    <!-- topbar ends -->
<div class="container-fluid">
    <div class="row-fluid">
    <?php if(Yii::app()->session['user']->level == 1): ?>
    <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">代理商管理</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/add"><i class="icon-home"></i><span class="hidden-tablet">添加代理商</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/list"><i class="icon-home"></i><span class="hidden-tablet">代理商列表</span></a></li>
            </ul>
        </div><!--/.well -->
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">模版管理</li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Template/show?trade_id=1"><i class="icon-home"></i><span class="hidden-tablet">标准模版</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Template/templatelist"><i class="icon-home"></i><span class="hidden-tablet">行业模版</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Helper/list"><i class="icon-home"></i><span class="hidden-tablet">微信助手</span></a></li>
        </ul>
    </div><!--/.well -->
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">套餐管理</li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Package/add"><i class="icon-home"></i><span class="hidden-tablet">添加套餐</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Template/templatelist"><i class="icon-home"></i><span class="hidden-tablet">分配套餐</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Package/list"><i class="icon-home"></i><span class="hidden-tablet">套餐列表</span></a></li>
        </ul>
    </div><!--/.well -->
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">微信用户管理</li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/user/userlist"><i class="icon-home"></i><span class="hidden-tablet">微信用户列表</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentUserCheck/list"><i class="icon-home"></i><span class="hidden-tablet">微信用户审核</span></a></li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/addUser"><i class="icon-home"></i><span class="hidden-tablet">微信用户添加</span></a></li>
        </ul>
    </div><!--/.well -->

    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">用户资料审核</li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentUserCheck/list"><i class="icon-home"></i><span class="hidden-tablet">待审核列表</span></a></li>
        </ul>
    </div><!--/.well -->

    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">个人中心</li>
            <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AgentManage/list"><i class="icon-home"></i><span class="hidden-tablet">密码修改</span></a></li>
        </ul>
    </div><!--/.well -->
    </div>
    <?php endif; ?>
    <!-- left menu starts -->
    <?php if(Yii::app()->session['user']->level == 2): ?>
    <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">个人中心</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/set"><i class="icon-home"></i><span class="hidden-tablet">账户设置</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/pwdset"><i class="icon-home"></i><span class="hidden-tablet">密码修改</span></a></li>
            </ul>
        </div><!--/.well -->



        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">代理商专区</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/addUser"><i class="icon-home"></i><span class="hidden-tablet">添加客户</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/applyList"><i class="icon-home"></i><span class="hidden-tablet">客户申请管理</span></a></li>
            </ul>
        </div><!--/.well -->
    </div>
    <?php endif; ?>
    <?php if(Yii::app()->session['user']->level == 3): ?>
    <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">我的万普微盟</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/home"><i class="icon-user"></i><span class="hidden-tablet">我的首页</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/set"><i class="icon-asterisk"></i><span class="hidden-tablet">个人设置</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/pwdset"><i class="icon-edit"></i><span class="hidden-tablet">修改密码</span></a></li>
            </ul>
        </div><!--/.well -->
        <?php if(Yii::app()->session['user']->trade_id == 1): ?>
            <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="nav-header hidden-tablet">微官网</li>
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/base"><i class="icon-info-sign"></i><span class="hidden-tablet">基本信息</span></a></li>
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/menuset"><i class="icon-list-alt"></i><span class="hidden-tablet">菜单管理</span></a></li>
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Package/add"><i class="icon-thumbs-up"></i><span class="hidden-tablet">个性定制</span></a></li>
                </ul>
            </div><!--/.well -->
        <?php endif; ?>
        <?php if(Yii::app()->session['user']->trade_id == 2): ?>
            <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="nav-header hidden-tablet">行业版</li>
                    <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/wxfood"><i class="icon-info-sign"></i><span class="hidden-tablet">微餐饮</span></a></li>
                </ul>
            </div><!--/.well -->
        <?php endif; ?>
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">微信基础服务</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AutoReplay/base"><i class="icon-resize-horizontal"></i><span class="hidden-tablet">自动回复</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Source/base"><i class="icon-comment"></i><span class="hidden-tablet">素材管理</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Menu/base"><i class="icon-pencil"></i><span class="hidden-tablet">自定义菜单</span></a></li>
                <li><a class="ajax-link" href="index.html"><i class="icon-thumbs-up"></i><span class="hidden-tablet">微信助手</span></a></li>
            </ul>
        </div><!--/.well -->
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">粉丝互动中心</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/WeixinFans/index"><i class="icon-star"></i><span class="hidden-tablet">微信粉丝</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Msg/index"><i class="icon-comment"></i><span class="hidden-tablet">消息管理</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Activity/index"><i class="icon-random"></i><span class="hidden-tablet">活动中心</span></a></li>
            </ul>
        </div><!--/.well -->

        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">数据统计</li>
                <li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet">访问统计</span></a></li>
                <li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet">用户统计</span></a></li>
            </ul>
        </div><!--/.well -->
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
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- transition / effect library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-scrollspy.js"></script>

        <!-- library for creating tabs -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.min.js'></script>

        <!-- chart libraries start -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.stack.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/charisma.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/add-money.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/notifIt.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ajaxupload.1.0.js"></script>
