<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav mt-3">
              <li class="nav-item me-5">
                <p class="nav-link active">Krystian Wiese | e-dokumenty</p>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'calendar') active @endif" href="{{route('calendar')}}">1. Kalendarz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'excel') active @endif" href="{{route('excel')}}">2. Excel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'form') active @endif" href="{{route('form')}}">3. Formularz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'debug') active @endif" href="{{route('debug')}}">4. Debugowanie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'project') active @endif" href="{{route('project')}}">5. Projekt IT</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</div>
