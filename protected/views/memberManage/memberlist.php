<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>会员里列表</h2>
        </div>

        <div class="box-content">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>提示信息!</strong>当前的注册会员列表.
            </div>
            <?php if($data): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>会员编号</th>
                    <th>会员名称</th>
                    <th>会员手机</th>
                    <th>注册时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($data as $k=>$v): ?>
                    <tr>
                        <td><?php echo $v->id; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->phone; ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>
                        <td>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/MemberManage/Vipinfo/id/<?php echo $v->id; ?>" class="btn btn-mini btn-info">查看</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>

                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示信息!</strong>当前没有注册会员噢.
                    </div>
                <?php endif; ?>
                </tbody>


            </table>

            <div id="pager">
                <?php

                $this->widget('CLinkPager',array(
                        'header'=>'',
                        'firstPageLabel' => '首页',
                        'lastPageLabel' => '末页',
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
