
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/map.png')}}" type="image/x-icon">
    <title>BUSCAR CEP</title>
    <!--  BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <!--JS-->
    <script src="{{asset('js/scripts.js')}}" defer></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/google-maps.png')}}" alt="LOGOTIPO">
            </a>
            <div class="navbar-nav">
                <a href="/" class="nav-link active" id="home-link">Home</a>
                <a href="{{ route('historico') }}" class="nav-link active" id="home-link">Historico</a>
                <a href="{{ route('favoritos') }}" class="nav-link active" id="home-link">Favoritos</a>
            </div>
        </nav>
    </header>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>      
@elseif(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>  
@endif

    @yield('content')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
 
