$(document).ready(function() {

	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches
 	// initialize tooltipster on text input elements

	$('#msform input[type="text"], #msform input[type="radio"]').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'right'
    });

	$(".next").click(function(){
		// initialize validate plugin on the form
		$('#msform').validate({
			errorPlacement: function (error, element) {

            var lastError = $(element).data('lastError'),
                newError = $(error).text();

            $(element).data('lastError', newError);
			// check if newError is equal to lastError
            if (newError !== '' && newError !== lastError) {
                $(element).tooltipster('content', newError);
                $(element).tooltipster('show');
            }

        },
        success: function (label, element) {
            $(element).tooltipster('hide');
        },
			rules: {
				infringementOption: {required: true},
				firstName: {required: true, pattern:/^[a-zA-Z]+[a-zA-Z ]+$/},
				lastName: {required: true, pattern:/^[a-zA-Z]+[a-zA-Z ]+$/},
				infringementNo:{required: true, pattern:/^[a-zA-Z0-9]+[a-zA-Z0-9 ]+$/}
			},
			messages: {
				infringementOption: {required:"Please Select an Infringement Reason"},
				firstName: {
					required:"Please Fill in Your First Name",
					pattern:"Please Enter a Valid First Name"
				},
				lastName: {
					required:"Please Fill in Your First Name",
					pattern:"Please Enter a Valid Last Name"
				},
				infringementNo: {
					required:"Please fill in Your Infringement Number",
					pattern:"Please Enter a Valid Infringement Number"
				}
			}
			});

		if ((!$('#msform').valid())) {
			return false;
		}

		if(animating) return false;
		animating = true;

		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
/*
		next_fs.fadeIn('slow');
		current_fs.css({'display':'none'});
		// Adding Class Active To Show Steps Forward;
		next_fs.addClass('active');
*/
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				//command to scale current_fs to 80%
				current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
				//command to bring next_fs from the right
				next_fs.css({'left': left, 'opacity': opacity});
			},
			duration: 800,
			complete: function(){
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});


	$(".previous").click(function(){
		$('#msform input[type="text"]').tooltipster('hide');
		$('#msform input[type="text"]').removeClass('error');
		if(animating) return false;
		animating = true;

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

/*
		current_fs.removeClass('active');
		current_fs.css({'display':'none'});
		previous_fs.fadeIn('slow');
		//Remove Class Active To Show Steps Backward;
	*/

		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			},
			duration: 800,
			complete: function(){
				current_fs.hide();
				previous_fs.css({'position':'inherit'});
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});
/*
	$(".submit").click(function() {
		var chosenInfOption = $('input[name="infringementOption"]:checked').val();
		var infOptReason = $('input[name="infringementOption"]:checked').next('label:first').text();
		var firstName = $('#firstName') .val();
		var lastName = $('#lastName').val();
		var InfNo = $('#infNo').val();
		switch (chosenInfOption) {
			case '1':
			$('#letterOutput').html(function() {
				return "No. 1" + "</br>" + "You reason is : " + infOptReason + "</br>" + "Your name is : " + firstName + " " + lastName + "</br>" + "Infringement Number = " + InfNo;
			});
			break;
			case '2':
			$('#letterOutput').html(function() {
				return "No. 2" + "</br>" + "You reason is : " + infOptReason + "</br>" + "Your name is : " + firstName + " " + lastName + "</br>" + "Infringement Number = " + InfNo;
			});
			break;
			case '3':
			$('#letterOutput').html(function() {
				return "No. 3" + "</br>" + "You reason is : " + infOptReason + "</br>" + "Your name is : " + firstName + " " + lastName + "</br>" + "Infringement Number = " + InfNo;
			});
		}
	});
	*/
});




/*
$("#parkingReviewForm").validate({
	rules: {
		firstname: "required",
		lastname: "required",
		infringementOption: "required",
	},
	messages: {
		firstname: "Please enter your first name",
		lastname: "Please enter your last name",
		infringementOption: "Please pick an infringement reason",
	}
});
$('#parkingReviewForm').on('keyup blur', function () { // fires on every keyup & blur
if ($('#parkingReviewForm').valid()) {                   // checks form for validity
	$('input.next').prop('disabled', false);        // enables button
}

	$(".submit").click(function(){
		return false;
	});

	$('input.next').prop('disabled', 'disabled');// disables button
	$("#infringement_reason").validate({
		rules: {
			infringement_reason: {required: true}
		},
		messages: {
			infringement_reason: {required:"Please pick an infringement reason"},
		}
	});
	$('#infringement_reason').on('keyup blur', function () { // fires on every keyup & blur
	if ($('#infringement_reasonm').valid()) {                   // checks form for validity
		$('input.next').prop('disabled', false);        // enables button
	}
	});*/
