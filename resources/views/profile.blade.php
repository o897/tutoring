<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="">
                <div class="mb-3 mt-2">
                    <img src="" alt="">
                    {{-- User profile image --}}
                </div>
                <div class="mb-3 mt-2">
                    <label for="">Username :</label>
                    <input name="username" type="text" class="form-control" placeholder="username">
                </div>
                <div class="mb-3 mt-2">
                    <label for="">Password :</label>
                    <input name="password" type="text" class="form-control" placeholder="username">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</body>
</html>