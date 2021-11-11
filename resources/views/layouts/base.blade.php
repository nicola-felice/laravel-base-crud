<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">laravel-comics</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route("comics.index")}}">Lista fumetti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("comics.create")}}">Crea un nuovo fumetto</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      @yield('pageContent')
    </div>
  </main>

  <script src="{{asset("js/app.js")}}"></script>
</body>
</html>