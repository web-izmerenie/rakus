//jQuery.noConflict();

(function($) { 
  	$(function() {
        $('input,textarea').focus(function(){
            $(this).data('placeholder',$(this).attr('placeholder'))
            $(this).attr('placeholder','');
        });
        $('input,textarea').blur(function(){
            $(this).attr('placeholder',$(this).data('placeholder'));
        });
		if (!window.console){ console = {log: function() {}} };
  		$('.placeholder-1').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Ваше имя'){ $(this).val(''); } });
		$('.placeholder-1').focusout(function(e) { if($(this).val() == ''){ $(this).val('Ваше имя'); } });
		$('.placeholder-2').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Телефон или почта'){ $(this).val(''); } });
		$('.placeholder-2').focusout(function(e) { if($(this).val() == ''){ $(this).val('Телефон или почта'); } });


		$('.popupOpen').click(function(event){
            var yClick2 = event.pageY - $(this).offset().top;
            $('#page').click(function(e){
                var yClick = e.pageY - $(this).offset().top;
                
                $('.sendForm').css({'top':(yClick - yClick2 + 24) + 'px'});
                var $height = $(document).height();
                $('.popupForm ').height($height);
                $(document).scroll(function(){
                    $('.sendForm').css({'position':'absolute','top':(yClick - yClick2 + 24) + 'px'});
                });

                
            });
            
			$('.popupForm, .popupForm .sendForm').fadeIn();
            $('body').addClass('body-overflow');
			event.preventDefault();
		})

        $('.border_btn-sub').click(function(event){
            var $textarea = $('.help_block .text textarea');
			var $form = $(this).closest('form');
			var urlAjax = $form.attr('action');
			
            if($textarea.val() == ''){
                $('.popupForm2, .popupForm2 .popupError').fadeIn();
                $('body').addClass('body-overflow');
            }
            else{
				 $.ajax({
                        type: "POST",
                        url: urlAjax,
                        data: $form.serialize()
                    }).done(function() {
                        $('.popupForm2, .popupForm2 .popupError2').fadeIn();
                		$('body').addClass('body-overflow');
                		setTimeout(function(){
                    		$('.help_block .text textarea').val('').css({'background':'transparent'});
                		},2000);
                    });
                    return false;
            }
            event.preventDefault();
        })
        $('.error-btn').click(function(event){
            $('.popupForm2, .popupForm2>div').fadeOut();
            $('body').removeClass('body-overflow');
            event.preventDefault();
        });


		$(document).click( function(event){
	        if( $(event.target).closest(".popupOpen, .border_btn").length || $(event.target).closest(".sendForm, .popupError, .popupError2").length)
	        return;
	       	$('.popupForm, .popupForm > div').fadeOut();
            $('.popupForm2, .popupForm2 > div').fadeOut();
            $('body').removeClass('body-overflow');
	        event.stopPropagation();
		});

        jQuery(window).load(function(){
            initHeaderPosition();
        })

            //header position init
        function initHeaderPosition(){
            var win = jQuery(window);
            var header = jQuery('header');
            function calcPosition(obj){
                obj.stop().css({left: parseInt(obj.attr('data-top')) - win.scrollLeft()});
                win.scroll(function(){
                    obj.stop().css({left: parseInt(obj.attr('data-top')) - win.scrollLeft()});
                })
            }
            if(header.length){
                header.attr('data-top',parseInt(header.css('left')));
                calcPosition(header);
            }
        }


        var $val =  $('.help_block .text textarea');
        $( "#name-input" ).keyup(function( event ) {
            var value = $(this).val();
            if (value === '') {
                        $(this).removeClass('validInput').addClass('errorInput');
                    }
                    else {
                        $(this).removeClass('errorInput').addClass('validInput');
                    }

        });
        $( "#phone-mail" ).keyup(function( event ) {
            var value = $(this).val();

            if (value != '') {
                if (!this.value.match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/)) {
                    $(this).removeClass('validInput').addClass('errorInput');

                }
                else {
                    $(this).removeClass('errorInput').addClass('validInput');


                }
            }

        });

        $('.sub-btn').click(function(event){
			var form = $(this).closest('form');
			var urlAjax = form.attr('action');

            $( "#name-input" ).each(function( event ) {
                var value = $(this).val();
                if (value === '') {
                    $(this).removeClass('validInput').addClass('errorInput');
                }
                else {
                    $(this).removeClass('errorInput').addClass('validInput');
                }
            });
            $( "#phone-mail" ).each(function( event ) {
                var value = $(this).val();
                if (value != '') {


                    if (!this.value.match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/)){
                        $(this).removeClass('validInput').addClass('errorInput');

                    }
                    else {
                        $(this).removeClass('errorInput').addClass('validInput');
                        if($("#name-input").hasClass('validInput')){
                            setTimeout(function(){
                                $('.sendForm form input').removeClass('validInput');
                                $('.sendForm form #name-input, .sendForm form #phone-mail').val('');
                                $('.sendForm form #name-input').attr('placeholder','Ваше имя');
                                $('.sendForm form #phone-mail').attr('placeholder','Телефон или почта');
                                $(".sendForm form").trigger('reset');

                            },200);
                        }
                    }
                }
            });
            if($( "#phone-mail").hasClass('validInput') && $( "#name-input").hasClass('validInput')){
				$.ajax({
					type: "POST",
					url: urlAjax,
					data: form.serialize()
				}).done(function() {
					$('.popupForm, .popupForm .sendForm').fadeOut();
                	$('.popupForm2, .popupForm2 .popupError2').fadeIn();
					$('body').addClass('body-overflow');
				});
				return false;
            }

            event.preventDefault();

        });

        $('#name-input').keypress(function(){
            var value = $(this).val();
            if (value === '') {
                $(this).removeClass('validInput').addClass('errorInput');
            }
            else {
                $(this).removeClass('errorInput').addClass('validInput');
            }
        });
        $('#name-input').focusout(function(){
            var value = $(this).val();
            if (value === '') {
                        $(this).removeClass('validInput').addClass('errorInput');
                    }
                    else {
                        $(this).removeClass('errorInput').addClass('validInput');
                    }
        });
        $('#phone-mail').keypress(function(){
            var value = $(this).val();
            if (value != '') {
                if (!this.value.match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/)){
                    $(this).removeClass('validInput').addClass('errorInput');

                }
                else {
                    $(this).removeClass('errorInput').addClass('validInput');

                }
            }

        });
        $('#phone-mail').focusout(function(){
            var value = $(this).val();
            if (value != '') {
                if (!this.value.match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/)){
                    $(this).removeClass('validInput').addClass('errorInput');

                }
                else {
                    $(this).removeClass('errorInput').addClass('validInput');

                }
            }

        });

        $('.help_block .text textarea').keypress(function(){

            if(this == true){
                $(this).css({'background':'transparent'});
            }
            else
            {
                $(this).css({'background':'#fdf8ed','textAlign':'left'});
            }

        });




        var $docHeight = $(window).height();
        $(window).scroll(function(){
            if($(window).scrollTop() > $docHeight){
                $('header').addClass('shadow-header');

            }
            else{
                $('header').removeClass('shadow-header');

            }
        });


        $('#slider1, #slider2').tinycarousel();

	});

	
})(jQuery);

