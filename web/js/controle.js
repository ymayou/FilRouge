//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//
$(document).ready(function(){

    // Validate
    // http://bassistance.de/jquery-plugins/jquery-plugin-validation/
    // http://docs.jquery.com/Plugins/Validation/
    // http://docs.jquery.com/Plugins/Validation/validate#toptions

    $('#form-index').validate({
        rules: {
            nom: {
                minlength: 3,
                required: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages:{
            nom: "Le nom doit contenir au moins 3 lettres",
            password: "Votre mot de passe doit conteni au moins 5 caratères"
        }
    });

    $('#form-profile').validate({
        rules: {
            nom: {
                minlength: 3,
                required: true
            },
            mdp: {
                required: true,
                minlength: 5
            },
            mdpNew: {
                required: true,
                minlength: 5
            },
            mdpCheck: {
                required: true,
                minlength: 5,
                equalTo: "#mdpNew"
            }
        },
        messages:{
            nom: "Le nom doit contenir au moins 3 lettres",
            mdp: "Votre mot de passe doit contenir au moins 5 caratères",
            mdpNew: "Votre nouveau mot de passe doit contenir au moins 5 caratères",
            mdpCheck: "Le nouveau mot de passe et le contrôle ne correspondent pas"
        }
    });
}); // end document.ready