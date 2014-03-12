<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>本次活动中奖用户</h2>
        </div>

        <div class="box-content">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>提示信息!</strong>以下为本次活动中奖的用户列表.
            </div>
            <?php if($data): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>微信ID</th>
                    <th>SN码</th>
                    <th>奖项</th>
                    <th>会员手机</th>
                    <th>是否领取</th>
                    <th>中奖时间</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($data as $k=>$v): ?>
                    <tr>
                        <td><?php echo $v->id; ?></td>
                        <td><?php echo $v->openid; ?></td>
                        <td><?php echo $v->sn; ?></td>
                        <td><?php if($v->prize_type==1){ echo '一等奖';}else if($v->prize_type==2){ echo '二等奖';}else if($v->prize_type==3){ echo '三等奖';} ?></td>
                        <td><?php echo $v->phone; ?></td>
                        <td><?php if($v->is_get==1){ echo '已领取';}else{ echo '未领取';} ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>

                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示信息!</strong>当前没有用户中奖哦.
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

    </div>
</div>

</div>
</div>
