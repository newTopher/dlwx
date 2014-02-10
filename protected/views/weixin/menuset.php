<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 菜单管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span4" style="margin-bottom: 15px;">
                    <img style="width:320px;height:480px;" src="<?php echo Yii::app()->getBaseUrl(); ?>/upload/test.jpg">
                </div>
                <div class="span8">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">基础菜单</a></li>
                        <li class=""><a href="#slider" data-toggle="tab">轮播图片</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>菜单名称</th>
                                    <th>修改时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($menuData as $k=>$v): ?>
                                <tr>
                                    <td><?php echo $v->id; ?></td>
                                    <td><?php echo $v->menu_name; ?></td>
                                    <td><?php echo date("Y-m-d H:i:s",$v->update_time); ?></td>
                                    <td><a href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Menuedit/id/<?php echo $v->id ;?>" class="btn btn-mini btn-primary">修改</a></td>
                                </tr>
                               <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="slider">
                            <a href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Slideradd" class="btn btn-small btn-primary">添加图片</a>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>图片</th>
                                    <th>标题</th>
                                    <th>修改时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sliderData as $k=>$v): ?>
                                        <tr>
                                            <td><?php echo $v->id; ?></td>
                                            <td>
                                               <img src="<?php echo Yii::app()->getBaseUrl().'/upload/wxwebsite/'.$v->image; ?>" class="img-rounded" style="width: 80px; height: 50px;">
                                            </td>
                                            <td><?php echo $v->title; ?></td>
                                            <td><?php echo date("Y-m-d H:i:s",$v->update_time); ?></td>
                                            <td>
                                                <a href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Slideredit/id/<?php echo $v->id ;?>" class="btn btn-mini btn-primary">修改</a>
                                                <a onclick="return confirm('确定删除此张轮播图？')" href="<?php echo Yii::app()->getBaseUrl(); ?>/Weixin/Sliderdel/id/<?php echo $v->id ;?>" class="btn btn-mini btn-danger">删除</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
</div>

<script type="text/javascript">
    $('form[name="form"]').validator({
        stopOnError: false,
        timely: false,
        messages: {
            required: "该字段内容不能为空哦"
        },
        fields: {
            'webname_title': 'required;',
            'tel': 'required;',
            'replay_keywords': 'required;',
            'msg_title': 'required;',
            'msg_description': 'required;'
        }
    });
</script>