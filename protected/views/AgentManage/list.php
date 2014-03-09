<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">主页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">代理商列表</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 代理商列表</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 60px;">编号</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">用户名</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">手机</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">注册日期</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 150px;">续费日期</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">金额</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px;">状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th>
                        </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($list as $v=>$val):?>
                            <tr class="odd">
                                <td class=" sorting_1"><?php echo $val->id;?></td>
                                <td class=" sorting_1"><?php echo $val->email;?></td>
                                <td class=" sorting_1"><?php echo $val->mobilephone;?></td>
                                <td class="center "><?php echo date('Y/m/d H:i:s',$val->login_time);?></td>
                                <td class="center "><?php echo date('Y/m/d H:i:s',$val->end_time);?></td>
                                <td class="center "><?php echo $val->money;?></td>
                                <td class="center ">
                                    <?php
                                        $end_time=$val->end_time;
                                        $time=time();
                                        $status1=$val->status;

                                    if($time<$end_time&&$val->status!=0){
                                        $status=$val->status;
                                }else{
                                        $status=0;
                                        }
                                    ?>
                                    <?php if($status==1):?>
                                        <span class="label label-success">运行</span>
                                    <?php elseif($status==0): ?>
                                        <span class="label label-failure">暂停</span>
                                    <?php elseif($status==2):?>
                                    <span class="label label-warning">试用</span>
                                    <?php endif;?>
                                </td>
                                <td class="center ">
                                    <?php if($status1!=0 && $val->end_time > time()):?>
                                    <a class="btn btn-success" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/view?id=<?php echo $val->id;?>">
                                        <i class="icon-zoom-in icon-white"></i>
                                       编辑
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Close?id=<?php echo $val->id?>">
                                        <i class="icon-trash icon-white"></i>
                                        停用
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Renew?id=<?php echo $val->id?>&type=<?php echo $val->type?>}">
                                        <i class="icon-trash icon-white"></i>
                                        续费
                                    </a>
                                    <?php elseif($status1!=0 && $val->end_time <= time()):?>

                                    <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Renew?id=<?php echo $val->id?>&type=<?php echo $val->type?>}">
                                        <i class="icon-trash icon-white"></i>
                                        续费
                                    </a>
                                    <?php elseif($status1==0 && $val->end_time<=time()):?>
                                    <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Renew?id=<?php echo $val->id?>&type=<?php echo $val->type?>}">
                                        <i class="icon-trash icon-white"></i>
                                        续费
                                    </a>
                                    <?php elseif($status1==0 && $val->end_time >time()):?>
                                    <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/Open?id=<?php echo $val->id?>&type=<?php echo $val->type?>}">
                                        <i class="icon-trash icon-white"></i>
                                        开启
                                    </a>
                                    <a class="btn btn-success" href="<?php echo Yii::app()->request->baseUrl;?>/AgentManage/view?id=<?php echo $val->id;?>">
                                        <i class="icon-zoom-in icon-white"></i>
                                        编辑
                                    </a>
                                    <?php endif;?>
                                </td>
                            </tr>
                        <?php endforeach;?>

                        </tbody>
                    </table>
                    <div class="row-fluid"><div class="span12 center"></div></div></div>

            </div>
        </div>
    </div>
</div>

</div>
</div>