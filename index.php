<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Clientes</title>
    <?php require_once "menu.php"?>
  </head>
  <body>

  <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <form method="POST" action="metodo_post.php">
                <h2>Nuevo Cliente</h2>

                    <hr>

                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input id="codigo" class="form-control" type="text" name="codigo">
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" class="form-control" type="text" name="nombres">
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos">
                    </div>

                    <div class="form-group">
                        <label for="dui">DUI</label>
                        <input id="dui" class="form-control" type="text" name="dui">
                    </div>

                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input id="direccion" class="form-control" type="text" name="direccion">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono">
                    </div>

                    <br>

                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>