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

    $('#profileUpload').on('change', function(e){
        let file = this.files[0];

        if(file){
            let reader = new FileReader();

            reader.onload = function(e){
                $('.span-for-profile-img-auth').html(
                    `<img src="${e.target.result}" style="width:100%; height:100%; border-radius:50%;" alt="Profile Image">`
                );
            }

            reader.readAsDataURL(file);
        }
    });

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

    $('.otp-input').on('paste', function (e) {
        let pasteData = e.originalEvent.clipboardData.getData('text').replace(/[^0-9]/g, '');
        let inputs = $('.otp-input');

        inputs.each(function(index){
            $(this).val(pasteData[index] || '');
        });

        e.preventDefault();
    });

    $('#academicYear').select2({
        minimumResultsForSearch: Infinity,
        dropdownCssClass: "academic-dropdown",
        containerCssClass: "academic-container"
    });

    var $sidebar = $('.main-div-for-side-menu');
    var $overlay = $('.sidebar-overlay');

    function isMobile() {
        return $(window).width() <= 768;
    }

    $(document).on('click', '.sidebar-toggle-btn', function (e) {
        e.stopPropagation();

        if (!isMobile()) {
            $sidebar.toggleClass('sidebar-collapsed');
        } else {
            $sidebar.addClass('active');
            $overlay.addClass('active');
        }
    });

    $sidebar.on('click', function (e) {

        if ($(e.target).closest('.sidebar-toggle-btn').length) {
            return;
        }

        if (!isMobile()) {
            $sidebar.removeClass('sidebar-collapsed');
        }

        if (isMobile() && !$sidebar.hasClass('active')) {
            $sidebar.addClass('active');
            $overlay.addClass('active');
        }
    });

    $overlay.on('click', function () {
        $sidebar.removeClass('active');
        $overlay.removeClass('active');
    });

    $(document).on('click', '.sidebar-link', function () {
        if (isMobile()) {
            $sidebar.removeClass('active');
            $overlay.removeClass('active');
        }
    });

});