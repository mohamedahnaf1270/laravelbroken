<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-inv</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand lead" href="#">Discord</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active lead" aria-current="page" href="{{route('items.index')}}">Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link lead" href="{{route('items.create')}}">Add new</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="flex-main">
        <div class="sidenav flex-sub">
          <a href="" class="lead p-1 m-1 mt-6 sidenav-link">Home</a>
          <a href="" class="lead p-1 m-1 sidenav-link">Statistics</a>
          <a href="" class="lead p-1 m-1 sidenav-link">About us</a>
          <a href="" class="lead p-1 m-1 sidenav-link">Contact us</a>
        </div>

      <div class="container">
    @yield('page')
      </div>
  </div>
</body>
</html>