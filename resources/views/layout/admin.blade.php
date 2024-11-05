<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    @include('layout.header');
    <div class="container mt-5">
        <h2 class="mb-5">Admin Dashboard</h2>

        @if (session('success'));
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.dashboard') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control" name="image" required>
                @error('image')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <form method="get" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
    </div>
</body>
</html>
