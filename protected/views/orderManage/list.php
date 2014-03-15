<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="overflow-x: hidden;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">预约详情</h3>
    </div>
    <div class="modal-body">
        <div class="tooltip-demo well" style="margin-bottom: 15px;">
            <div>
                <p>用户名称  : <span id="username"></span> </p>
                <p>微信ID   :  <span id="openid"></span> </p>
                <p>联系电话   :  <span id="tel"></span> </p>
                <p>预约日期  :  <span id="date"></span> </p>
                <p>提交时间  : <span id="add_time"></span>  </p>
                <div class="input"></div>
                <div class="select"></div>
                <p>备注  : <span id="remark"></span>  </p>
                <p>状态  :  <span class="label label-success">正常</span> </p>
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
                    <th>用户姓名</th>
                    <th>联系方式</th>
                    <th>提交时间</th>
                    <th>操作</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $k=>$v): ?>
                    <tr>
                        <td><?php echo $v->id; ?></td>
                        <td><?php echo $v->openid; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->tel; ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>
                        <td>
                            <?php if($v->type==0):?>
                            <span class="label label-failed" style="display:block">待审核</span>
                            <span class="label label-success" style="display:none">审核通过</span>
                            <?php else:?>
                            <span class="label label-failed" style="display:none">待审核</span>
                            <span class="label label-success" style="display:block">审核通过</span>
                            <?php endif;?>
                        </td>
                        <td>
                            <a onclick="showvip(<?php echo $v->id; ?>)" href="javascript:;" class="btn btn-mini btn-info">查看</a>
                            <?php if($v->type==0):?>
                            <a onclick="checked(this,<?php echo $v->id; ?>)" href="javascript:;" id="checkbutton" class="btn btn-mini btn-info">审核</a>
                            <?php endif;?>
                        </td>
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
<script type="text/javascript">
    function showvip(id){
        $.getJSON('<?php echo Yii::app()->getBaseUrl(); ?>/Order/GetOrder',{id:id},function(data){
            if(data.code == 0){
                console.log(data);
                $("#username").text(data.data.username);
                $("#openid").text(data.data.openid);
                $("#tel").text(data.data.tel);
                $inputdata=data.input_data;
                var str ='';
                $.each($inputdata,function(i,o){
                    str+="<p>"+$inputdata[i][0]+"<span>"+"：  "+$inputdata[i][1]+"</span> </p>";
                });
                $('.input').html(str);
                $selectdata=data.select_data;
                var str ='';
                $.each($selectdata,function(i,o){
                    str+="<p>"+$selectdata[i][0]+"<span>"+"：  "+$selectdata[i][1]+"</span> </p>";
                });
                $('.select').html(str);
                $("#date").text(data.data.dateline+'  '+data.data.timepart);
                var unixTimestamp = new Date(data.data.add_time * 1000)
                commonTime = unixTimestamp.toLocaleString()
                $("#add_time").text(commonTime);
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
    function checked(obj,id){
        $.getJSON('<?php echo Yii::app()->getBaseUrl(); ?>/Order/checkOrder',{id:id},function(data){
            if(data.code == 0){
                $(obj).parent().prev().find('.label-success').show();
                $(obj).hide();
                $(obj).parent().prev().find('.label-failed').hide();
                notif({
                    type: "success",
                    msg: '审核成功',
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return true;
            }else{
                notif({
                    type: "error",
                    msg: '审核失败',
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
