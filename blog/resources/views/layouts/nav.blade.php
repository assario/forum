   <nav class="navbar navbar-toggleable-md navbar-light" style="background-color:  #BEBEBE;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Форум</a>
     <lu class="nav navbar-nav"><li class="nav-item"><a class="nav-link" href="{{ url('/create_{id}') }}">Создать тему</a></li></lu>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}">Вход</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/register') }}">Регистрация</a>
            </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Профиль</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/setting_{id}') }}">Настройки</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Выход</a></li>
            @endif
        </ul>
      </div>
    </nav>