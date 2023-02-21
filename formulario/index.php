<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row-mb-5">
            <div class="col-md-4 mt-5"></div>
                <div class="col-md-4 mt-5">
                    <form action="respuesta.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Usuario:</label>
                            <input type="text" class="form-control" name="usuario">
                                  <div class="form-text">Escriba su usuario</div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Password</label>
                                  <input type="password" class="form-control" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                
                </div>       
                <div class="col-md-4 mt-5"></div> 
                    
            </div>
        </div>
    </div>
</body>
</html>