
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
    <style>
        body {
            background-color: #1266d36d;
        }



        .navbar {
            height: 6.3rem;
            margin-bottom: 0;
            padding-bottom: 0;
        }


        .logo {
            margin-left: 100px;
        }


        .img {
            width: 50px;
        }

        .icon-pin {
            width: 40px;
            font-size: 23px;
            color: #19B7EA;
            padding: 0 14px 10px 0;
        }

        .icon-phone {
            width: 50px;
            font-size: 25px;
            color: #19B7EA;
            padding: 0 24px 12px 0;
        }

        .text {
            font-size: 13px;
            letter-spacing: 1.5px;
            color: #000;
            transition: 0.5s;
        }

        .custom-hover:hover {
            color: #19B7EA;
        }

        .search-hover {
            border: 1px solid #ccc;
            outline: none;
            background-size: 22px;
            background-position: 13px;
            border-radius: 50px;
            width: 40px;
            height: 40px;
            padding: 25px;
            transition: all 0.5s;
        }

        .search-hover:hover {
            width: 300px;
            padding-left: 50px;
        }
    </style>
    <title>E-Leasing</title>
</head>

<body>
    <header>
        <nav class="navbar d-flex justify-content-between navbar-expand-sm bg-white">
            <div class="d-flex logo"><a class="navbar-brand" href=" {{ route('index') }} ">
                    <img src="{{ asset('assets/logo.png') }}" alt="E-Leasing">
                </a>
            </div>
                <!-- Contact Information Section start -->
                <div class="d-flex contact">
                    <a class="icon-link icon-link-hover icon-phone"
                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="#">
                    <i class="fa-solid fa-phone fa-lg"></i>
                </a>
                <div class="flex-column align-items-center">
                    <div class="d-flex align-items-center me-5">
                        <a href="tel:+923210955933" class="text-decoration-none  text custom-hover">+92 321
                                3230945</a>
                        </div>
                        <div class="d-flex align-items-center me-5">
                            <a href="mailto:info@eleasing.com"
                            class="text-decoration-none text custom-hover">info@eleasing.com</a>
                        </div>
                    </div>
                    <!-- Contact Information Section start -->

                    <!-- Address Information Section start -->
                    <a class="icon-link icon-link-hover icon-pin"
                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="#">
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                </a>
                <div class="flex-column align-items-center">
                    <div class="d-flex align-items-center me-5">
                        <span class="text">Office # 01 Green Plaza <br>
                            Anywhere, Pakistan</span>
                        </div>
                    </div>
                    <!-- Address Information Section end -->

                    {{-- search bar section start --}}
                    <div class="search-bar position-relative me-5">
                        <input type="text" class="search-hover form-control" name="" placeholder="search here..." />
                        <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3" style="color: #aaa;"></i>
                    </div>
                    {{-- search bar section end --}}
                </div>
        </nav>
    </header>
</body>
</html>
