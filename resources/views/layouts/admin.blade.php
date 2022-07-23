<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://kit.fontawesome.com/aa53675e71.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-slider/css/bootstrap-slider.min.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" style="font-size: 18px !important">
                        <li class="nav-item">
                            <a href="javascript:void()" class="nav-link">
                                <p>
                                    Баланс {{ (float) Illuminate\Support\Facades\Storage::disk('public')->get(config('app.FILE_NAME')) }} $
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('main.index') }}" class="nav-link">
                                <p>
                                    Главная
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.packet.index') }}" class="nav-link">
                                <p>
                                    Пакеты
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.dealer.index') }}" class="nav-link">
                                <p>
                                    Диллеры
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.client.index') }}" class="nav-link">
                                <p>
                                    Клиенты
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.news.index') }}" class="nav-link">
                                <p>
                                    Новости
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.balance.index') }}" class="nav-link">
                                <p>
                                    Пополнить
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.server.index') }}" class="nav-link">
                                <p>
                                    Серверы
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void()" class="nav-link">
                                <p>
                                    Клиенты : {{ Illuminate\Support\Facades\DB::table('client_packets')->groupBy('client_id')->selectRaw('count(*) as total')->get()->count() }}
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-slider/bootstrap-slider.min.js') }}"></script>
    <script>
        $('#summernote').summernote({
            lang: 'ru-RU',
            height: 500, // set editor height
            minHeight: 400,
            maxHeight: null,
            tabsize: 2,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                // ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
    @php
        $allServers = Illuminate\Support\Facades\DB::table('client_packets')
            ->leftJoin('clients', 'clients.id', '=', 'client_packets.client_id')
            ->select('clients.server', DB::raw('count(*) as total'))
            ->groupBy('server')
            ->get()
            ->toArray();
        $servers = [];
        foreach ($allServers as $server) {
            $servers[$server->server] = $server->total;
        }
    @endphp
    <script>
        $(function() {
            @foreach ($servers as $key => $server)
                $('#range_{{ $key }}').ionRangeSlider({
                    min: 0,
                    max: 3000,
                    from: {{ $server }},
                    type: 'single',
                    step: 1,
                    postfix: '',
                    prettify: false,
                    hasGrid: false
                })
            @endforeach
        })
    </script>
</body>

</html>
