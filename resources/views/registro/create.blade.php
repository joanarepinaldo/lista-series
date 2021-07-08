@include('erros', ['errors' => $errors])
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Séries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1590611604">
    
</head>

  <body>
  
    <!-- Login Form -->
    <div class="container space-2 space-lg-3">
      <form class="w-md-75 w-lg-50 mx-md-auto"method="post" >
      @csrf
        <!-- Title -->
        <div class="mb-5 mb-md-7 text-center">
        <img class="mb-4 mt-4" src="https://img-premium.flaticon.com/png/512/2828/premium/2828307.png?token=exp=1625668705~hmac=804ee24a51e0bad2eb357735c06de75d" alt="" width="72" height="72">
         <h1 class="h2 mb-1">Bem-vindo!</h1>
          <p>Realize seu cadastro</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class=" form-group">
           <label for="name"class="input-label h5">Nome</label>
            <input type="text" name="name" id="name" required="" class="form-control" placeholder="Nome">
        </div>
        <div class=" form-group">
           <label for="email"class="input-label h5">E-mail</label>
            <input type="email" name="email" id="email" required="" class="form-control"placeholder="Email">
        </div>
        
        <div class=" form-group">
            <label for="password" class="input-label h5">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control"placeholder="********">
         </div>
        <!-- End Form Group -->

        <!-- Button -->
         <div class="mb-5 mb-md-7 text-center">
            <button type="submit" class="btn btn-primary mt-2"><h5 class="text-white">
                Entrar
            </button>
           
          </div>
        
        <!-- End Button -->
      </form>
    </div>
    <!-- End Login Form -->
  
</body>
</html>
