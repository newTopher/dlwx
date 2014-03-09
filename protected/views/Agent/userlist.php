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
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 300px;">公司名</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">电话</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 150px;">联系人</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 150px;">到期时间</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">金额</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px;">状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th>
                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($list as $v=>$val):?>
                        <tr class="odd">
                            <td class=" sorting_1"><?php echo $val->id?$val->id:'';?></td>
                            <td class=" sorting_1"><?php echo $val->email?$val->email:'';?></td>
                            <td class=" sorting_1"><?php echo $val->company_name;?></td>

                            <td class=" sorting_1"><?php echo $val->tel;?></td>
                            <td class=" sorting_1"><?php echo $val->name;?></td>
                            <td class="center "><?php echo date('Y/m/d H:i:s',$val->deadline_date);?></td>
                            <td class="center "><?php echo $val->money?$val->money:'';?></td>
                            <td class="center ">
                                <?php
                                $end_time=$val->deadline_date;
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
                                <a class="btn btn-success" href="<?php echo Yii::app()->getBaseUrl();?>/Agent/UserEdit?id=<?php echo $val->id;?>">
                                    <i class="icon-zoom-in icon-white"></i>
                                    查看
                                </a>
                                <a class="btn btn-danger" href="<?php echo Yii::app()->getBaseUrl();?>/AgentManage/view?id=<?php echo $val->id;?>">
                                    <i class="icon-zoom-in icon-white"></i>
                                    充值
                                </a>

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