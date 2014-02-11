<div style="position:relative">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 套餐选择介绍</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h1>Charisma <small>free, premium quality, responsive, multiple skin admin template.</small></h1>
            <p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you :)</p>
            <p><b>All pages in the menu are functional, take a look at all, please share this with your followers.</b></p>
            <div class="clearfix"></div>
        </div>
    </div>
    <form method="post" action="/package/add">
    <div class="box span4" style="margin-left:0%;width:32%;">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-user"></i> 选择模版</h2>
        </div>
        <div class="input-box"></div>
        <div class="box-content" style="display: block;">
            <div class="box-content">
                <ul class="dashboard-list">
                    <?php foreach($T_list as $val):?>
                    <label class="checkbox inline">
                        <div class="checksub checker" id="uniform-inlineCheckbox1">
                            <span class="">
                            <input type="checkbox" data="<?php echo "t".$val->id;?>" id="inlineCheckbox1" value="<?php echo $val->money?>" style="opacity: 0;">
                            </span>
                        </div>
                        <strong>模版名称:</strong> <a href="#"><?php echo $val->china_name;?>
                    </label>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Saruar Ahmed" src="<?php echo Yii::app()->getBaseUrl().'/'.$val->path_url.$val->nail_url;?>"></a>
                            <strong>所属行业:</strong> <a href="#">
                            <?php switch($val->trade_id){
                                case 1:echo "万普标准版";break;
                                case 2:echo "万普微餐饮";break;
                                case 3:echo "万普微汽车";break;
                                case 4:echo "万普微房产";break;
                                case 5:echo "万普微婚纱";break;
                    };
                        ?>
                    </a><br>
                        <strong>日期:</strong> <?php echo date('Y-m-d',time());?><br>

                        <strong>金额:</strong> <span class="label label-warning"><?php echo $val->money."元";?></span>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="box span4" style="margin-left: 3%;width:32%;">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-user"></i> 选择助手</h2>
        </div>
        <div class="box-content" style="display: block;">
            <div class="box-content">
                <ul class="dashboard-list">
                    <?php foreach($H_list as $v):?>
                    <label class="checkbox inline">

                        <div class="checker" id="uniform-inlineCheckbox1">
                            <span class="">
                            <input type="checkbox" data="<?php echo "h".$v->id;?>" id="inlineCheckbox1" value="<?php echo $v->money?>" style="opacity: 0;">
                        </span></div>  <strong>助手名称:</strong> <a href="#"><?php echo $v->china_name;?>
                    </label>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Usman" src="<?php echo Yii::app()->getBaseUrl().'/'.$v->path_url.$v->nail_image;?>"></a>
                        <strong>助手名称:</strong> <a href="#"><?php echo $v->name;?>
                    </a><br>
                        <strong>日期:</strong> <?php echo date('Y-m-d',time());?><br>
                        <strong>金额:</strong> <span class="label label-success"><?php echo $v->money."元";?></span>
                    </li>
                     <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="box span4" style="margin-left: 3%;width:30%;">
        <div class="box-header well" data-original-title="">
            <h2><i class="icon-user"></i> 增值功能</h2>
        </div>
        <div class="box-content" style="display: block;">
            <div class="box-content">
                <ul class="dashboard-list">
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Usman
                    </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-success">Approved</span>
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Sheikh Heera" src="http://www.gravatar.com/avatar/3232415a0380253cfffe19163d04acab.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Sheikh Heera
                    </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-warning">Pending</span>
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Abdullah" src="http://www.gravatar.com/avatar/46056f772bde7c536e2086004e300a04.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Abdullah
                    </a><br>
                        <strong>Since:</strong> 25/05/2012<br>
                        <strong>Status:</strong> <span class="label label-important">Banned</span>
                    </li>
                    <li>
                        <a href="#">
                            <img class="dashboard-avatar" alt="Saruar Ahmed" src="http://www.gravatar.com/avatar/564e1bb274c074dc4f6823af229d9dbb.png?s=50"></a>
                        <strong>Name:</strong> <a href="#">Saruar Ahmed
                    </a><br>
                        <strong>Since:</strong> 17/05/2012<br>
                        <strong>Status:</strong> <span class="label label-info">Updates</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div style="position: fixed;bottom:-5.5%;width:80%;margin-left:0%;boder:1px solid rgb(222, 222, 222);">

        <div class="form-actions" ">
            <div style="margin:0 auto;width:180px;">
                <div style="line-height: 25px;font-size: 20px;padding-bottom:5px;"><span>总共金额：</span><span class="add-money" style="color:rgb(255, 102, 0)">0</span></span></div>
                <button type="submit" class="btn btn-primary">提交套餐</button>
                <label class="checkbox inline">
                    <div class="checker" id="uniform-inlineCheckbox1"><span><input name="status" type="checkbox" id="inlineCheckbox1" value="1" style="opacity: 0;"></span></div> 开启
                </label>
        </div>
        </form>
    </div>
    </div>
