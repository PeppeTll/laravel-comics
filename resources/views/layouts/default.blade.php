<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- asset() punta direttamente alla cartella public  -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('metaTitle')</title>
</head>

<body>
  @include('partials.header')
  <main>
    @yield('content')
  </main>
  @include('partials.footer')
</body>

</html>
