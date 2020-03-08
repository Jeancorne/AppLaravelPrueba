$(document).ready(function () {

    $('.buto').on('click', function (e) {
        e.preventDefault();
        var value = $(this).attr('name');
        GetCursos(value);
    })

    $('#formularioCrear').on('submit', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $('.btnCrear').css('display', 'none');
        $.ajax({
            type: 'POST',
            url: 'crearCurso',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function (xhr, type) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (data) {
               
                if (data.ok != null) {
                    swal({
                        icon: 'success',
                        title: 'Registro',
                        text: 'éxitoso!',
                        timer: 1500
                    })
                    setTimeout(function () {
                        var url = "login";
                        $(location).attr('href', url);
                    }, 1000);
                }
            }
        })
    })

    $('#formularioRegistro').on('submit', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $.ajax({
            type: 'POST',
            url: 'registrarUsuario',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function (xhr, type) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (data) {
                if (data.ok != null) {
                    swal({
                        icon: 'success',
                        title: 'Registro',
                        text: 'éxitoso!',
                        timer: 1500
                    })
                    setTimeout(function () {
                        var url = "ingresar";
                        $(location).attr('href', url);
                    }, 1000);
                }
                if (data.usuariovacio != null || data.passwordvacio != null) {
                    swal("Error", "Llene todos los campos", "error");
                }
            },
            error: function (err) {
                swal("Error", err, "error");
            }
        })

        return false;
    })

    $('#formulario').on('submit', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $.ajax({
            type: 'POST',
            url: 'loginUsuario',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function (xhr, type) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (data) {
                if (data.ok != null) {
                    swal({
                        icon: 'success',
                        title: 'Ingreso',
                        text: 'éxitoso!',
                        timer: 1500
                    })
                    setTimeout(function () {
                        var url = "login";
                        $(location).attr('href', url);
                    }, 1000);
                }
                if (data.error != null) {
                    swal({
                        icon: 'error',
                        title: 'Contraseña o Usuario Incorrecto',
                        text: 'no es valido!',
                        timer: 2000
                    })
                    setTimeout(function () {
                        var url = "ingresar";
                        $(location).attr('href', url);
                    }, 1000);
                }
            }
        })
        return false;
    })

})
function GetCursos(id) {
    var value = id;
    $.ajax({
        type: 'POST',
        url: 'deleteCurso',
        data: { value },
        beforeSend: function (xhr, type) {
            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function (data) {
            $('#demo').html(data);
            $('.buto').on('click', function (e) {
                e.preventDefault();
                var value = $(this).attr('name');
                GetCursos(value);
            })
        },
        error: function (e) {
            console.log(e);
        }
    })
}