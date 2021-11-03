$(document).ready(function () {

    $('#file-selection li').on('click', function () {
        let fileName = $(this).html();
        $('#file-selection button').text(fileName)
        document.getElementById('html-view').src = fileName;

        (async function () {
            await fetch(fileName,
                {
                    method: 'POST',
                    body: JSON.stringify({ url: fileName })
                })
                .then(response =>  response.text() )
                .then(async text => { await $('#code-view').html('<xmp>' + text + '</xmp>') })
                .catch(async err => { await $('#code-view').html('Failed retrieving source code.') })
        })();

    });

    $('#viewer > div > ul > li > a').click(function (e) {
        $('#viewer > div > ul > li > a').toggleClass('active');
        $('#viewers > *').toggleClass('d-none')
    });

})