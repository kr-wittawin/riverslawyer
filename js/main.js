
/* =========================================================================
*   Main javascript file
* ========================================================================= */

$(document).ready(function(){

    /* =========================================================================
    *   nav-bar collapse - closing on click jquery
    * ========================================================================= */

    $('.nav a').click(function() {
    $('.navbar-collapse').collapse('hide');
    });

    $(document).on("click touchend",function (event) {
        var clickover = $(event.target);
        var _opened = $('.navbar-collapse').hasClass("in");
        if (_opened === true && !clickover.hasClass("navbar-collapse")) {
            $('.navbar-collapse').collapse('hide');
        }
    });

	/* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */

	jQuery('#nav').singlePageNav({
		offset: jQuery('#navigation').outerHeight() + 20,
		filter: ':not(.externallink)',
		speed: 2000,
		currentClass: 'current',
		easing: 'swing',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});

    /* ========================================================================= */
    /*	page transition
    /* ========================================================================= */

    $("#business").on('click', function(e){
        e.preventDefault();
        window.location.href = "expertise.html";
        window.location = "expertise.html?tab=business";
    });
    $("#property").on('click', function(e){
        e.preventDefault();
        window.location.href = "expertise.html";
        window.location = "expertise.html?tab=property";
    });
    $("#immigration").on('click', function(e){
        e.preventDefault();
        window.location.href = "expertise.html";
        window.location = "expertise.html?tab=immigration";
    });
    $("#litigation").on('click', function(e){
        e.preventDefault();
        window.location.href = "expertise.html";
        window.location = "expertise.html?tab=litigation";
    });

    function getParameterByName(name)
    {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    /* when page load */
    jQuery(window).load(function(){
        /* disabled class */
        $('#submit').prop('disabled', false);

        /* select menu after loads */
        if(getParameterByName('tab') == 'aboutus')
        {
            $('.navbar-nav li a[href$="#aboutus"]').click()
        } else if(getParameterByName('tab') == 'news') {
            $('.navbar-nav li a[href$="#news"]').click()
        } else if(getParameterByName('tab') == 'contactus'){
            $('.navbar-nav li a[href$="#contactus"]').click()
        } else if(getParameterByName('tab') == 'autoservices'){
            $('.navbar-nav li a[href$="#autoservices"]').click()
        }

        /* select service */
    	if(getParameterByName('tab') == 'property')
        {
            $("#property-menu").addClass("current");
            $("#property-content").addClass("active");
        } else if(getParameterByName('tab') == 'business')
        {
            $("#business-menu").addClass("current");
            $("#business-content").addClass("active");
        } else if(getParameterByName('tab') == 'immigration')
        {
            $("#immigration-menu").addClass("current");
            $("#immigration-content").addClass("active");
        } else if(getParameterByName('tab') == 'litigation')
        {
            $("#litigation-menu").addClass("current");
            $("#litigation-content").addClass("active");
        } else {
            $("#business-menu").addClass("current");
            $("#business-content").addClass("active");
        }

        /* news slider */
        $('.newsslider').bxSlider({
            slideWidth: 300,
            minSlides: 1,
            maxSlides: 4
        });

        /* news content */
        $(".news").click(function() {
            title = $(this).find('.title').text();
            imagepath = $(this).find('img').attr('id');
            content = $(this).find('.content').text();
            $('.news-title h1').text(title);
            $('.newscontent img').attr('src',imagepath);
            $('.newscontent p').text(content);
        });

    });

    /* =========================================================================
    *   expertise menu jquery
    * ========================================================================= */

    $('.service-menu').on('click', function(e){
        $('.current').removeClass('current');
        $(this).addClass('current');
    });

    /* =========================================================================
    *   expertise menu jquery
    * ========================================================================= */

    $(".sendMail").click(function() {
        $('#emailContactForm').validate({
            rules: {
                name: {required: true, pattern:/^[a-zA-Z]+[a-zA-Z ]+$/},
                email: {required: true, email: true},
                subject: {required: true, pattern:/^[a-zA-z0-9$]+[a-zA-Z0-9$\+\- ]+$/},
                message: {required: true, maxlength: 200}
            },
            messages: {
                name: {
					required:"Please Fill in your Name",
					pattern:"Please Enter a Valid Name"
				},
                email: {
					required:"Please Fill in Your Email",
					email:"Please Enter a Valid Email"
				},
                subject: {
					required:"Please Fill in a Subject Title",
					pattern:"Please Remove Non Alphanumeric Characters"
				},
                message: {
					required:"Message is Empty"
				},
            }
        });
    });
});
