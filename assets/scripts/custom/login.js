var Login = function () {

	var handleLogin = function() {

		$('.login-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                role: {
	                    required: true
	                }
	            },

	            messages: {
	                username: {
	                    required: "Username is required."
	                },
	                password: {
	                    required: "Password is required."
	                },
	                role: {
	                    required: "Role is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.alert-danger', $('.login-form')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: submitForm
	        });

	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
	                    $('.login-form').submit(); //form validation success, call ajax form submit
	                }
	                return false;
	            }
	        });
	}

	var handleForgetPassword = function () {
		$('.forget-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                email: {
	                    required: true,
	                    email: true
	                }
	            },

	            messages: {
	                email: {
	                    required: "Email is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: submitForm
	        });

	        $('.forget-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.forget-form').validate().form()) {
	                    $('.forget-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#forget-password').click(function () {
	            jQuery('.login-form').hide();
	            jQuery('.forget-form').show();
	        });

	        jQuery('#back-btn').click(function () {
	            jQuery('.login-form').show();
	            jQuery('.forget-form').hide();
	        });

	}

	
    
    return {
        //main function to initiate the module
        init: function () {
            handleLogin();
            handleForgetPassword();
        }

    };

}();

function submitForm()
{  
	var data = $("#login-form").serialize();

	$.ajax({

		type : 'POST',
		url  : 'login-code.php',
		data : data,
		beforeSend: function()
		{ 
			$("#error").fadeOut();
			$("#btn-login").html('<img src="assets/img/ajax_loading.gif" /> &nbsp; sending ...');
		},
		success :  function(response)
	  	{      
		 	if(response=="ok"){
		    
		  		$("#btn-login").html('<img src="assets/img/ajax_loading.gif" /> &nbsp; Signing In ...');
		  			setTimeout(' window.location.href = "index.php"; ',4000);
		 		}
		 	else{
	 			$("#error").fadeIn(1000, function(){
		 			$("#error").html(response);
		 			$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
			       	$(".alert").removeClass("display-hide");
		       	});
		 	}
	 	}
	});
	return false;
}