$('#operacion').click(regresar);


function regresar() {
    $.ajax({
        url: '../controladores/controladorformulario.php',
        type: 'post',
        datatype: 'json',
        data: {
            usuario: $('#usuario').val(),
            contraseña: $('#contraseña').val(),
            controlador: $('#controlador').val(),
            operacion: $('#operacion').val()
        }
    }).done(
        function (data) {
            var tipo = data;
            var tipoUsuario = tipo.replace(/[ '"]+/g, '');
            console.log(tipoUsuario);
            switch (tipoUsuario) {
                case "cliente":
                    window.location.href = '../html/interfazcliente.php';
                    break;
                case "administrador":
                    window.location.href = '../html/interfazadministrador.php';
                    break;
                case "secretaria":
                    window.location.href = '../html/interfazsecretaria.html';
                    break;
                case "profesional":
                    window.location.href = '../html/interfazprofesionales.php';
                    break;
                case "gerente":
                    window.location.href = '../html/interfazGerente.php';
                    break;
                default:
                    alert("Usuario o contraseña incorrectos");
                    break;
            }

            $('#usuario').val('');
            $('#contraseña').val('');
        }
    );
}