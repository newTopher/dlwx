<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="overflow-x: hidden;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">会员卡片</h3>
    </div>
    <div class="modal-body">
        <div class="tooltip-demo well" style="margin-bottom: 15px;">
            <div>
                <p>会员名称  : <span id="vipname"></span> </p>
                <p>微信ID   :  <span id="openid"></span> </p>
                <p>性别   :  <span id="sex"></span> </p>
                <p>详细地址  :  <span id="address"></span> </p>
                <p>生日  :  <span id="birthday"></span> </p>
                <p>注册时间  : <span id="add_time"></span>  </p>
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
            <h2>会员列表</h2>
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
                    <th>积分</th>
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
                        <td><?php echo $v->score; ?>分</td>
                        <td><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>
                        <td>
                            <a onclick="showvip(<?php echo $v->id; ?>)" href="javascript:;" class="btn btn-mini btn-info">查看</a>
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
           $.getJSON('<?php echo Yii::app()->getBaseUrl(); ?>/MemberManage/Getmember',{id:id},function(data){
               if(data.code == 0){
                   $("#vipname").text(data.data.username);
                   $("#openid").text(data.data.openid);
                   if(data.data.sex == 1){
                       data.data.sex = '男';
                   }else{
                       data.data.sex = '女';
                   }
                   $("#sex").text(data.data.sex);
                   $("#address").text(data.data.address);
                   $("#birthday").text(data.data.birthday);
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
</script>
