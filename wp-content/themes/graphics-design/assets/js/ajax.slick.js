jQuery(document).ready(function () {
    $(".card_image").on("click", function () {
        let term_id = $(this).data('term');
        let ajaxurl = $(this).data('url');
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                term_id: term_id,
                action: 'get_images'
            }, success: function (response) {
                let miseenpageElem = $('.miseenpages')
                miseenpageElem.slick('destroy');
                let output = ''
                $.each(response, function(pos, el) {
                    output += '<div><img class="img-fluid" src="'+el.url_image+'" alt=""></div>';
                });
                miseenpageElem.html(output);
                miseenpageElem.slick();
            },
            error: function (error) {

            },
        });
    })
});