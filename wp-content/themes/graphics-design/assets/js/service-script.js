jQuery(document).ready(function($){

    function cleartext() {

        document.getElementById('microassessment').style.display = "none";
        document.getElementById('documentreview').style.display = "none";
        document.getElementById('macroassessment').style.display = "none";
        document.getElementById('deliverableservices').style.display = "none";
        document.getElementById('projectexecution').style.display = "none";
        document.getElementById('dpooutsourcing').style.display = "none";
    }

    $(document).on('click', '.service', function(e) {
        var that = $(this);
        var x = that.attr('id');
        var rel = that.data('rel');
        var ajaxurl = that.data('url');
        if ((document.querySelector('.row1expand') !== null) && $(this).hasClass("selectedservice"))

            /* Collapse if expanded and same click */
        {
            $("#servicechoicetext").animate({left: '390px', opacity: '0.4'}, "200", servicechoiceblank);
            function servicechoiceblank(){document.getElementById('servicechoicetext').innerHTML = "View Services";}
            $(".row1").toggleClass('row1expand');
            $(".row2").toggleClass('row2expand');
            $(".service").toggleClass('serviceexpand');
            $(this).toggleClass('selectedservice');
            $('#servicesdetailschild').removeClass('visible');

            setTimeout(function(){
                cleartext();
            }, 1000);
        }

        /* Expanded - change selection */
        else if (document.querySelector('.row1expand') !== null)
        {
            $(".selectedservice").removeClass('selectedservice');
            $(this).toggleClass('selectedservice');

            var servicechoicetextvar = $(this).find("p").text();

            $('#servicesdetailschild').removeClass('visible');

            function bodytext() {
                cleartext()
                if (servicechoicetextvar.trim() === "MICRO ASSESSMENT") {
                    document.getElementById('microassessment').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "DOCUMENT REVIEW") {
                    document.getElementById('documentreview').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "MACRO ASSESSMENT") {
                    document.getElementById('macroassessment').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "DELIVERABLE-BASED SERVICES") {
                    document.getElementById('deliverableservices').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "END-TO-END PROJECT EXECUTION") {
                    document.getElementById('projectexecution').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "DPO OUTSOURCING") {
                    document.getElementById('dpooutsourcing').style.display = "block";
                }}
            setTimeout(function(){
                bodytext();
            }, 400);

            if (document.getElementById('servicechoicetext').innerHTML !== servicechoicetextvar)
            {
                /*execute sliding text*/
                function servicechoicechange() {
                    document.getElementById('servicechoicetext').innerHTML = servicechoicetextvar;
                    $('#servicesdetailschild').addClass('visible');
                }

                $("#servicechoicetext").animate({left: '350px', opacity: '0.9'}, "400", servicechoicechange);
                $("#servicechoicetext").animate({left: '70px', opacity: '0.9'}, "700");
            }
        }
        /*First expansion? */
        else {
            $(".row1").toggleClass('row1expand');
            $(".row2").toggleClass('row2expand');
            $(".service").toggleClass('serviceexpand');
            $(this).toggleClass('selectedservice');
            var servicechoicetextvar = $(this).find("p").text();
            document.getElementById('servicechoicetext').innerHTML = servicechoicetextvar;
            $("#servicechoicetext").animate({left: '70px', opacity: '0.9'}, "700");

            function bodytext() {
                if (servicechoicetextvar.trim() === "MICRO ASSESSMENT") {
                    document.getElementById('microassessment').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "DOCUMENT REVIEW") {
                    document.getElementById('documentreview').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "MACRO ASSESSMENT") {
                    document.getElementById('macroassessment').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "DELIVERABLE-BASED SERVICES") {
                    document.getElementById('deliverableservices').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "END-TO-END PROJECT EXECUTION") {
                    document.getElementById('projectexecution').style.display = "block";
                }
                if (servicechoicetextvar.trim() === "DPO OUTSOURCING") {
                    document.getElementById('dpooutsourcing').style.display = "block";
                }}

            setTimeout(function(){
                bodytext();
            }, 1000);

            setTimeout(function(){
                $('#servicesdetailschild').addClass('visible');
            }, 1100);
        }
    });
});



/*initial launch code*/
/*global $*/
$(document).ready(function () {
    "use strict";
    var heading = $('#services .desc .heading h1'),
        txt = $('#services .desc .text'),
        serviceItem = $('#services .services .column .service'),
        tl = new TimelineLite();

    tl
        .from(heading, 0.3, {opacity : 0, y : -20}, '+=0.3')
        .from(txt, 0.3, {opacity : 0, y : -20})
        .staggerFrom(serviceItem, 0.2, {opacity : 0, x : -50, autoAlpha : 0}, 0.1);
});