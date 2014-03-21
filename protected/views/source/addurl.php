<div class="box-header well">
    <h2>添加链接</h2>

</div>
<div class="box-content">
    <form action="<?php echo Yii::app()->request->baseUrl; ?>/Source/Inserturl" class="form-horizontal">
        <fieldset>

            <div class="control-group" id="textMsg" style="display: block;">
                <label class="control-label">链接地址</label>
                <div class="controls">
                    <textarea id="text_first" name="url" style="width: 400px;height: 100px;"></textarea>
                    <span class="help-inline">格式如 http://www.wapwei.com</span>
                </div>

            </div>
            <div class="form-actions">
                <button type="submit" id="keyword_btn" class="btn btn-primary">保存</button>
                <button class="btn">取消</button>
            </div>
        </fieldset>
    </form>

</div>
<script type="text/javascript">
   $("#keyword_btn").click(function(){
       var url = $("#text_first").val();
       if(!url){
           notif({
               type: "warning",
               msg: "url链接不能为空",
               position: "center",
               width:"all",
               height:100,
               opacity: 1
           });
           return false;
       }
   });
</script>