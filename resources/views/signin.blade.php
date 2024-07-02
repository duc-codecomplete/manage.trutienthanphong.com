<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tru Tiên</title>
    <!-- CSS files -->
    <link href="/ui/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="/ui/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="content">
                <div class="card card-md">
                    <div class="card-body">
                        <h2 class="h2 text-center mb-4">Đăng Nhập</h2>
                        <form action="" method="POST" autocomplete="off" novalidate>
                            @csrf
                                @if(Session::has('error'))
                                <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                                    <small>{{ Session::get('error') }}</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            <div class="mb-3">
                                <label class="form-label">Tên đăng nhập</label>
                                <input type="" class="form-control" placeholder="Tên đăng nhập" autocomplete="off" name="login"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">
                                    Mật khẩu
                                </label>
                                <input type="password" class="form-control" autocomplete="off"
                                    placeholder="Mật khẩu" required="required" name="password">
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/ui/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="/ui/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>