$(function(){
	
	$('.wishlist').click(function(){
		$(this).toggleClass('added');
		if($(this).hasClass('added')){
			$(this).children().removeClass('fa-heart-o');
			$(this).children().addClass('fa-heart');
		}
		else{
			$(this).children().removeClass('fa-heart');
			$(this).children().addClass('fa-heart-o');
		}

	});
	$('.filter-title').click(function(){
		$(this).toggleClass('closed');
		//$(this).next('.productfilter').toggle('swing');
		if($(this).hasClass('closed')){
			$(this).find('i').removeClass('fa-chevron-up');
			$(this).find('i').addClass('fa-chevron-down');

		}else{
			$(this).find('i').addClass('fa-chevron-up');
			$(this).find('i').removeClass('fa-chevron-down');
		}
	});
	$('thead td').click(function(){
		$('thead td').removeClass('active');
		$(this).toggleClass('active');
	});
	$('.delete').click(function(){
		$(this).parent().parent().remove();
	});
	$('ul.submenu').hide();
	$('.has-submenu').hover(function(){
		if ($(this).find('ul.submenu').length > 0) {
		    $(this).find('ul.submenu').stop().slideDown('slow');
		}
	},function(){
		if ($(this).find('ul.submenu').length > 0) {
	        $(this).find('ul.submenu').stop().slideUp('slow');
	    }
	});
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});

});


