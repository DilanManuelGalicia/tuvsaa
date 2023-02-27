<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 400px) {
.h-custom {
height: 100%;
}
}
    </style>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"><img src="img/LOGO_TUVSA_DRAGON.svg" width="90px">TUVSA</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Quienes somos</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                              </li>
                            </ul>
                            <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                      <div style="text-align: center;">
                        
                    </div>
                      <head>
        
                    </head>
                    <container>
                      
                    </container>
                    <asset>
        
                    </asset>
                    <footer>
        
                    </footer>
                </div>
            </div>
        
        </div>
    </header>
   
    <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="img/LOGO_TUVSA.svg"
                    class="img-fluid" width="500px">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form action="respuesta.php" method="post">
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="usuario"
                        placeholder="Ingrese su Usuario" />
                        <label class="form-label" for="form3Example3">Usuario</label>
                    </div>

                    <div class="form-outline mb-3">
                        <input type="password" class="form-control" name="password"
                        placeholder="Ingrese contraseña" />
                        <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">NO tienes cuenta <a href="index3.php"
                class="link-danger">Registrate</a></p>
                    </div>
                </form>

                        
                    
                </div>
              </div>
            </div>

    </section>
    
</body>
</html>