$(document).ready(function() {
    $("#basic-form").validate({
        rules: {
            firstname: {
                required: true,
                minlength: 3
            },
            lastname: {
                required: true,
                minlength: 3
            },
            city: {
                required: true,
                minlength: 3
            },
            adress: {
                required: true,
                minlength: 3
            },
            cp: {
                required: true,
                minlength: 3
            },
            date: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            check: {
                required: true
            }
        },
        messages: {
            firstname: {
                required: "Obligatorio",
                minlength: "+3 caracteres"
            },
            lastname: {
                required: "Obligatorio",
                minlength: "+3 caracteres"
            },
            city: {
                required: "Obligatorio",
                minlength: "+3 caracteres"
            },
            adress: {
                required: "Obligatorio",
                minlength: "+3 caracteres"
            },
            cp: {
                required: "Obligatorio",
                minlength: "+3 digitos"
            },
            date: {
                required: "Obligatorio"
            },
            email: {
                required: "Obligatorio",
                email: "Formato Incorrecto"
            },
            password: {
                required: "Obligatorio"
            },
            check: {
                required: "Obligatorio"
            }
        }
    });
});