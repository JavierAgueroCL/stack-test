//== Class Definition
var SnippetLogin = function() {

    var login = $('#m_login');

    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
			<span></span>\
		</div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        alert.animateClass('fadeIn animated');
        alert.find('span').html(msg);
    }

    var handleSignInFormSubmit = function() {

        $('.login-form').on('submit',function(e) {

            var btn = $("#m_login_signin_submit");
            var form = $(this);
				var Rut = new NinjaRut($(".rut").val());

            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    },
						  rut_empresa: {
                        required: true
                    }
                }
            });
				//Deshabilita el boton

				if(Rut.isValid == true) {
					btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
					if (!form.valid()) {
						//Rehabilita el Boton
						setTimeout(function() {  btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); showErrorMsg(form, 'danger', 'Hay datos incorrectos, intenta nuevamente.');  }, 2000);
						console.log("no valido");
						e.preventDefault();
					}else {
						console.log("valido");
					}
				}
				else {
					showErrorMsg(form, 'danger', 'El RUT ingresado no es válido.');
					e.preventDefault();
				}
        });
    }

    var handleForgetPasswordFormSubmit = function() {

        $('.recuperar-contrasena').on('submit',function(e) {

            var btn = $("#m_login_forget_password_submit");
            var form = $(this);

            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                }
            });

				btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
            if (!form.valid()) {
					setTimeout(function() {
						btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); // remove
						  form.clearForm(); // clear form
						  form.validate().resetForm(); // reset validation states
						  showErrorMsg(form, 'danger', 'Hay errores en el formulario.');
					}, 2000);
						console.log("no valido");
                 e.preventDefault();
            }else {
 					//showErrorMsg(form, 'success', 'Cool! Password recovery instruction has been sent to your email.');
					//e.preventDefault();
				}
        });
    }


	 var formeatear_ruts = function () {
		 $(".rut").on('keyup', function() {
			 var Rut = new NinjaRut($(this).val());
			 $(this).val(Rut.format(true));
			 if(Rut.isValid == true) {
				 $(this).css('background-color', '#00ff0836');
			 } else {
				 $(this).css('background-color', '#ff000c36');
			 }
		 });
	 }

    //== Public Functions
    return {
        // public functions
        init: function() {
            //handleFormSwitch();
				//notificaciones();
				formeatear_ruts();
            handleSignInFormSubmit();
            //handleSignUpFormSubmit();
            handleForgetPasswordFormSubmit();
        }
    };
}();

//== Class Initialization
jQuery(document).ready(function() {
	SnippetLogin.init();
});
