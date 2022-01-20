<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Home</title>
</head>
<body>

  <div class="container p-4 d-flex align-items-center flex-column">

    <h1>Serie A</h1>

    
    <ul class="nav ">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">HOME</a>
      </li>
      
      @foreach ($squads as $squad)
      
      <li class="nav-item">
        <a class="nav-link" href="'route({{$squad}})'">{{$squad}}</a>
      </li>
      
      @endforeach
    </ul>
    
    <img src="https://upload.wikimedia.org/wikipedia/it/thumb/c/c5/Logo_Serie_A_TIM_2021.svg/210px-Logo_Serie_A_TIM_2021.svg.png" alt="Logo Serie A">

  </div>
  
</body>
</html>