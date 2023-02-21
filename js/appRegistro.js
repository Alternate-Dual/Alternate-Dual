$().validator.setDefaults( {
    submitHandler: function () {
       alert( "submitted!" );
    }
 });

 $("#enviar").click(function() {
   if ($("#signupForm").valid()) {
     window.modal1.showModal();
   }
 });

$(document).ready(function () {
   $.validator.addMethod("dni", function(value, element) {
      return this.optional(element) ||  /^.*[0-9].*$/i.test(value);
  }, "RFEWGHTHYR.");
  $("#signupForm").validate({
    rules: {
      nombre: {
        required: true,
        minlength: 2,
        pattern:/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/
      },
      apellidos: {
        required: true,
        minlength: 2,
        pattern:/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/
      },

      fecha_nacimiento: {
        required: true,
        date: true
      },

      dni: {
         required: true,
         //minlength: 9,
         pattern: /^\d{8}[a-zA-Z]$/
      },

      sexo: "required",

      correo_electronico: {
         required: true,
         email: true
       },

      password: {
        required: true,
        pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})$/
      },
     
    },
    messages: {
      nombre: {
        required: "Por favor ingresa tu nombre",
        minlength: "Tu nombre debe ser de no menos de 2 caracteres",
        pattern: "El nombre debe empepezar por mayúscula, no se acepta números ni caracteres especiales"
      },
      apellidos: {
        required: "Por favor ingresa tu apellido",
        minlength: "Tu apellido debe ser de no menos de 2 caracteres",
        pattern: "El apellido debe empepezar por mayúscula, no se acepta números ni caracteres especiales"
      },

      dni: {
        required: "Por favor ingresa tu DNI",
       //minlength: "El DNI no es válido",
       pattern:"DNI no válido"
      },

      sexo: "Este campo es obligatorio.",

      password: {
        required: "Por favor ingresa una contraseña",
        pattern:"Minimo 8 caracteres,Maximo 15, Al menos una letra mayúscula, Al menos una letra minucula, Al menos un dígito, No espacios en blanco"
      },

      fecha_nacimiento: "Por favor ingrese un valor mayor o igual a 1950-01-01.",
      correo_electronico: "Por favor ingresa un correo válido"
    },

    errorPlacement: function (error, element) {
       console.log("Error", error, element);
      if (element.is(":radio")) {
        error.appendTo(element.parents(".form-group"));
      } else {
        error.insertAfter(element);
        $(element).addClass("error");
      }
    },
    submitHandler: function (form) {
      //Llamada a Swal, plugin
      Swal.fire({
        position: "center-start",
        icon: "success",
        title: "Te has registrado correctamente.",
        showConfirmButton: false,
        timer: 1500,
      });
    },
  });
});
