      <div class="container-fluid bg-dark text-light">

        <div class="row px-5">

          <div class="col-md-8 text-md-left text-center pt-5">

            <h1 class="ml-n1"><b>Guillermo</b> Agudelo</h1>

            @php
              $fecha_nacim = new \Carbon\Carbon('1986-04-29');
              $edad = $fecha_nacim->diff(\Carbon\Carbon::now())->format('%y');
            @endphp

            <h4>Web Developer, <span class="text-muted">{{ $edad }} years old</span></h4>

            <p class="mt-4">
              Valledupar, Colombia
              <br>
              <a href="mailto:guille.agudelo@gmail.com"
                 class="text-reset">
                guille.agudelo@gmail.com
              </a>
              <br>
              +573017529473
              <br>
              <a href="https://github.com/guillermo7227"
                 target="_blank">
                <img src="{{ asset('img/logos/github.png') }}"
                     alt="Logo GitHub"
                     title="Visit GitHub profile"
                     width="24">
              </a>
              <a href="https://stackoverflow.com/users/2171254/gjaa?tab=profile"
                 target="_blank">
                <img src="{{ asset('img/logos/stackoverflow.png') }}"
                     alt="Logo StackOverflow"
                     title="Visit StackOverflow profile"
                     width="24">
              </a>
            </p>

          </div>

          <div class="col-md-4 py-2 d-flex justify-content-center align-items-center">

            <img src="{{ asset('img/guillermo.jpg') }}"
                 width="170"
                 class="rounded-circle border border-color-light borde-04"
                 alt="Guillermo Agudelo">

          </div>

        </div>

      </div>

