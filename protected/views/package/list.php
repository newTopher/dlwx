<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">主页</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">套餐列表</a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 套餐列表</h2>
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
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 50px;">编号</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 100px;">套餐名</th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 200px;">模版种类</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width:200px;">助手种类</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 150px;">增值业务</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 78px;">金额</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px;">状态</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 316px;">操作</th>
                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach($list as $v=>$val):?>
                        <tr class="odd">
                            <td class=" sorting_1"><?php echo $val->id;?></td>
                            <td class="center "><?php echo $val->name;?></td>

                            <td class="center "><?php  foreach($t_name[$val->id] as $k){echo $k.' '; }?></td>

                            <td class="center "><?php  foreach($h_name[$val->id] as $k){echo $k.' '; }?></td>
                            <td class="center "><?php echo $val->attr_id;?></td>
                            <td class="center "><?php echo $val->money;?></td>
                            <td class="center ">
                                <?php if($val->status==1):?>
                                <span class="label label-success">运行</span>
                                <?php elseif($val->status==0): ?>
                                <span class="label label-failure">暂停</span>
                                <?php elseif($val->status==2):?>
                                <span class="label label-warning">试用</span>
                                <?php endif;?>
                            </td>
                            <td class="center ">

                                <a class="btn btn-danger" href="<?php echo Yii::app()->getBaseUrl();?>/AgentManage/Open?id=<?php echo $val->id?>">
                                    <i class="icon-trash icon-white"></i>
                                    开启
                                </a>
                                <a class="btn btn-success" href="<?php echo Yii::app()->getBaseUrl();?>/AgentManage/view?id=<?php echo $val->id;?>">
                                    <i class="icon-zoom-in icon-white"></i>
                                    编辑
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