<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>metodo_post</title>
    <?php require_once "menu.php"?>
</head>
<body>

<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="bg-white shadow-lg rounded">
                <form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">DUI</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                        <td><?php echo $_POST['codigo']?></td>
                        <td><?php echo $_POST['nombres']?></td>
                        <td><?php echo $_POST['apellidos']?></td>
                        <td><?php echo $_POST['dui']?></td>
                        <td><?php echo $_POST['direccion']?></td>
                        <td><?php echo $_POST['telefono']?></td>
                    </tr>
                </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>