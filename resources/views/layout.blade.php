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
    <nav class="navbar d-flex flex-row bd-highlight navbar-light bg-light shadow-sm p-1 mb-1 bg-white rounded" >
        <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center p-1 flex-grow-1" href="{{ route('listar_series') }}">
            <img src="https://img-premium.flaticon.com/png/512/2828/premium/2828307.png?token=exp=1625668705~hmac=804ee24a51e0bad2eb357735c06de75d" alt="" width="40" height="40" class=" mr-2">
               Home</a>
            
        @auth
        
        

        @yield('pesquisar')
        <a class="ml-2"href="/sair" >Sair</a>
       
        </div>
    </nav>
    <!-- <img src="{{ public_path('img/cachorro.png') }}" alt="" class="img-fluid"> -->
    
    <div class="bg-info text-white">
        <div class="container">
            
            <div class="row align-items-center g-0 ">
            @yield('cabecalho')
                                    
                @yield('imagem')
                
            </div>
        </div>
    </div>
    
    <div class="container mt-2">
        @yield('conteudo')
    </div>
    @endauth
</body>
</html>