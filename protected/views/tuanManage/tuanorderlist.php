<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="overflow-x: hidden;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">订单详情</h3>
    </div>
    <div class="modal-body">
        <div class="tooltip-demo well" style="margin-bottom: 15px;">
            <div>
                <p>订单编号  : <span id="ordernu"></span> </p>
                <p>商品名称  : <span id="tname"></span> </p>
                <p>微信ID   :  <span id="openid"></span> </p>
                <p>用户姓名   :  <span id="name"></span> </p>
                <p>手机  :  <span id="phone"></span> </p>
                <p>数量  :  <span id="num"></span> </p>
                <p>总金额  :  <span id="money"></span> </p>
                <p>下单时间  : <span id="add_time"></span>  </p>
                <p>备注  : <span id="mark"></span>  </p>
                <p>状态  :  <span id="status" class="label label-success"></span> </p>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>本次团购订单</h2>
        </div>

        <div class="box-content">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>提示信息!</strong>以下为本次团购订单列表.
            </div>
            <?php if($tuanorderlist): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>订单编号</th>
                    <th>微信ID</th>
                    <th>手机号码</th>
                    <th>数量(份)</th>
                    <th>总金额(元)</th>
                    <th>下单时间</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($tuanorderlist as $k=>$v): ?>
                    <tr>
                        <td><?php echo $v->id; ?></td>
                        <td><?php echo $v->openid; ?></td>
                        <td><?php echo $v->phone; ?></td>
                        <td><?php echo $v->num; ?></td>
                        <td><?php echo $v->money; ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>

                        <td><?php if($v->status==0){ echo '<span class="label label-info" style="display:block">待审核</span>';}else if($v->status == 1){ echo '<span class="label label-success" style="display:block">审核通过</span>';} ?></td>
                        <td><a onclick="showvip(<?php echo $v->id; ?>)" href="javascript:;" class="btn btn-mini btn-info">查看</a>
                            <a onclick="return confirm('确认此订单有效?')" href="<?php echo Yii::app()->getBaseUrl(); ?>/TuanManage/Doorder/id/<?php echo $v->id; ?>/tid/<?php echo $v->tid; ?>" class="btn btn-mini btn-info">审核</a></td>
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
<script type="text/javascript">
    function showvip(id){
        $.getJSON('<?php echo Yii::app()->getBaseUrl(); ?>/TuanManage/Getorder',{id:id},function(data){
            if(data.code == 0){
                $("#ordernu").text(data.data.id);
                $("#tname").text(data.tuanname);
                $("#openid").text(data.data.openid);
                $("#name").text(data.data.username);
                $("#phone").text(data.data.phone);
                $("#num").text(data.data.num+'份');
                $("#money").text(data.data.money+'元');
                $("#mark").text(data.data.mark);
                var unixTimestamp = new Date(data.data.add_time * 1000)
                commonTime = unixTimestamp.toLocaleString()
                $("#add_time").text(commonTime);
                if(data.data.status == 1){
                    $("#status").text('已确认');
                }else if(data.data.status == 0){
                    $("#status").text('待审核');
                }
                $("#myModal").modal('show');
            }else{
                notif({
                    type: "error",
                    msg: data.msg,
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        });
    }
</script>
