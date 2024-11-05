<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Leasing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap Icons -->
    <style>
        /* Custom Styles */
        .cover-section {
            background: url({{asset('assets/mountains.jpg')}}) center/cover no-repeat;
            position: relative;
            height: 75vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: 0;
            padding: 0;
            top: -24px;
        }



        .navbar {
            background-color: #1a2734;
            z-index: 9;
        }

        .navbar .nav-link,
        .nav-item {
            color: #fff;
            padding: 0 10px 0 10px;
        }
        .navbar .nav-link:hover {
            color: #19B7EA;
        }

        .navbar .navbar-nav .nav-item,
        .nav-link.active {
            color: #fff;
        }

        #navbar2 {
            position: absolute;
            top: 6.3rem;
            left: 7%;
            height: 60px;
            width: 83%;
            padding: 0;
        }

        .nav-item {
            padding: 0 10px 0 10px;
        }

        #contact {
            background-color: #28a745;
            padding: 11px 30px;
        }
        .nav-item .btn-contact {
            color: white;
            font-weight: bold;
        }

        #contact:hover {
            background-color: #218838;
            color: white;
        }

        .register {
            position: absolute;
            right: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #login {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #register {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    @include('layout.header');

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar2">

        <div class="collapse navbar-collapse container d-flex justify-content-start" id="navbarSupportedContent">
            <!-- Links -->

            <div>
                <ul class="navbar-nav">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle role="button" data-bs-toggle="dropdown"" href="#"
                            aria-expanded="false">All items</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lands</a></li>
                            <li><a class="dropdown-item" href="#">Mountains</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Complaints</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                </ul>

            </div>
            <div class="register">
                <ul class="navbar-nav">
                    <li class="nav-item" id="login">
                        <a class="nav-link" href=" {{ route('login') }} "><i class="bi bi-person"></i> Login</a>
                    </li>
                    <li class="nav-item" id="register">
                        <a class="nav-link" href=" {{ route('register') }} "><i class="bi bi-pencil-square"></i> Register</a>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="btn btn-contact" href="#">+ Contact Us</a>
                    </li>
                </ul>
            </div>

    </nav>


    <!-- Cover Section -->
    <section class="cover-section">
        <h1 class="display-5" id="Welcome">Welcome to E-Leasing</h1>
        <a href="#" class="btn btn-primary">Browse Categories</a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
