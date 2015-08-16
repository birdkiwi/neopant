$(document).ready(function(){
    $(".js-bxslider").bxSliderAlt();
    $("[data-btn-up]").btnUp();

    $(".js-validate").each(function(){
        $(this).validate({
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                if ($(element).closest('.form-group').length > 0) {
                    $(element).closest('.form-group').addClass('has-error');
                } else {
                    $(element).addClass('has-error');
                }
                if ($(element).data('error-placeholder')) {
                    $(element).attr('placeholder', $(element).data('error-placeholder'));
                }
            },
            unhighlight: function(element) {
                if ($(element).closest('.form-group').length > 0) {
                    $(element).closest('.form-group').removeClass('has-error');
                } else {
                    $(element).removeClass('has-error');
                }
                if ($(element).data('error-placeholder')) {
                    $(element).attr('placeholder', $(element).data('default-placeholder'));
                }
            }
        });
    });

    $('[data-masked]').each(function(){
        var mask = $(this).data('masked');
        $(this).mask(mask);
    });

    $('.js-languages').each(function(){
        $(this).find('.language-change-block-language').click(function(){

            function hideEvent(e) {
                if(!jQuery(e.target).closest('.language-change-block-list').length) {
                    hideLanguages();
                    jQuery(document).off('click', 'body', hideEvent);
                }
            }

            function showLanguages(){
                $('.language-change-block-list').fadeIn('fast');
                $(this).addClass('active');
                jQuery(document).on('click', 'body', hideEvent);
            }

            function hideLanguages(){
                $('.language-change-block-list').fadeOut('fast');
                $(this).removeClass('active');
            }

            if ($(this).hasClass('active')) {
                hideLanguages();
            } else {
                showLanguages();
            }

            return false;
        });
    });

    $(".js-fancybox").fancybox();
});