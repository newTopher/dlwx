<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">主页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">代理商充值列表</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 代理商充值列表</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 60px;">编号</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">代理商</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">手机</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">付款日期</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">支付方式</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">交易号</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80px;">充值金额</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th>
                        </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($list as $v=>$val):?>
                        <tr class="odd">
                            <td class=" sorting_1"><?php echo $val->id;?></td>
                            <td class=" sorting_1"><?php echo $val->agent_name;?></td>
                            <td class=" sorting_1"><?php echo $val->mobilephone;?></td>
                            <td class=" sorting_1"><?php echo $val->time;?></td>
                            <td class=" sorting_1"><?php echo $val->pay_way;?></td>
                            <td class="center "><?php echo $val->pay_num;?></td>
                            <td class="center ">
                                <?php if($val->status==0): ?>
                                <span class="label label-warning">待审核</span>
                                <?php endif; ?>
                                <?php if($val->status==1): ?>
                                <span class="label label-success">通过</span>
                                <?php endif; ?>
                                <?php if($val->status==2): ?>
                                <span class="label">未通过</span>
                                <?php endif; ?>
                            </td>

                            <td class="center "><?php echo $val->money;?></td>
                            <td class="center ">
                                <?php if($val->status==0):?>
                                    <a class="btn btn-success" href="<?php echo Yii::app()->getBaseUrl();?>/Agent/AddMoneyCheck?id=<?php echo $val->id;?>">
                                        <i class="icon-zoom-in icon-white"></i>
                                        通过
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo Yii::app()->getBaseUrl();?>/AgentManage/Close?id=<?php echo $val->id?>">
                                        <i class="icon-trash icon-white"></i>
                                        失败
                                    </a>
                                <?php elseif($val->status==1):?>
                                    <span class="label label-success">通过</span>
                                <?php else:?>
                                    <span class="label">未通过</span>
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