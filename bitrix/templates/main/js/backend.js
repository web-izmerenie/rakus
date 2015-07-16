$(function() {
	'use strict';
	
	function hoverBlock(hoverB, hideB, visibleB){
		var hoverBlock = $(hoverB);
		
		hoverBlock.hover(function(){
			$.blocks = new Object();
			
			$.blocks.hideBlock = $(this).find(hideB);
			$.blocks.visibleBlock = $(this).find(visibleB);
			
			$.blocks.hideBlock.hide();
			$.blocks.visibleBlock.show().removeClass('flipOutY').addClass('animated flipInY');
		}, function(){
			$.blocks.hideBlock.show();
			$.blocks.visibleBlock.removeClass('flipInY').addClass('animated flipOutY');
		});
	}
	
	function addFormModel(){
		var clickItem = $('.popupOpen');
		var targetInput = $('.popupForm .sendForm form input[type="hidden"]'); 
		
		clickItem.click(function(){
			var model = $(this).closest('tr').find('.td_2 a').html();
			var model2 = $('.item_details .title h1').html();
			
			if($('.item_details').length) {
				targetInput.val(model2);
			}else{
				targetInput.val(model);	
			}
		});
	}
	
	hoverBlock('.main_block_1 ul li', '.main-block', '.hover_text');
	addFormModel();
});