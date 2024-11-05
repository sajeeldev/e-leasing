<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Register</title>
    <style>

        .container{
            padding: 40px;
            border-radius: 8px;
            color: #fff;
            background: rgb(0, 212, 255);
            background: linear-gradient(90deg, rgba(0, 213, 255, 0.644) 0%, rgba(156, 49, 213, 0.471) 61%, rgba(183, 31, 178, 0.405) 100%);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        section {
            margin-top: 50px;
            border-radius: 8px;
            width: 50%;
            display: flex;
            position: relative;
            left: 24%;
            width: 50%;
            background: rgb(0, 212, 255);
            background: linear-gradient(90deg, rgba(0, 213, 255, 0.644) 0%, rgba(156, 49, 213, 0.471) 61%, rgba(183, 31, 178, 0.405) 100%);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .register {
            text-decoration: none;
            color: #fff;
        }
        .register:hover {
            color: #145bc4;
        }
    </style>
</head>

<body>
    @include('layout.header');
    <section>
        <div class="container p-5">
            <div class="d-flex justify-content-center p-3">
                <h1>Login</h1>
            </div>
            <div class="d-flex justify-content-center">
                <form method="POST"  action="{{route('login.post')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group form-check">
                        {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label> --}}
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Login</button>
                    <div class="text-white mt-2">Don't have account <a class="register" href=" {{ route('register') }} ">Register Here</a></div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
