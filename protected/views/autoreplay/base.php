<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2> 自动回复管理 </h2>

        </div>
        <div class="box-content">
            <div class="box-content">

                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">首次关注回复</a></li>
                    <li class=""><a href="#profile" data-toggle="tab">默认回复</a></li>
                    <li class=""><a href="#slider" data-toggle="tab">关键词回复</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户第一次关注您的公众账号时自动回复的消息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/AddKeyword" class="form-horizontal">
                            <input type="hidden" name="type" value="1">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">展现类型</label>
                                    <div class="controls">
                                        <select name="source_type" id="replayType">
                                            <option value="1" <?php if($firstData != null){ if($firstData->type == 1){ echo 'selected';}}?>>文字消息</option>
                                            <option value="2" <?php if($firstData != null){ if($firstData->type == 2){ echo 'selected';}}?>>图文消息</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="urlMsg" style="display: <?php if($firstData != null){ if($firstData->type == 1){ echo 'none';}else{ echo 'block'; }}?>;">
                                    <label class="control-label">选择活动</label>
                                    <div class="controls">
                                        <select name="source_id" id="source_id">
                                            <option value="">请选择</option>
                                            <option value="w_1" <?php if($firstData != null){ if($firstData->source_id == 'w_1'){ echo 'selected';}} ?>>微官网</option>
                                            <!--
                                            <optgroup label="-------------平台栏目------------"></optgroup>
                                            <?php foreach($selectdata['channel'] as $key=>$val): ?>
                                                <option value="c_<?php echo $val['one']['id'];?>" <?php if($firstData != null){ if($firstData->source_id == 'c_'.$val['one']['id']){ echo 'selected';}} ?>><?php echo $val['one']['name'];?></option>
                                                <?php if(count($val['sub_data']) != 0):?>
                                                    <?php foreach($val['sub_data'] as $k=>$v): ?>
                                                        <option value="c_<?php echo $v->id;?>" <?php if($firstData != null){ if($firstData->source_id == 'c_'.$v->id){ echo 'selected';}} ?>>|____<?php echo $v->name;?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            -->

                                            <?php if($selectdata['member'] != null): ?>
                                            <optgroup label="-------------会员模块------------"></optgroup>
                                            <option value="m_<?php echo $selectdata['member']->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 'm_'.$selectdata['member']->id){ echo 'selected';}} ?>>会员卡</option>
                                            <?php endif; ?>

                                            <?php if($selectdata['saledata'] != null): ?>
                                                <optgroup label="-------------优惠券活动------------"></optgroup>
                                                <?php foreach($selectdata['saledata'] as $k=>$v): ?>
                                                <option value="s_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 's_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['guaguadata'] != null): ?>
                                                <optgroup label="-------------刮刮卡活动------------"></optgroup>
                                                <?php foreach($selectdata['guaguadata'] as $k=>$v): ?>
                                                    <option value="g_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 'g_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['zhuandata'] != null): ?>
                                                <optgroup label="-----------幸运大转盘活动----------"></optgroup>
                                                <?php foreach($selectdata['zhuandata'] as $k=>$v): ?>
                                                    <option value="z_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 'z_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['yuyuedata'] != null): ?>
                                                <optgroup label="-----------在线预约模块----------"></optgroup>
                                                <?php foreach($selectdata['yuyuedata'] as $k=>$v): ?>
                                                    <option value="y_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 'y_'.$v->id){ echo 'selected';}} ?>><?php echo $v->title; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['namecarddata'] != null): ?>
                                                <optgroup label="-----------微名片模块----------"></optgroup>
                                                <?php foreach($selectdata['namecarddata'] as $k=>$v): ?>
                                                    <option value="n_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 'n_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['tuandata'] != null): ?>
                                                <optgroup label="-----------微团购模块----------"></optgroup>
                                                <?php foreach($selectdata['tuandata'] as $k=>$v): ?>
                                                    <option value="t_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 't_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['sourcedata'] != null): ?>
                                                <optgroup label="-----------素材模块----------"></optgroup>
                                                <?php foreach($selectdata['sourcedata'] as $k=>$v): ?>
                                                    <option value="so_<?php echo $v->id; ?>" <?php if($firstData != null){ if($firstData->source_id == 'so_'.$v->id){ echo 'selected';}} ?>><?php echo $v->title; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="textMsg" style="display: <?php if($firstData != null){ if($firstData->type == 1){ echo 'block';}else{ echo 'none'; }}?>;">
                                    <label class="control-label">文字信息</label>
                                    <div class="controls">
                                        <textarea id="text_first" name="text" style="width: 400px;height: 100px;"><?php if($firstData != null){ echo $firstData->text; }; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" id="first_btn" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户输入无效的关键词时默认回复信息.
                        </div>
                        <form name="form" method="post" enctype="multipart/form-data" action="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/AddNouseKeyword" class="form-horizontal">
                            <input type="hidden" name="type" value="2">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" >展现类型</label>
                                    <div class="controls">
                                        <select name="source_type" id="replayType2">
                                            <option value="1" <?php if($nouseData != null){ if($nouseData->type == 1){ echo 'selected';}}?>>文字消息</option>
                                            <option value="2" <?php if($nouseData != null){ if($nouseData->type == 2){ echo 'selected';}}?>>图文消息</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="urlMsg2" style="display: <?php if($nouseData != null){ if($nouseData->type == 1){ echo 'none';}else{ echo 'block'; }}?>;">
                                    <label class="control-label">选择活动</label>
                                    <div class="controls">
                                        <select name="source_id" id="source_id2">
                                            <option value="">请选择</option>
                                            <option value="w_1" <?php if($nouseData != null){ if($nouseData->source_id == 'w_1'){ echo 'selected';}} ?>>微官网</option>
                                            <!--
                                            <optgroup label="-------------平台栏目------------"></optgroup>
                                            <?php foreach($selectdata['channel'] as $key=>$val): ?>
                                                <option value="c_<?php echo $val['one']['id'];?>" <?php if($nouseData != null){ if($nouseData->source_id == 'c_'.$val['one']['id']){ echo 'selected';}} ?>><?php echo $val['one']['name'];?></option>
                                                <?php if(count($val['sub_data']) != 0):?>
                                                    <?php foreach($val['sub_data'] as $k=>$v): ?>
                                                        <option value="c_<?php echo $v->id;?>" <?php if($nouseData != null){ if($nouseData->source_id == 'c_'.$v->id){ echo 'selected';}} ?>>|____<?php echo $v->name;?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            -->
                                            <?php if($selectdata['member'] != null): ?>
                                                <optgroup label="-------------会员模块------------"></optgroup>
                                                <option value="m_<?php echo $selectdata['member']->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 'm_'.$selectdata['member']->id){ echo 'selected';}} ?>>会员卡</option>
                                            <?php endif; ?>

                                            <?php if($selectdata['saledata'] != null): ?>
                                                <optgroup label="-------------优惠券活动------------"></optgroup>
                                                <?php foreach($selectdata['saledata'] as $k=>$v): ?>
                                                    <option value="s_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 's_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['guaguadata'] != null): ?>
                                                <optgroup label="-------------刮刮卡活动------------"></optgroup>
                                                <?php foreach($selectdata['guaguadata'] as $k=>$v): ?>
                                                    <option value="g_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 'g_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['zhuandata'] != null): ?>
                                                <optgroup label="-----------幸运大转盘活动----------"></optgroup>
                                                <?php foreach($selectdata['zhuandata'] as $k=>$v): ?>
                                                    <option value="z_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 'z_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['yuyuedata'] != null): ?>
                                                <optgroup label="-----------在线预约模块----------"></optgroup>
                                                <?php foreach($selectdata['yuyuedata'] as $k=>$v): ?>
                                                    <option value="y_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 'y_'.$v->id){ echo 'selected';}} ?>><?php echo $v->title; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['namecarddata'] != null): ?>
                                                <optgroup label="-----------微名片模块----------"></optgroup>
                                                <?php foreach($selectdata['namecarddata'] as $k=>$v): ?>
                                                    <option value="n_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 'n_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['tuandata'] != null): ?>
                                                <optgroup label="-----------微团购模块----------"></optgroup>
                                                <?php foreach($selectdata['tuandata'] as $k=>$v): ?>
                                                    <option value="t_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 't_'.$v->id){ echo 'selected';}} ?>><?php echo $v->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php if($selectdata['sourcedata'] != null): ?>
                                                <optgroup label="-----------素材模块----------"></optgroup>
                                                <?php foreach($selectdata['sourcedata'] as $k=>$v): ?>
                                                    <option value="so_<?php echo $v->id; ?>" <?php if($nouseData != null){ if($nouseData->source_id == 'so_'.$v->id){ echo 'selected';}} ?>><?php echo $v->title; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group" id="textMsg2" style="display: <?php if($nouseData != null){ if($nouseData->type == 1){ echo 'block';}else{ echo 'none'; }}?>;;">
                                    <label class="control-label">文字信息</label>
                                    <div class="controls">
                                        <textarea id="text_secend" name="text" style="width: 400px;height: 100px;"><?php if($nouseData != null){ echo $nouseData->text; }; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" id="sencend_btn" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="slider">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>提示信息!</strong>当用户在微信公众号输入相应的关键词,如果能和如下功能相匹配的内容.
                        </div>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/Addkeywords" class="btn btn-small btn-primary">添加关键词</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>关键词</th>
                                <th>匹配类型</th>
                                <th>回复类型</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if($keywordsData): ?>
                            <?php foreach($keywordsData as $k=>$v): ?>
                                <tr>
                                    <td><?php echo $v->id; ?></td>
                                    <td><?php echo $v->keywords; ?></td>
                                    <td><?php if($v->preg_type == 1){ echo '全匹配'; }else{ echo '模糊匹配';} ?></td>
                                    <td><?php if($v->source_type == 1){ echo '文字信息'; }else{ echo '图文信息'; } ?></td>
                                    <td>
                                        <a onclick="return confirm('确定要删除此个关键词吗？')" href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/DelKeyword/id/<?php echo $v->id; ?>" class="btn btn-mini btn-danger">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php else : ?>
                                <div class="alert alert-info" style="margin-top: 10px;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>提示信息!</strong>您还没有添加任何关键词哦!.
                                </div>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <div id="pager" class="pager" style="float: left;margin-top: 30px;">
                            <?php

                            $this->widget('CLinkPager',array(
                                    'header'=>'',
                                    'prevPageLabel' => '上一页',
                                    'nextPageLabel' => '下一页',
                                    'pages' => $pages,
                                    'maxButtonCount'=>5
                                )
                            );
                            ?>
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
    $(function(){
        $("#replayType").change(function(){
            var type = $(this).val();
            if(type == 1){
                $("#textMsg").show();
                $("#urlMsg").hide();
            }
            if(type == 2){
                $("#textMsg").hide();
                $("#urlMsg").show();
            }

        });

        $("#first_btn").click(function(){
            var type = $("#replayType").val();
            if(type == 1){
                if($("#text_first").val().length == 0){
                    notif({
                        type: "warning",
                        msg: "请输入首次关注的文字信息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }else if(type == 2){
                if($("#source_id").text().length == 0){
                    notif({
                        type: "warning",
                        msg: "请选择图文消息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }
        });

        $("#replayType2").change(function(){
            var type = $(this).val();
            if(type == 1){
                $("#textMsg2").show();
                $("#urlMsg2").hide();
            }
            if(type == 2){
                $("#textMsg2").hide();
                $("#urlMsg2").show();
            }

        });

        $("#sencend_btn").click(function(){
            var type = $("#replayType").val();
            if(type == 1){
                if($("#text_secend").val().length == 0){
                    notif({
                        type: "warning",
                        msg: "请输入默认回复的文字信息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }else if(type == 2){
                if($("#sencend_btn").text().length == 0){
                    notif({
                        type: "warning",
                        msg: "请选择图文消息",
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            }
        });
    });

</script>