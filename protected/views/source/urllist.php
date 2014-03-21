<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>链接地址列表</h2>
        </div>

        <div class="box-content">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>提示信息!</strong>当前的链接地址列表.
            </div>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/Source/Addurl" class="btn btn-small btn-primary">添加链接</a>
            <?php if($data): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>链接编号</th>
                    <th>链接地址</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($data as $k=>$v): ?>
                    <tr>
                        <td><?php echo $v->id; ?></td>
                        <td><?php echo $v->url; ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>
                        <td>
                            <a onclick="return confirm('确定删除此条url地址吗')" href="<?php echo Yii::app()->request->baseUrl; ?>/Source/Del/id/<?php echo $v->id; ?>" class="btn btn-mini btn-danger">删除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>

                    <div class="alert alert-info" style="margin-top: 10px;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示信息!</strong>当前没有链接地址噢.
                    </div>
                <?php endif; ?>
                </tbody>


            </table>

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
        <?php if(!empty($msg)):?>
            <div class="msg_fade" id="ui_notifIt" class="info" style="background: deepskyblue; height: 60px; width: 100%; top: 0px; left: 0px;">
                <p style="line-height: 60px;">
                    <b><?php echo $msg;?></b>
                </p>
            </div>
        <?php endif;?>
    </div>
</div>

</div>
</div>