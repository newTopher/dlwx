<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">审核失败原因</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>审核失败原因</h2>

        </div>
        <div class="box-content">
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert"></button>
                <h4>尊敬的代理商您好:</h4>
                <p class="lead"><small>由于您提交的名为<strong><?php echo $reasonData->wx_account;  ?></strong>的公众账号<strong><?php echo $reasonData->mark;  ?></strong>,所以未能通过微信绑定，请您重新修改资料等待审核。</small></p>
            </div>
            <a class="btn btn-info" href="<?php echo Yii::app()->getBaseUrl(); ?>/Agent/Resubmit/id/<?php echo $reasonData->id; ?>">
                <i class="icon-edit icon-white"></i>
                重新提交
            </a>
        </div>
    </div>
</div>

</div>
</div>