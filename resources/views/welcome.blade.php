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
          Mi objetivo es asumir nuevos retos para poner en uso mis conocimientos en proyectos que aporten valor a la sociedad. Quiero aportar mi grano de arena mediante mis habilidades para hacer del mundo un mundo mejor con proyectos que impacten positivamente en la calidad de vida de las personas.
        </p>


        <!-- habilidades -->
        @include('includes.habilidades')


        <!-- portafolio -->
        @include('includes.portafolio')

        <!-- formacion -->
        @include('includes.formacion')

        <!-- experiencia laboral -->
        @include('includes.experiencia')

      </div>


      <!-- footer -->
      @include('includes.footer')


      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
