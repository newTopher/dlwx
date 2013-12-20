<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">客户申请列表</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 已注册公众号客户</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">编号</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 165px;">微信公众号</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">申请时间</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 91px;">审核状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th></tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($agentWxUserData as $k=>$v): ?>
                        <tr class="odd">
                            <td class=" sorting_1"><?php echo $v->id; ?></td>
                            <td class="center "><?php echo $v->wx_account; ?></td>
                            <td class="center "><?php echo date("Y-m-d H:i:s",$v->add_time); ?></td>
                            <td class="center ">
                                <?php if($v->status==0): ?>
                                    <span class="label label-warning">待审核</span>
                                <?php endif; ?>
                                <?php if($v->status==1): ?>
                                <span class="label label-success">通过</span>
                                <?php endif; ?>
                                <?php if($v->status==2): ?>
                                    <span class="label">未通过</span>
                                <?php endif; ?>
                            </td>
                            <td class="center ">
                                <?php if($v->status==1): ?>
                                <a class="btn btn-info" href="#">
                                    <i class="icon-edit icon-white"></i>
                                    完善资料
                                </a>
                                <?php endif; ?>

                                <?php if($v->status==2): ?>
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>
                                        查看原因
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>
                                        重新提交
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i>
                                        删除
                                    </a>
                                <?php endif; ?>

                                <?php if($v->status==0): ?>
                                    请耐心等待审核
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>


                        </tbody>
                    </table>
                    <div class="row-fluid"><div class="span12 center"></div></div></div>

            </div>
        </div>
    </div>
</div>


<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i>提交资料客户列表</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 166px;">Username</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 165px;">Date registered</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">Role</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 91px;">Status</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">Actions</th></tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr class="odd">
                            <td class=" sorting_1">David R</td>
                            <td class="center ">2012/01/01</td>
                            <td class="center ">Member</td>
                            <td class="center ">
                                <span class="label label-success">Active</span>
                            </td>
                            <td class="center ">
                                <a class="btn btn-success" href="#">
                                    <i class="icon-zoom-in icon-white"></i>
                                    查看原因
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="icon-edit icon-white"></i>
                                    修改重新提交
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="icon-trash icon-white"></i>
                                    删除
                                </a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">Dow John</td>
                            <td class="center ">2012/02/01</td>
                            <td class="center ">Admin</td>
                            <td class="center ">
                                <span class="label">Inactive</span>
                            </td>
                            <td class="center ">
                                <a class="btn btn-success" href="#">
                                    <i class="icon-zoom-in icon-white"></i>
                                    View
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="icon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="icon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                    <div class="row-fluid"><div class="span12 center"></div></div></div>

            </div>
        </div>
    </div>
</div>

</div>
</div>