/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var web_obj={
	page_init:function(){
		web_obj.a_label('body');	//A连接处理
		setTimeout(function(){web_obj.share_init(window.location.href)}, 1000);
		
		$('#header li').css({width:100/($('#header li').size()-$('#header li:hidden').size())-0.001+'%'});
		if($('#support').size()){
			if($('#footer_points').size()){
				$('#support').css('bottom', 42);
			}else{
				$('#support').css('bottom', 0);
			}
			$('#footer').css('bottom', 0);
			$('#footer_points').height(58);
		}
		
		$('#footer li').css({width:100/$('#footer li').size()-0.001+'%'}).children('div').data('display', '0').click(function(){
			$('#footer dl').slideUp(100);
			if($(this).data('display')==0){
				$(this).siblings('dl').slideDown(100);
				$('#footer li div').data('display', '0');
				$('#footer a').removeClass('cur');
				$(this).addClass('cur').data('display', '1');
			}else{
				$('#footer li div').data('display', '0');
				$('#footer a').removeClass('cur');
			}
		});
		$('#footer a').each(function(){
			$(this).click(function(){
				$('#footer dl').slideUp(100);
				$('#footer li div').data('display', '0');
			});
		});
		$('#footer li>a').each(function(){
			$(this).click(function(){
				$('#footer a, #footer li div').removeClass('cur');
				$(this).addClass('cur');
			});
		});
		
		$('#header li.back a').click(function(){
			if(links.length<=2){
				if(links.length==2){
					links.pop();
				}
				window.top.location.reload();
			}else{
				var page_url=links[links.length-2];
				links.pop();
			}
			if(!page_url){
				return false;
			}
			$('#web_page_contents_loading').css({
				left:$(window).width()/2-45,
				top:$(window).height()/2-45
			}).show();
			$('#web_page_contents').load(page_url.replace('#', '')+'ajax/', function(){
				web_obj.a_label('#web_page_contents');
				$('#web_page_contents_loading').hide();
				window.scroll(0, 0);
				web_obj.share_init('http://'+document.domain+page_url);
			});
			return false;
		});
	},
	
	a_label:function(range){
		var range=(typeof(arguments[0])!='string')?'body':arguments[0];
		$(range+' a').attr('target', '_self').filter('[ajax_url]').click(function(){
			var page_url=$(this).attr('ajax_url');
			if(page_url==links[links.length-1]){
				return false;
			}
			links.push(page_url);
			$('#web_page_contents_loading').css({
				left:$(window).width()/2-45,
				top:$(window).height()/2-45
			}).show();
			$('#web_page_contents').load($(this).attr('ajax_url').replace('#', '')+'ajax/', function(){
				web_obj.a_label('#web_page_contents');
				$('#web_page_contents_loading').hide();
				window.scroll(0, 0);
				web_obj.share_init('http://'+document.domain+page_url);
			});
			return false;
		});
	},
	
	share_init:function(url){
		$('.share').click(function(){
			$('.share_layer').css('height', $(document).height()).show();
			return false;
		});
		$('.share_layer').click(function(){
			$(this).hide();
		});
		
		var share_info={
			'img_url':'http://'+document.domain+$('img').not('[src$=gif]').attr('src'),
			'img_width':100,
			'img_height':100,
			'link':url,
			'desc':url,
			'title':$('input[name=ShareTitle]').size()?$('input[name=ShareTitle]').val():$('title').html()
		};
		//WeixinJSBridge.on('menu:share:appmessage', function(){WeixinJSBridge.invoke('sendAppMessage', share_info)});
		//WeixinJSBridge.on('menu:share:timeline', function(){WeixinJSBridge.invoke('shareTimeline', share_info)});
	}
}