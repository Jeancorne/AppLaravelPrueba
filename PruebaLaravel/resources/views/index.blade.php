<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/js.js"></script>
    
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 rowHeader">
            <header>
                <a href="ingresar">
                    <span>Ingresar</span>
                </a>
                <a href="registrar">
                    <span>Registro</span>
                </a>
            </header>
        </div>
    </div>
    <br>
    @extends($layout)
    <div class="row">
        <div class="col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 rowFooter">
            <Footer>
                <h5>Footer</h5>
            </Footer>
        </div>
    </div>
</body>

</html>