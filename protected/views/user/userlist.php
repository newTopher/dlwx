<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">主页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">微信用户列表</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 微信用户列表</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="control-group">
                    <div class="controls">
                        <form action="<?php echo Yii::app()->request->baseUrl.'/user/userlist';?>" method="post">
                        <div class="input-append">
                            <input type="text" size="16" id="appendedInputButton" name="email" ><button type="submit" class="btn">搜索</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">

                    <table class="table table-striped table-bordered" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">编号</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">登录名</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">使用人</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">所属代理商</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">注册日期</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 150px;">续费日期</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">金额</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px;">状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th>
                        </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($list as $k=>$val):?>



<tr class="odd">
    <td class=" sorting_1"><?php  echo $val['user']['id'];?></td>
    <td class=" sorting_1"><?php  echo $val['user']['email'];?></td>
    <td class=" sorting_1"><?php echo empty($val['user']['name'])?"匿名":$val['user']['name'];?></td>
    <td class=" sorting_1"><?php echo $val['agent_user']['email'];?></td>
    <td class="center "><?php echo date('Y/m/d H:i:s',$val['user']['last_login_time']);?></td>
    <td class="center "><?php echo date('Y/m/d H:i:s',$val['user']['deadline_date']);?></td>
    <td class="center "><?php echo empty($val['user']['money'])?0:$val['user']['money'];?></td>

    <td class="center ">
        <?php
        $end_time=$val['user']['deadline_date'];
        $status1=$val['user']['status'];
        $time=time();
        if($time<$end_time){
            $status=$val['user']['status'];
        }else{
            $status=0;
        }
        ?>
        <?php if($status==1):?>
        <span class="label label-success">运行</span>
        <?php elseif($status==0):?>
        <span class="label label-failure">暂停</span>
        <?php elseif($status==2):?>
        <span class="label label-warning">试用</span>
        <?php endif?>
    </td>
    <td class="center ">
        <?php if($status1!=0):?>
        <a class="btn btn-success" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/view?id=<?php echo $val['user']['id'];?>">
            <i class="icon-zoom-in icon-white"></i>
            编辑
        </a>
        <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Close?id=<?php echo $val['user']['id']?>">
            <i class="icon-trash icon-white"></i>
            停用
        </a>
        <?php elseif($status1==0 && $time<$end_time):?>
        &nbsp;&nbsp;&nbsp;<span class="label" href="">编辑</span>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Open?id=<?php echo $val['user']['id']?>&type=<?php echo $val['user']['type']?>">
            <i class="icon-trash icon-white"></i>
            开启
        </a>
            <?php elseif($status1==0 && $time>=$end_time):?>
            &nbsp;&nbsp;&nbsp;<span class="label" href="">编辑</span>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Renew?id=<?php echo $val['user']['id']?>&type=<?php echo $val['user']['type']?>">
                <i class="icon-trash icon-white"></i>
                开启
            </a>
        <?php endif;?>
    </td>
</tr>
<?php endforeach;?>
                        </tbody>
                    </table>
                    </div>

            </div>
        </div>
    </div>
</div>

</div>
</div>