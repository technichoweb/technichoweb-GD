jQuery(document).ready(function () {
    $(".card_image").on("click", function () {
        let term_id = $(this).data('term');
        let ajaxurl = $(this).data('url');
        let miseenpageElem = $('.miseenpages');
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                term_id: term_id,
                action: 'get_images'
            }, success: function (response) {
                miseenpageElem.slick('destroy');
                let output = ''
                $.each(response, function(pos, el) {
                    miseenpageElem.parents('.modal').attr('id','modal-'+el.term_id);
                    output += '<div><img class="img-fluid" src="'+el.url_image+'" alt=""></div>';
                    $("#modal-"+el.term_id).modal({ show: true});
                });
                miseenpageElem.html(output);
                miseenpageElem.slick({
                    speed: 1000,
                    fade: true,
                    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                    nextArrow: '<button class="slide-arrow next-arrow"></button>'
                });

            },
            error: function (error) {

            },
        });
    })
});