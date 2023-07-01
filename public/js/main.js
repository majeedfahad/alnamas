$('.custom-modal').hide()
$(function () {
    $('.step-places li').each(function(index) {
        var delay = index * 300;

        $(this).delay(delay).animate({ opacity: 1, top: 0 }, 500);
    });




    const paragraphText = $('#username').text().replace(/\s/g, '');
    const firstLetter = paragraphText.charAt(0);
    $('.rounded-username').html(firstLetter);
    $('.rounded-username').css('background-color', getRandomDarkColor())

    function getRandomDarkColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        do {
            color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
        } while (colorBrightness(color) > 150);
        return color;
    }

    function colorBrightness(color) {
        const rgb = parseInt(color.substring(1), 16);
        const r = (rgb >> 16) & 0xff;
        const g = (rgb >> 8) & 0xff;
        const b = (rgb >> 0) & 0xff;
        return (r * 299 + g * 587 + b * 114) / 1000;
    }


})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            $('.remove-image').removeClass('d-none');
            $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}

function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
}

$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
// View Events Modals
$('.account-pics.event').on('click', function () {
    $('.custom-modal.view-event').fadeIn()
})
$('.custom-modal .overlay').on('click', function () {
    $('.custom-modal').fadeOut()
})
// Create Events Modals
$('.account-pics.add-event').on('click', function () {
    $('.custom-modal.create-event').fadeIn()
});


$('.get-started').on('click', function () {
    $('.conty').toggleClass('form')
})

$('.best-image').on('click', function () {
    $('.custom-modal.view-event').fadeIn()
})

// Bottom bar active icons

var currentPage = window.location.href;;

$('.bottom-bar ul li a').each(function() {
    var link = $(this).attr('href');

    if (link === currentPage) {
        $(this).parent().addClass('active');
        $(this).find('i').addClass('active-icon');
    }
    console.log(currentPage)
});

