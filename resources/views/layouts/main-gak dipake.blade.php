{{--  berisi kerangka besarnya, jadi nanti disini semua file yang dipecah akan dipanggil --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('content-title')</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  @include('layouts.sidebar')

  <main class="main-content position-relative border-radius-lg ">
    @include('layouts.navbar')

    <div class="container-fluid py-4">
      {{-- memanggil section content yang sebelumnya dibuat di dashboard, jdi yield mengakses content --}}
      @yield('content')
    </div>
  </main>

  @include('layouts.footer')
</body>
</html>
