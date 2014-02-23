$(function(){
    $(".msg_fade").fadeOut(6000, function() {
        $(".msg_fade").remove();
    })

    $(".checker input").click(function(){
     var sum = 0;
     var id=0;
     id=$(this).attr("data");
     $mid=id;
    $(".checker input:checked").each(function(){
        sum+=parseInt($(this).val(),10);

        $type=id.split("");
        if($type[0]=="t"){
            $name="template_id[]";
        }else{
            $name="helper_id[]";
        }

    });
        $mid="."+$mid;
        if($(this).parent().attr('class')=="checked"){
            $(".input-box").prepend("<input class='"+id+"'"+" style='display:none' name='"+$name+"'"+"value="+id+">");
        }else{
            $($mid).remove() ;
        }
            $(".add-money").html(sum);
        });
});


