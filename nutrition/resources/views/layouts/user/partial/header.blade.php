<nav class="navbar navbar-expand-lg text-light bg-color">
    <section class="container">
        <a class="navbar-brand text-light" href="{{ url('/') }}">Nutrition Guide</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto nav-list">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="@route('contact')">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="@route('health')">Health</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="@route('food-seafty')">Food Safety</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="@route('user.check.fitness')">Check Fitness</a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if(Auth::check())
            <a class="dropdown-item" href="@route('user.logout')">Logout</a>
            @else
              <a class="dropdown-item" href="@route('login')">Logout</a>
              <a class="dropdown-item" href="@route('register')">Register</a>
            @endif
            </div>
          </li>
      </ul>
    </div>
    </section>
</nav> <!-- nabar end here-->
