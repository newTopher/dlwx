<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name;
?>
<script type="text/javascript">

</script>
<div class="container-fluid" style="background:url(<?php echo Yii::app()->request->baseUrl.'/images/loginbg1.jpg'?>);background-size: 100%;height:100%; ">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="span12 center login-header">

            </div><!--/span-->
        </div><!--/row-->

        <div class="row-fluid">
            <div class="well span5 center login-box">
                <?php if(!empty($errMsg)): ?>
                <div class="alert text-error">
                    <?php echo $errMsg;?>
                </div>
                <?php endif; ?>
                <?php if(empty($errMsg)): ?>
                <div class="alert alert-info">
                    请输入用户名和密码.
                </div>
                <?php endif; ?>
                <div class="admin_logo" style="margin-bottom: 10px;">
                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/admin_logo.jpg';?>" width='80px'>
                </div>

                <form class="form-horizontal" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/login/index" method="post">
                    <fieldset>
                        <div class="input-prepend" title="Username" data-rel="tooltip">
                            <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="email" id="username" type="text" value="" />
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password" data-rel="tooltip">
                            <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
                        </div>
                        <!--
                        <div class="clearfix"></div>
                        <div>
                            <?php // $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
                            <input name="verifyCode" style="width:55px;">
                        </div>

                        <div class="input-prepend">
                            <label class="remember" for="remember"><input type="checkbox" id="remember" value="1" name="remember"/>记住我</label>
                        </div>
                        -->
                        <div class="clearfix"></div>

                        <p class="center span5">
                            <button type="submit" class="btn btn-primary">登陆</button>
                        </p>



                    </fieldset>
                </form>

            </div><!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->