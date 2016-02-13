//alert('测试中！喵喵哒~')
$(function(){
	var $navBar=$('nav')
		,navBarFixed=0

		,$pp=$('#pp');
	$(window).scroll(function(evt){
		if ($(document).scrollTop()>=$navBar.offset().top && !navBarFixed){
			$navBar.addClass('nav-fixed');
			navBarFixed=$navBar.offset().top
		}else if ($(document).scrollTop()<$('.page-body').offset().top){
			$navBar.removeClass('nav-fixed');
			navBarFixed=0;
		}
	})
	$('.fly-to-view').click(function(){
		fly($('.page-body').offset().top)
	});
	function fly(to){
		$('body').animate({scrollTop:parseFloat(to)},'700');
	}
	$(document).pjax('a','#pp',{
		scrollTo:false
	})
	$pp.on('pjax:beforeReplace',function(){
		fly($('.page-body').offset().top);
	})
})