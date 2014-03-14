<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>微信粉丝管理</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>  如果您的公众号已认证,可以在微信基础服务自定义菜单中设置
                    您申请到的appID和appsecret即可获取粉丝详细资料还能给他发送消息,当用户与你最后联系时间超过24小时之后将不可以推送信息给用户.
                </div>
                <div class="tab-pane fade active in" id="home">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>用户编号</th>
                            <th>微信ID</th>
                            <th>昵称</th>
                            <th>最后联系时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($wxUserData as $k=>$v): ?>
                            <tr>
                                <td><?php echo $v->id; ?></td>
                                <td><?php echo $v->openid; ?></td>
                                <td><?php echo $v->nickname; ?></td>
                                <td><?php echo date("Y-m-d H:i:s",$v->update_time); ?></td>
                                <td>
                                    <a href="<?php Yii::app()->request->baseUrl; ?>/WeixinFans/view/id/<?php echo $v->id; ?>/openid/<?php echo $v->openid; ?>" class="btn btn-mini btn-primary">查看用户</a>
                                    <?php if($v->update_time > time() - 24*3600): ?>
                                      <a href="<?php Yii::app()->request->baseUrl; ?>/WeixinFans/SendMsgView/id/<?php echo $v->id; ?>/openid/<?php echo $v->openid; ?>" class="btn btn-mini btn-primary">推送消息</a>
                                      <?php else: ?>
                                        <a href="#" class="btn btn-mini disabled">推送消息</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div id="pager" class="pager">
                    <?php

                    $this->widget('CLinkPager',array(
                            'header'=>'',
                            'prevPageLabel' => '上一页',
                            'nextPageLabel' => '下一页',
                            'pages' => $pages,
                            'maxButtonCount'=>13
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>