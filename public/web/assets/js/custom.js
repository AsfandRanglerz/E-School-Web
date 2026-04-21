$(document).ready(function(){

    $('.span-for-we-have-eschool').hide();
    $('.div-for-we-have-eschool-inner span').text('+').addClass('plus-icon');
    $('.div-for-we-have-eschool').removeClass('bg-cclass').addClass('border-cclass');

    $('.div-for-we-have-eschool-inner span').click(function(){

        let parent = $(this).closest('.div-for-we-have-eschool');

        $('.span-for-we-have-eschool').slideUp(800);
        $('.div-for-we-have-eschool').removeClass('bg-cclass').addClass('border-cclass');
        $('.div-for-we-have-eschool-inner span').text('+').addClass('plus-icon');

        if(!parent.find('.span-for-we-have-eschool').is(':visible')){
            parent.find('.span-for-we-have-eschool').slideDown(800);
            parent.removeClass('border-cclass').addClass('bg-cclass');
            $(this).text('-').removeClass('plus-icon');
        }

    });

    
   $('#planToggle').on('change', function () {
    if ($(this).is(':checked')) {
        $('#nav-monthly').removeClass('show active');
        $('#nav-early').addClass('show active');
    } else {
        $('#nav-early').removeClass('show active');
        $('#nav-monthly').addClass('show active');
    }
});

    $(document).on('click', '.toggle-password', function () {
        let input = $(this).siblings('input');
        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        } else {
            input.attr('type', 'password');
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        }
    });

    // ✅ Image Upload Preview (jQuery version)
    $('#profileUpload').on('change', function(e){
        let file = this.files[0];

        if(file){
            let reader = new FileReader();

            reader.onload = function(e){
                $('.span-for-profile-img-auth').html(
                    `<img src="${e.target.result}" style="width:100%; height:100%; border-radius:50%; " alt="Profile Image">`
                );
            }

            reader.readAsDataURL(file);
        }
    });

    // ✅ OTP Input jQuery Logic (NEW ADD)
    $('.otp-input').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');

        if (this.value.length === 1) {
            $(this).next('.otp-input').focus();
        }
    });

    $('.otp-input').on('keydown', function (e) {
        if (e.key === 'Backspace' && $(this).val() === '') {
            $(this).prev('.otp-input').focus();
        }
    });

    // ✅ Paste full OTP
    $('.otp-input').on('paste', function (e) {
        let pasteData = e.originalEvent.clipboardData.getData('text').replace(/[^0-9]/g, '');
        let inputs = $('.otp-input');

        inputs.each(function(index){
            $(this).val(pasteData[index] || '');
        });

        e.preventDefault();
    });

});