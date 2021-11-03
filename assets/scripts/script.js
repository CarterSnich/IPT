$(document).ready(function () {

    $('#file-selection li').on('click', function () {
        let _fileName = $(this).html();
        $('#file-selection button').text(_fileName)
        document.getElementById('html-view').src = _fileName;

        $('#code-view > div').addClass('d-none');
        $('#code-view > div#'+_fileName.split('.')[0]).removeClass('d-none');

    });

    $('#viewer > div > ul > li > a').click(function (e) {
        $('#viewer > div > ul > li > a').toggleClass('active');
        $('#viewers > *').toggleClass('d-none')
    });

})