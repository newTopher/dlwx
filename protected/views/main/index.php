<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">欢迎您</a>
        </li>
    </ul>
</div>
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
            <h2><i class="icon-info-sign"></i> Introduction</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h1>Charisma <small>free, premium quality, responsive, multiple skin admin template.</small></h1>
            <p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you :)</p>
            <p><b>All pages in the menu are functional, take a look at all, please share this with your followers.</b></p>

            <p class="center">
                <a href="http://usman.it/free-responsive-admin-template" class="btn btn-large btn-primary"><i class="icon-chevron-left icon-white"></i> Back to article</a>
                <a href="http://usman.it/free-responsive-admin-template" class="btn btn-large"><i class="icon-download-alt"></i> Download Page</a>
            </p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

</div>
</div>


