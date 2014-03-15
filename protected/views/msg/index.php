<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>消息管理</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>  当消息超过48小时之后将不能主动回复该条信息.
                </div>
                <div class="tab-pane fade active in" id="home">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>消息编号</th>
                            <th>微信ID</th>
                            <th>消息内容</th>
                            <th>消息类型</th>
                            <th>最后时间</th>

                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($msgData != null): ?>
                        <?php foreach($msgData as $k=>$v): ?>
                        <tr>
                            <td><?php echo $v->id; ?></td>
                            <td><?php echo $v->from_openid; ?></td>
                            <td><?php echo $v->content; ?></td>
                            <td><?php if($v->type == 'text'){ echo '文字';}else{ echo '多媒体';} ?></td>
                            <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>

                            <td>
                                <a href="<?php Yii::app()->request->baseUrl; ?>/WeixinFans/View/openid/<?php echo $v->from_openid; ?>" class="btn btn-mini btn-primary">查看对话</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>您还没收到过任何消息.
                        </div>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div id="pager" class="pager" style="float: left;margin-top: 30px;">
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