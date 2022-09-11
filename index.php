<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body style="background: #f3f3f3;">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="container ">
                <div class="card">
                    <div class="card-body">
                        <h1>Formulario de registro</h1>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" id="nombre" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Apellido:</label>
                                        <input type="text" id="apellido" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Edad:</label>
                                        <input type="text" id="edad" class="form-control" required/>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label></label>
                                        <button type="submit" class="btn btn-primary" style="float: right;" id="btnEnviar">Enviar datos</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/guardar.js"></script>
    </body>
</html>
