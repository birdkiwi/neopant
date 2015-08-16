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
});