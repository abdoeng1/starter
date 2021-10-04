<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    <div>
      @forelse ($data as $_data)
          <p>{{$_data}}</p>
      @empty
          <p>this is empty paragraph</p>
      @endforelse
</div>
</body>
</html>
