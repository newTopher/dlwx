/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var businesscard_obj={
	businesscard_init:function(){
		$('#businesscard .bottom a[href=#share]').click(function(){
			$('#share').css('height', $(document).height()).show();
			return false;
		});
		$('#share').click(function(){
			$(this).hide();
		});
		
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady(){
			var share_info={
				'img_url':'http://'+document.domain+$('#businesscard .logo img').attr('src'),
				'img_width':100,
				'img_height':100,
				'link':document.URL,
				'desc':'点击查看详细',
				'title':$('title').html()
			};
			
			WeixinJSBridge.on('menu:share:appmessage', function(){WeixinJSBridge.invoke('sendAppMessage', share_info)});
			WeixinJSBridge.on('menu:share:timeline', function(){WeixinJSBridge.invoke('shareTimeline', share_info)});
		}, false)
	}
}