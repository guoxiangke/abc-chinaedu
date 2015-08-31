(function($){
Drupal.behaviors.webrtc = {
  attach: function(context) {  
  	$('#open_class_record').click(function(){
  		 order_id = location.search.split('/')[3];
  		 uid = Drupal.settings.currentUser;
  		 $.ajax({
                type: 'POST',
                url: Drupal.settings.basePath+'?q=create/class_record',
                data: 'uid=' + uid + '&order_id=' + order_id,
                dataType:'json',
                success: function (data) {
                    //Swap state values
                    if(data.error==1){
                    	alert('您已经申请过了，我们的老师会尽快与您联系！');	
                    }else if(data.error==2){
                    	alert('您点卡不足，请充值后申请！！');	
                    }else if(data.nid){
                    	alert('创建成功！请耐性等待老师与您联系！');
                    }else{
                    	alert('创建失败了！！');
                    }
                    // $('#open_class_record').slideUp();
                    // $("#gallonsDonated").html(data.gals);
                    // $("#familiesServed").html(data.fams);
                    // $(".info").removeClass("loading");
                }
            });
  	});

  	}
  }
})(jQuery);
