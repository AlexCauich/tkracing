<?php include('../auth/auth_session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pilotos</title>
    <link rel="shortcut icon" href="../assets/images/logo.jpg">

    <link rel="stylesheet" href="css/redonde.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><h4>Agregar pilotos</h4></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav  mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-link">
                        <a class="nav-link active" href="track.php">Tabla autodromos</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link active" href="events.php">Tabla eventos</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link active" href="../home.php">Tabla pilotos</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link active" href="../auth/logout.php">Cerrar Sesion</a>
                    </li>
                </ul>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="jumbotron">
            <div class="row" id="App">

                <div class="col-md-4">
                    <form id="form-track" class="card">
                        <div class="card-header"><h6>Nuevo Piloto</h6></div>
                        <div class="card-body">
                            <input type="hidden" id="datoID">
                            <div class="form-group">
                                <h6>Datos del piloto</h6>
                            </div>
                            <div class="form-group">
                                <label for="">ID tag</label>
                                <input type="text" name="idtrack" id="idtrack" class="form-control" placeholder="ID tag" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nombre del piloto</label>
                                <input type="text" name="idtrack" id="idtrack" class="form-control" placeholder="Nombre del piloto" required>
                            </div>
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <input type="text" id="name_track" name="name_track" class="form-control" placeholder="Categoria" required>
                            </div>
                            <div class="form-group">
                                <h6>Auto</h6>
                            </div>
                            <div class="form-group">
                                <label for="">Marca</label>
                                <input type="text" id="mileage" name="mileage" class="form-control" placeholder="Marca" required>
                            </div>
                            <div class="form-group">
                                <label for="">Modelo</label>
                                <input type="text" id="mileage" name="mileage" class="form-control" placeholder="Modelo" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Agregar piloto</button>
                        </div>
                    </form>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¡Ayuda!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Este dato consiste en el ultimo registro de la tabla autodromos, al llenar el campo "Nuevo ID" hay que poner el numero que le sigue al ultimo registro</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Entendido!</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>IDtag</th>
                                    <th>Nombre del piloto</th>
                                    <th>Categoria</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody id="list_pilots">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/tracks.js"></script>
</body>
</html>