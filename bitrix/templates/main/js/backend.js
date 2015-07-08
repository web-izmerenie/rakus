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
		var clickItem = $('.catalog_table .popupOpen');
		var targetInput = $('.popupForm .sendForm form input[type="hidden"]'); 
		
		clickItem.click(function(){
			var model = $(this).closest('tr').find('.td_2 a').html();
			targetInput.val(model);
		});
	}
	
	hoverBlock('.main_block_1 ul li', '.main-block', '.hover_text');
	addFormModel();
});