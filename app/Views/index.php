<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>Pagina de Ejemplo</title>
</head>

<body>
    <h1>Expediente</h1>
    <br>
    <hr class="border border-danger border-2 opacity-50">
    <br>

    <!-- Aqui Empieza el Form -->
    <form class="row g-3 needs-validation container" novalidate>
        <div class="col-md-8">
            <label for="establecimiento" class="form-label">Establecimiento que registra</label>
            <select class="form-select" id="establecimiento" required>
                <option selected disabled value="">Seleccione un establecimiento...</option>
                <option>...</option>
                <option>...</option>
                <option>...</option>
            </select>
            <div class="invalid-feedback">
                Por favor seleccione un establecimeinto valido--.
            </div>
        </div>
        <div class="col-md-4">
            <label for="expediente" class="form-label">N° Expediente</label>
            <input type="text" class="form-control" id="expediente" placeholder="Ej: 00023848" value="" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="pNombre" class="form-label">Primer Nombre</label>
            <input type="text" class="form-control" id="pNombre" placeholder="Ej: Maria" value="" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="sNombre" class="form-label">Segundo Nombre</label>
            <input type="text" class="form-control" id="sNombre" placeholder="Ej: Luisa" value="" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="tNombre" class="form-label">Tercer Nombre</label>
            <input type="text" class="form-control" id="tNombre" placeholder="Ej: Fernanda" value="" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        
        <div class="col-md-4">
            <label for="pApellido" class="form-label">Primer Apellido</label>
            <input type="text" class="form-control" id="pApellido" placeholder="Ej: Hernandez" value="" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="sApellido" class="form-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="sApellido" placeholder="Ej: Marroquin" value="" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="ApellidoCasada" class="form-label">Apellido de Casada</label>
            <input type="text" class="form-control" id="ApellidoCasada" placeholder="Ej: De Siguenza" value="">
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>

        <div class="col-md-4">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" class="form-control" id="dui" placeholder="Ej: 09387362-1" value="">
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="fecha" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha" value="">
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Genero</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Escoja uno...</option>
                <option>...</option>
                <option>...</option>
            </select>
            <div class="invalid-feedback">
                Por favor seleccione uno.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</body>

</html>