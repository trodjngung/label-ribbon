$(function() {
	// Validate contact-form and send email (AJAX)
	$(".contact-form").validate({
		rules : {
			name : {
				required : true,
				maxlength : 255
			},
			email : {
				required : true,
				email : true,
				maxlength : 100
			},
			phoneNumber : {
				required : true,
				maxlength : 15
			},
			company : {
				maxlength : 255
			},
			division : {
				maxlength : 255
			},
			position : {
				maxlength : 255
			},
			contactType : {
				required : true
			},
			note : {
				maxlength : 255
			}
		},
		messages : {
			name : {
				required : "Please enter your name"
			},
			email : {
				required : "Please enter your email address",
				email : "Please enter a valid email address"
			}
		},
		submitHandler : function(form) {
			$.ajax({
				url : "ajax_contact",
				type : "POST",
				data : $(".contact-form").serialize(),
				success : function(data) {
					window.location.href = './thanks_for_contact';
					console.log("Send email successfully!")
				}
			})
		}
	});

});