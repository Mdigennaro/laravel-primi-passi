<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    img{
      width: 200px;
    }
  </style>

  <title>Juventus</title>
</head>
<body>

  <div class="container p-4 d-flex align-items-center flex-column">

    <h1 class=" display-1">JUVENTUS</h1>

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Juventus_FC_2017_icon_%28black%29.svg/1200px-Juventus_FC_2017_icon_%28black%29.svg.png" alt="">

    <ul>
      @foreach ($players as $player)
        <li class="display-6">{{$player}}</li>
      @endforeach
    </ul>

  </div>
  
</body>
</html>