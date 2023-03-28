<html>
    <head>
        <title>Exemplo de Formulario</title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body class="bg-body-secondary">
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col bg-primary">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">SISTEMA WEB</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                      <a class="nav-link" href="#">Consultar</a>
                    </div>
                  </div>
                </div>
              </nav>
          </div>
          <div class="col-1">
            &nbsp;
          </div>
        </div>
            <div class="row">
              <div class="col-1">
                &nbsp;
              </div>
              <div class="col bg-white"><br>
                <h3 class="text-start fs-5">Cadastrar - Agendamento de Potenciais Clientes</h3>
                <p class="text-start fs-5">Sistema Utilizado para agendamento de serviços.</p>
                <p>
                    <form method="Post" action="teste.class.php">
                    <div class="mb-3 text-start">
                          <label for="exampleInputEmail1" class="form-label">Nome:</label>
                          <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="mb-3 text-start">
                          <label for="exampleInputEmail1" class="form-label">Telefone:</label>
                          <input type="text" placeholder="(xx)xxxxx-xxxx" class="form-control" name="telefone" id="telefone">
                        </div>
                        <div class="mb-3 text-start">
                          <label for="exampleInputEmail1" class="form-label">Origem:</label>
                          <select class="form-select" name="origem" id="origem" >
                            <option selected>Celular</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Telefone Fixo">Telefone Fixo</option>
                          </select>
                        </div>
                        <div class="mb-3 text-start">
                          <label for="exampleInputEmail1" class="form-label">Data do Contato:</label>
                          <input type="date" class="form-control" name="datac" id="datac">
                          </div>
                          <div class="mb-3 text-start">
                          <label for="exampleInputEmail1" class="form-label">Observação:</label>
                          <textarea class="form-control" placeholder="" name="obs" id="obs" style="height: 100px"></textarea>
                          </div>
                          <div class="mb-3 text-start">
                          <input type="submit" name="Cadastrar" value="Cadastrar">
                          </div>
                </p>
              </div>
              <div class="col-1">
                &nbsp;
              </div>
            </div>
      </div>
    </body>
</html>