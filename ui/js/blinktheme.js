(function($){

	theme = {


	 	/* Initial Placement
		----------------------------*/
	 	_init : function(){

	 	},
	 	/* Before Slide Transition
		----------------------------*/
	 	beforeAnimation : function(direction){
			$('#right-nav img').attr('src','/ui/images/pag_off.png');
			var item = $('#right-nav img').eq(vars.current_slide);
			item.attr('src','/ui/images/pag_on.png');

		   	if ($('.slide-title').length){
		   		(api.getField('title')) ? $('.slide-title').html(api.getField('title')) : $('.slide-title').html('');
		   		(api.getField('description')) ? $('.slide-description').html(api.getField('description')) : $('.slide-description').html('');
		   		 $('#plus').attr('href', api.getField('url'));
		   		 $('.goto').attr('href', api.getField('url'));
		   	}


		   }

	 }

	})(jQuery);
