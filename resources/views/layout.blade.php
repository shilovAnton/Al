<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-sm navbar-dark border-bottom" aria-label="Девятый пример навигационной панели">
        <div class="container-md">
            <a class="navbar-brand text-warning" href="/"><span style="vertical-align: inherit;"><span
                        style="vertical-align: inherit;">РеALьные профи</span></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL"
                    aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Переключить навигацию">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><span style="vertical-align: inherit;"><span
                                    style="vertical-align: inherit;">Готовность</span></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/timesheet"><span style="vertical-align: inherit;"><span
                                    style="vertical-align: inherit;">Табель</span></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><span
                                style="vertical-align: inherit;">Отключено</span></a>
                    </li>
                </ul>
                <button type="button" class="btn btn-outline-light me-2"><span style="vertical-align: inherit;"><span
                            style="vertical-align: inherit;">Вход</span></span></button>
                <button type="button" class="btn btn-outline-light me-2"><span style="vertical-align: inherit;"><span
                            style="vertical-align: inherit;">Регистрация</span></span></button>
            </div>
        </div>
    </nav>

    <div class="container" style="height: 800px;">
        @yield('content')
    </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>


