<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Session::has('login'))
    <h1> {{Session::get('login')}} </h1>
    @endif
    <h1>dasghdasg</h1>
</body>
</html>