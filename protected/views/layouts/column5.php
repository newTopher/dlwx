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
    <?php if(Yii::app()->session['user']->level == 3): ?>
    <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">店铺管理</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/wxfood/Shopsetting/Index"><i class="icon-user"></i><span class="hidden-tablet">店铺设置</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/set"><i class="icon-asterisk"></i><span class="hidden-tablet">店铺公告</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/pwdset"><i class="icon-edit"></i><span class="hidden-tablet">商品分类</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/User/pwdset"><i class="icon-edit"></i><span class="hidden-tablet">商品管理</span></a></li>
            </ul>
        </div><!--/.well -->
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">店铺功能</li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/AutoReplay/base"><i class="icon-resize-horizontal"></i><span class="hidden-tablet">会员中心</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Source/base"><i class="icon-comment"></i><span class="hidden-tablet">优惠券</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Menu/base"><i class="icon-pencil"></i><span class="hidden-tablet">会员积分</span></a></li>
                <li><a class="ajax-link" href="<?php echo Yii::app()->getBaseUrl(); ?>/Menu/base"><i class="icon-pencil"></i><span class="hidden-tablet">店铺打折</span></a></li>
                <li><a class="ajax-link" href="index.html"><i class="icon-thumbs-up"></i><span class="hidden-tablet">店铺评论</span></a></li>
            </ul>
        </div><!--/.well -->
        <div class="well nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li class="nav-header hidden-tablet">设置中心</li>
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

