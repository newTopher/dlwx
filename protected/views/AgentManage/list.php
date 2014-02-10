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
            <h2><i class="icon-info-sign"></i> 代理商列表</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">用户名</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">固话</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">手机</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 150px;">注册日期</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">金额</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 70px;">状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th>
                        </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($list as $v=>$val):?>
                            <tr class="odd">
                                <td class=" sorting_1"><?php echo $val->agent_name;?></td>
                                <td class=" sorting_1"><?php echo $val->telephone;?></td>
                                <td class=" sorting_1"><?php echo $val->mobilephone;?></td>
                                <td class="center "><?php echo $val->login_time;?></td>
                                <td class="center "><?php echo $val->money?></td>
                                <td class="center ">
                                    <?php if($val->status==1):?>
                                        <span class="label label-success">运行</span>
                                    <?php else: ?>
                                        <span class="label label-failure">暂停</span>
                                    <?php endif?>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success btn-small" href="#">
                                        <i class="icon-zoom-in icon-white"></i>
                                        查看
                                    </a>
                                    <a class="btn btn-info btn-small" href="#">
                                        <i class="icon-edit icon-white"></i>
                                        编辑
                                    </a>
                                    <a class="btn btn-danger btn-small" href="#">
                                        <i class="icon-trash icon-white"></i>
                                        删除
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