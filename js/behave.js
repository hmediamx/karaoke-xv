jQuery(document).ready(function($){

  $.localScroll.defaults.axis = 'xy';
	
	$('#inicio-block, .menu_slider').localScroll({
		target: '#wrapper', // could be a selector or a jQuery object too.
		queue:true,
		duration:1000,
		hash:false,
		offset: { left: -1 * ($(window).width() / 2 - 480), top: 0 }

//	onBefore:function(e){
//	var click_link = String(e.target);
//	var parts = click_link.split("#");
//	var seccion = String(parts[1]);
//	}

  });
	
	
	$('#inicio-block .wrap').hover(
		function(){
			var $this = $(this).find('img');
			var $textito = $(this).children();
			$this.stop().animate({'opacity':'1.0','height':'360px','width':'145px','top':'0px','left':'0px'});
			$textito.stop().animate({'top':'295px'});
		},
		function(){
			var $this = $(this).find('img');
			var $textito = $(this).children();
			$this.stop().animate({'opacity':'0.5','height':'422px','width':'170px','top':'-15px','left':'-10px'});
			$textito.stop().animate({'top':'150px'});
		}
	);


	$('#galeria .foto').hover(
		function(){
			var $textito = $(this).children();
			$textito.stop().animate({'top':'-135px'});
		},
		function(){
			var $textito = $(this).children();
			$textito.stop().animate({'top':'0px'});
		}
	);


	$('#videos .video').hover(
		function(){
			var $textito = $(this).children();
			$textito.stop().animate({'top':'-115px'});
		},
		function(){
			var $textito = $(this).children();
			$textito.stop().animate({'top':'0px'});
		}
	);
	
	
	
	$('.nav li a')
	.css( {'opacity':'0.0'} )
	.mouseover(function(){
		$(this).stop().animate({'opacity':'1.0'})
	})
	.mouseout(function(){
		$(this).stop().animate({'opacity':'0.0'});
	})

  
});


	$(function() {
    	$( "#accordion" ).accordion();
	});