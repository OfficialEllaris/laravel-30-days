<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laracasts - example.test | Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css'])

    <link rel="shortcut icon" href="https://assets.laracasts.com/images/secondary-logo-symbol.svg" type="image/x-icon">


</head>

<body class="bg-body-tertiary">

    <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid px-md-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navigationSection" aria-controls="navigationSection" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="https://assets.laracasts.com/images/secondary-logo-symbol.svg" class="me-2"
                        alt="Laracasts" width="30" height="24">
                    Laracasts
                </a>
                <div class="collapse navbar-collapse" id="navigationSection">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    </ul>
                    <div class="d-flex align-items-center">
                        @auth
                            <form action="/logout" method="POST">

                                @csrf

                                <button class="btn rounded-3 btn-dark me-2">
                                    <i class="bi-power me-1"></i>Logout
                                </button>
                            </form>
                        @else
                            <a href="/login" class="btn rounded-3 bg-dark-subtle border border-dark border-dashed me-2">
                                <i class="bi-person-bounding-box me-1"></i>Login
                            </a>
                            <a href="/register" class="btn rounded-3 btn-dark">
                                <i class="bi-person-plus me-1"></i>Register
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <header class="mt-3">
            <div class="alert alert-dark border-0 border-start border-3 border-dark rounded-0">
                <h1 class="fs-4 fw-light">{{ $heading }}</h1>
            </div>
        </header>

        <main class="my-4">
            {{ $slot }}
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
