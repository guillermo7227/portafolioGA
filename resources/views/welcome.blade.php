<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

      <!-- cabecera -->
      @include('includes.cabecera')


      <!-- cuerpo -->
      <div class="container my-3">

        <h3><b>Objetivo Profesional</b></h3>

        <p>
          Mi objetivo es asumir nuevos retos para aplicar mis conocimientos en proyectos que impacten positivamente la productividad de mis clientes. Vivo de la programación porque es mi pasión. Mi deseo es aportar  mis habilidades para hacer un mundo mejor.
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
