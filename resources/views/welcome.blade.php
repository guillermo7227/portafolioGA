<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>

      <!-- cabecera -->
      @include('includes.cabecera')


      <!-- cuerpo -->
      <div class="container my-3">

        <h3><b>My Goal</b></h3>

        <p>
        My goal is to tackle new challenges to apply my knowledge in projects that impact positively my clients' productivity. I make a living programming because it is my passion. My wish is to add my part to make my clients thrive.
        </p>


        <!-- habilidades -->
        @include('includes.habilidades')

        <!-- formacion -->
        @include('includes.formacion')

        <!-- portafolio -->
        @include('includes.portafolio')

        <!-- experiencia laboral -->
        @include('includes.experiencia')

      </div>


      <!-- footer -->
      @include('includes.footer')


      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
