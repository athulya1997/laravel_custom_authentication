<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">    
        <div class="row">
            <div class="col-md-4 offset-4" style="margin-top:50px;">
            <h3 class="text-success">Registration</h3>
            <hr>
            <form action="{{route('reg-user')}}" method="post">
                @csrf
            <div class="form-group">
                <label for="name">Fullname</label>
                <input type="text" class="form-control" placeholder="enter Full name" name="name" value="">
                <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="enter Email" name="email" value="">
                <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="enter Password" name="password" value="">
                <span class="text-danger">@error('password'){{$message}} @enderror</span>
            </div>
            <hr>
            <div class="form-group">
                <button class="btn btn-block btn-success" type="submit">Register</button>
            </div>
            <a href="login">already registered !!! Login Here</a>
            </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>