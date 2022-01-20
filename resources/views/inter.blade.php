<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Inter</title>
</head>
<body>

  <div class="container p-4 d-flex align-items-center flex-column">

    <h1 class=" display-1">INTER</h1>

    <img class=" w-25" src="https://static.sky.it/images/skysport/it/calcio/serie-a/2021/02/11/inter-nuovo-logo/Inter%20logo.jpg" alt="">

    <ul>
      @foreach ($players as $player)
        <li class="display-6">{{$player}}</li>
      @endforeach
    </ul>

  </div>
  
</body>
</html>