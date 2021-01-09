<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Đăng ký</title>
</head>
<body>
      <div class="">
         @if(Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>
         @endif
          @if(Session::get('fail'))
            <div class="alert alert-danger" role="alert">
              {{Session::get('fail')}}
            </div>
         @endif
     </div>
<form action="/ss" method="POST">
    @csrf
    <div class="form-group">
     <label for="">Email</label>
     <input type="text"
       class="form-control" name="email1" id="" aria-describedby="helpId" placeholder="">
   </div>
   <span>@error('email'){{ $message }} @enderror</span>
    <div class="form-group">
     <label for="">Password</label>
     <input type="text"
       class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
   </div>
   <span>@error('password'){{ $message }} @enderror</span>
   <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>